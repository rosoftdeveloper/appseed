import { sign, unsign } from "cookie-signature";
import { merge } from "@nore/std/object";
import plugin from "fastify-plugin";
import cuid from "cuid";

const defaults = {
	secret: null,
	cookieName: "sid",
	// 1sec -> 1min -> 60min => 24h
	maxAge: 1000 * 60 * 60 * 24,
	cookie: {
		path: "/",
		httpOnly: true,
		secure: undefined,
		sameSite: undefined,
		domain: undefined,
		expires: undefined,
	},
};

export default plugin(async (fastify, options = {}) => {
	const config = merge(defaults, options);

	if (!config.secret) {
		throw Error(`options.secret is required`);
	}
	// https://security.stackexchange.com/a/96176/38214
	if (config.secret.length < 32) {
		throw Error(`options.secret must have at least 32 characters`);
	}

	const { cookieName, secret, store } = config;

	fastify.addHook("preHandler", async (request, reply) => {
		const signedId = request.cookies[cookieName];

		// start from a fresh session object
		request.sessionId = cuid();
		request.session = {};

		// check for a previous session ID
		if (signedId) {
			// decrypt the request session ID
			const sessionId = unsign(signedId, secret);

			// if there is a valid session ID try to get it from store
			if (sessionId) {
				const session = await store.get(sessionId);

				// if session is found, update the session object
				if (session) {
					request.sessionId = sessionId;
					request.session = session;
				}
			}
		}
	});

	fastify.addHook("onSend", async (request, reply, payload) => {
		// an error occurred, ignore session reset
		if (!request.sessionId) return;

		// remove old stored session
		await store.remove(request.sessionId);

		// session was destroyed
		if (request.session === null) return;

		// save session under new id so no reply attack can be preformed
		const sessionId = cuid();
		const signedId = sign(sessionId, secret);
		const expires = Date.now() + config.maxAge;
		const cookieSettings = { ...config.cookie, expires };

		await store.set(sessionId, request.session, expires);

		reply.setCookie(cookieName, signedId, cookieSettings);
	});

	fastify.decorateRequest("session", {});
});

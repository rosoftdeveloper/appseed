import * as schemas from "./schemas.js";

export default async ({ server, db, services }) => {
	const accounts = await services.get("accounts");

	// a middlewate that will check if the request is authenticated
	server.route.isAuthenticated = (request, reply, next) => {
		if (request.session && request.session.account) {
			return next();
		}

		reply.send(reply.error("unauthorized", "Not authenticated."));
	};

	server.route({
		method: "POST",
		path: "/api/register",
		schema: { body: schemas.register },
		async handler(request, reply) {
			try {
				const id = await accounts.create(request.body);

				// response: { success:1, id: '...' }
				reply.success({ id });
			} catch (error) {
				// catch SQLite error when the email is not unique
				if (error.message.includes("UNIQUE")) {
					throw reply.error("badRequest", "Email is already registered");
				} else {
					throw error;
				}
			}
		},
	});

	server.route({
		method: "POST",
		path: "/api/login",
		schema: { body: schemas.login },
		async handler(request, reply) {
			const data = request.body;
			const [account] = await accounts.find({ email: data.email });

			// check if the account exists
			if (!account) {
				throw reply.error("badRequest", "Invalid email or password");
			}

			// check if the password is valid
			const isValid = await accounts.isPasswordValid(
				data.password,
				account.password
			);

			if (!isValid) {
				throw reply.error("badRequest", "Invalid email or password");
			}

			// add the account to the session
			request.session.account = account;

			// response: { success: 1 }
			reply.success();
		},
	});

	server.post("/api/logout", async (request, reply) => {
		// destroy the current session
		request.session = null;
		reply.success();
	});

	server.get("/api/logout", async (request, reply) => {
		// destroy the current session
		request.session = null;
		reply.redirect("/");
	});

	server.get("/api/me", [
		server.route.isAuthenticated,
		async (request, reply) => {
			reply.send(request.session.account);
		},
	]);
};

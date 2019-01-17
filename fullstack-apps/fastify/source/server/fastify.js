import * as url from "@nore/std/url";
import rateLimiter from "fastify-rate-limit";
import multipart from "fastify-multipart";
import accepts from "fastify-accepts";
import cookies from "fastify-cookie";
import helmet from "fastify-helmet";
import cors from "fastify-cors";
import jwt from "fastify-jwt";
import Fastify from "fastify";
import boom from "boom";
import qs from "qs";
import memoize from "./utils/memoize";
import sessions from "./plugins/sessions";
import templates from "./plugins/templates";

function onError(plugin, fastify) {
	return error => {
		fastify.log.error(`PLUGIN ERROR (${plugin})`, error);
	};
}

export default ({ config, isDevelopment }) => {
	const fastify = Fastify({
		defaultRoute: config.router.onNotFound,
		caseSensitive: config.router.caseSensitive,
		logger: config.router.useLogger,
		ignoreTrailingSlash: true,
	});

	// add helper to easily send success responses
	fastify.decorateReply("success", function(data) {
		this.send({ success: 1, ...data });
	});

	// add support for boom errors generic error handling
	fastify.decorateReply("error", (type, ...args) => {
		const error = boom[type].apply(null, args);
		error.name = "HTTPError";
		return error;
	});

	// add support for qs parser
	const parseQuery = memoize(qs.parse, 500);

	fastify.decorateRequest("parseQuery", function() {
		let [path, query] = this.raw.url.split("?");

		return parseQuery(query);
	});

	// add support to parse the URL
	const parseURL = memoize(url.parse, 500);

	fastify.decorateRequest("parseURL", function() {
		return parseURL(this.raw.url);
	});

	// add CORS support
	fastify.decorate("cors", options => {
		fastify.register(cors, options);
	});

	// load plugins
	fastify.register(rateLimiter, config.rateLimiter);
	fastify.register(accepts, onError("accepts", fastify));
	fastify.register(helmet, config.helmet);
	fastify.register(cookies, onError("cookies", fastify));
	fastify.register(sessions, config.sessions);
	fastify.register(jwt, config.jwt);
	fastify.register(multipart, config.multipart);
	fastify.register(templates, { isDevelopment, ...config.templates });

	return fastify;
};

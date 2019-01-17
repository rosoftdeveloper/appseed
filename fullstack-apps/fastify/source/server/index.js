import { merge } from "@nore/std/object";
import runOnNextEventLoop from "./utils/runOnNextEventLoop.js";
import setRouteOptions from "./utils/setRouteOptions.js";
import onSystemError from "./utils/onSystemError.js";
import importDirectory from "./utils/importDirectory.js";
import onError from "./utils/onError.js";
import fastify from "./fastify.js";
import defaults from "./defaults.js";

const httpMethods = ["GET", "POST", "PUT", "DELETE", "HEAD"];

export default class Server {
	constructor(options = {}) {
		// set server config
		this.config = merge(defaults, options);
		this.path = this.config.path;
		this.mode = this.config.mode;
		this.isDevelopment = this.mode === "development";

		// set up fastify & plugins
		this.fastify = fastify(this);

		// counter that keeps track of .load() payload count
		this.inPendingToLoad = 0;

		// set HTTP routing methods
		for (const method of httpMethods) {
			this[method.toLowerCase()] = (...args) => {
				this.fastify.route(setRouteOptions(method, ...args));
			};
		}

		// set fastify error handler
		this.fastify.setErrorHandler(onError.bind(this));

		// crash the process when unhandled errors occur
		if (this.config.crashOnUncaughtError) {
			onSystemError("unhandledRejection", error => {
				this.fastify.log.error(error);
			});

			onSystemError("multipleResolves", error => {
				this.fastify.log.error(error);
			});
		}
	}

	route(options) {
		this.fastify.route(options);
	}

	hook(event, handler) {
		this.fastify.addHook(event, handler);
	}

	cors(options) {
		this.fastify.cors(options);
	}

	// dynamically load files
	async load(path, args) {
		++this.inPendingToLoad;

		const imported = await importDirectory(path, `${this.path}/source`);
		const handlers = imported
			.map(module => module.default)
			.filter(handler => typeof handler === "function");

		return runOnNextEventLoop(resolve =>
			Promise.all(handlers.map(handler => handler(args)))
				// clear loading counter
				.then(() => --this.inPendingToLoad)
				.then(resolve)
		);
	}

	async start() {
		// if files are loading, deffer server startup
		if (this.inPendingToLoad) {
			return runOnNextEventLoop(resolve => resolve(this.start()));
		}

		// start on next event loop so we have time to hook everyting up
		return runOnNextEventLoop((resolve, reject) => {
			const { port, host } = this.config;

			this.fastify.listen(port, host, (error, address) => {
				if (error) reject(error);
				else resolve(`${host}:${port}`);
			});
		});
	}
}

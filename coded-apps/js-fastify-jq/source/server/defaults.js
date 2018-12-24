import MemoryStore from "./utils/MemoryStore.js";
import randomString from "./utils/randomString.js";

// default server configuration
export default {
	path: process.cwd(),
	port: 5000,
	host: "localhost",
	mode: "development",

	crashOnUncaughtError: true,

	router: {
		caseSensitive: false,
		onNotFound: null,
		useLogger: true,
	},

	templates: {
		paths: ["themes", "templates"],
		noCache: true,
		watch: true,
	},

	sessions: {
		secret: randomString(),
		store: new MemoryStore(),
		cookie: {
			path: "/",
			secure: false,
			httpOnly: false,
			sameSite: true,
			domain: null,
			expires: null,
		},
	},

	jwt: {
		secret: randomString(),
	},

	rateLimiter: {
		// limit to 1000 requests per minute
		max: 1000,
		timeWindow: 1000 * 60,
		cache: 1000,
		keyGenerator: req =>
			req.headers["x-real-ip"] || // nginx
			req.headers["x-client-ip"] || // apache
			req.ip,
	},

	multipart: {},
	helmet: {},
};

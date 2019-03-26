import serve from "serve-handler";
import { isAbsolute, join } from "@nore/std/path";
import { isFile } from "@nore/std/fs";
import memoize from "~/server/utils/memoize";

// for performance reasons, memoize the function so it won't
// hit the FS on every request, from JS memory is faster
const isFileOnPath = memoize(isFile, 500);

export default ({ server }) => {
	const publicPath = join(server.path, "public");
	const themesPath = join(server.path, "themes");

	server.fastify._hooks.onSend.unshift((request, reply, payload, next) => {
		if (request.raw.method !== "GET") return next();
		if (reply.res.statusCode !== 404) return next();

		// reset fastify handler, let serve-handler set them
		reply.code(200).headers({});

		const url = request.parseURL();
		const { theme } = request.session;
		const assets = `${themesPath}/${theme}/assets`;
		const file = assets + url.pathname;

		// check if file is in theme/assets else use the supplied folder
		isFileOnPath(file).then(isFile => {
			serve(request.req, reply.res, { public: isFile ? assets : publicPath });
		});
	});
};

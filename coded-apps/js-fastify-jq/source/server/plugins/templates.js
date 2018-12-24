import { Environment, FileSystemLoader } from "nunjucks";
import plugin from "fastify-plugin";

function fmtRequest(request) {
	return request.includes(".html") ? request : `${request}.html`;
}

export default plugin(async (fastify, config = {}) => {
	const options = { watch: config.watch, noCache: config.noCache };
	const loader = new FileSystemLoader(config.paths || "templates", options);
	const engine = new Environment(loader);

	fastify.decorateReply("render", function(template, data = {}) {
		try {
			const html = engine.render(fmtRequest(template), data);

			this.header("Content-Type", "text/html; charset=utf-8");
			this.send(html);
		} catch (error) {
			if (error.message.includes("not found")) {
				throw this.error("notFound");
			}

			throw this.error("badImplementation", error.message);
		}
	});
});

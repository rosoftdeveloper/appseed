import { isFile, readJSONFile } from "@nore/std/fs";
import { merge } from "@nore/std/object";
import { join } from "@nore/std/path";
import memoize from "../utils/memoize.js";

const langFile = (path, lang) => `${path}/locales/${lang}.json`;

const getThemeData = memoize(async ({ path, lang }) => {
	const metaFile = `${path}/meta.json`;
	const meta = await readJSONFile(metaFile);

	if (!(await isFile(langFile(path, lang)))) {
		lang = "en";
	}

	const data = await readJSONFile(langFile(path, lang));

	return merge(meta.strings, data);
});

export default ({ server, config }) => {
	server.hook("preHandler", async (request, reply) => {
		// set data only on HTTP GET requests
		if (request.raw.method !== "GET") return;

		const { session, query } = request;

		// set language
		if (query.lang) session.lang = query.lang.toLowerCase();
		else if (!session.lang) session.lang = config.theme.lang;

		// set theme
		if (query.theme) session.theme = query.theme.toLowerCase();
		else if (!session.theme) session.theme = config.theme.name;
	});

	server.get("/*", async (request, reply) => {
		const { session } = request;
		const { theme, lang } = session;

		const url = request.parseURL();
		const page = url.pathname === "/" ? "/index" : url.pathname;

		const themePath = `${server.path}/themes/${theme}`;
		const template = `${theme}/pages/${page}`;

		const data = await getThemeData({
			path: themePath,
			lang: lang,
		});

		data.isLoggedIn = Boolean(session.account);
		data.account = session.account;

		reply.render(template, data);
	});
};

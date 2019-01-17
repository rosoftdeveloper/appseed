import SQLite from "@nore/sqlite";
import Server from "./server";
import config from "../config.json";

const server = new Server(config);
const db = new SQLite({
	file: `${server.path}/db.sqlite`,
	migrations: `${server.path}/source/migrations`,
});

async function main() {
	// the API object that will be available in dynamically loaded fils
	const api = { config, server, db };

	// initialize the DB and run migrations
	await db.migrations.initialize();
	await db.migrations.migrate();

	// dynamically load source files
	await server.load("./server/core", api);
	await server.load("./services", api);
	await server.load("./apis", api);

	// start receiving HTTP connections
	await server.start();
}

Promise.resolve(main()).catch(error => {
	console.error(`
		SERVER ERROR:
		${error}
	`);
});

import { readDirectory, itExists } from "@nore/std/fs";
import { isAbsolute, join } from "@nore/std/path";

export default async function importDirectory(path, cwd) {
	const directory = isAbsolute(path) ? path : join(cwd, path);
	const files = await readDirectory(directory);

	const pathsToTest = files
		.filter(file => file.slice(-3) !== ".js")
		.map(file => `${file}/index.js`)
		.map(file => itExists(file).then(isFile => (isFile ? file : null)));

	const jsFiles = files.filter(file => file.slice(-3) === ".js");
	const directories = (await Promise.all(pathsToTest)).filter(Boolean);
	const imported = jsFiles.concat(directories).map(file => require(file));

	return imported;
}

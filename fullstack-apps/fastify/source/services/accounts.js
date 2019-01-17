import argon from "@phc/argon2";
import { uid } from "@nore/sqlite";

const $account = {
	type: "object",
	properties: {
		email: { type: "string", minLength: 6, maxLength: 128 },
		password: { type: "string", minLength: 6, maxLength: 128 },
		firstName: { type: "string", minLength: 2, maxLength: 64 },
		lastName: { type: "string", minLength: 2, maxLength: 64 },
	},
	required: ["email", "password", "firstName", "lastName"],
};

export default async ({ server, db, services, schema }) => {
	const table = db.table("accounts");
	const accounts = { schema: $account };

	accounts.create = async data => {
		// check if data matches schema
		accounts.validate(data);

		// hash the password for security
		data.password = await argon.hash(data.password);

		data.id = uid();
		data.createdAt = Date.now();
		data.updatedAt = Date.now();

		await table.insert(data);

		return data.id;
	};

	accounts.update = async (query, data) => {
		data.updatedAt = Date.now();

		return table.update(query, data);
	};

	accounts.findById = async (id, filters) => table.findById(id, filters);
	accounts.find = async (query, filters) => table.find(query, filters);
	accounts.delete = async query => table.delete(query);

	accounts.validate = data => schema.validate($account, data);
	accounts.hashPassword = async password => argon.hash(password);
	accounts.isPasswordValid = async (password, hash) =>
		argon.verify(hash, password);

	services.set("accounts", accounts);
};

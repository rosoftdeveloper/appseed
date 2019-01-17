export const login = {
	type: "object",
	properties: {
		email: {
			type: "string",
			minLength: 8,
			maxLength: 64,
		},
		password: {
			type: "string",
			minLength: 6,
			maxLength: 64,
		},
	},
	required: ["email", "password"],
};

export const register = {
	type: "object",
	properties: {
		email: { type: "string" },
		password: { type: "string" },
		firstName: { type: "string" },
		lastName: { type: "string" },
	},
	required: ["email", "password", "firstName", "lastName"],
};

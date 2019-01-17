export const up = `
	CREATE TABLE accounts (
		id PRIMARY KEY NOT NULL UNIQUE,
		email TEXT NOT NULL UNIQUE,
		password TEXT NOT NULL,
		firstName TEXT NOT NULL,
		lastName TEXT NOT NULL,
		createdAt TEXT NOT NULL,
		updatedAt TEXT NOT NULL
	)
`;

export const down = `
	DROP TABLE IF EXISTS accounts;
`;

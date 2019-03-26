import Ajv from "ajv";

class SchemaError extends Error {
	constructor(errors) {
		super();

		this.name = "SchemaError";
		this.data = errors;

		if (Error.captureStackTrace) {
			Error.captureStackTrace(this, SchemaError);
		}
	}
}

const fmtError = ({ type, keyword, message, dataPath, params }) => ({
	type: keyword,
	message: message,
	condition: params.missingProperty ? "required" : params.type,
	field: params.missingProperty
		? `${dataPath}.${params.missingProperty}`
		: dataPath,
});

export default api => {
	const jsonSchema = new Ajv({ allErrors: true });

	const schema = {
		create: schema => jsonSchema.compile(schema),
		validate: (schema, data) => {
			const isValid = jsonSchema.validate(schema, data);
			const errors = jsonSchema.errors;

			if (isValid) return true;

			throw new SchemaError(errors.map(fmtError));
		},
	};

	api.schema = schema;
};

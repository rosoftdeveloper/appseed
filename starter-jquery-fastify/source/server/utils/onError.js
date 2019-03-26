export default function onError(error, request, reply) {
	if (error.name === "SqliteError") {
		return reply
			.code(400)
			.type("application/json")
			.send({ message: error.message });
	}

	if (error.name === "SchemaError") {
		return reply
			.code(400)
			.type("application/json")
			.send({ message: "Bad Request", data: error.data });
	}

	if (error.name === "HTTPError") {
		return reply
			.type("application/json")
			.code(error.output.statusCode)
			.headers(error.output.headers)
			.send(error.output.payload);
	}

	if (reply.res.statusCode < 400) {
		reply.code(500);
	}

	reply.send(error || new Error("Server error: " + error));
}

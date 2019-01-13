export default (event, handler) => {
	if (process.listenerCount(event) !== 0) {
		return;
	}

	process.on(event, error => {
		handler(error);
		process.exit(1);
	});
};

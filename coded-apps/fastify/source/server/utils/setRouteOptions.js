export default (method, path, options, handlers) => {
	if (!handlers) (handlers = options), (options = {});

	options.method = method;
	options.path = path;

	if (Array.isArray(handlers)) {
		options.handler = handlers.pop();
		options.beforeHandler = handlers;
	} else {
		options.handler = handlers;
	}

	return options;
};

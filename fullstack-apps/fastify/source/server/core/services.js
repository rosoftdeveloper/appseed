import runOnNextEventLoop from "../utils/runOnNextEventLoop.js";
import timer from "../utils/timer.js";

export default api => {
	api.services = {
		cache: new Map(),
		timeout: 1000,

		set(name, api) {
			if (this.cache.has(name)) {
				throw Error(`A service with the name "${name}" was already declared.`);
			}

			this.cache.set(name, api);
		},

		async get(name) {
			if (Array.isArray(name)) {
				return Promise.all(name.map(name => this.get(name)));
			}

			if (this.cache.has(name)) {
				timer.reset(name);
				return this.cache.get(name);
			}

			const onTimeout = () => {
				if (!this.cache.has(name)) {
					throw Error(`Service ${name} is not available.`);
				}
			};

			// allow a specific time for the service to load
			timer.start({ name, onTimeout, timeout: this.timeout });

			return await runOnNextEventLoop(resolve => {
				this.get(name).then(resolve);
			});
		},
	};
};

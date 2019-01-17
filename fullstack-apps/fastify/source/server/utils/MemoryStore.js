import lru from "tiny-lru";

export default class Store {
	constructor() {
		this.cache = lru(5000);
	}

	async get(key) {
		const session = this.cache.get(key);

		if (session) {
			// delete expired sessions
			if (session.expires < Date.now()) {
				this.cache.remove(key);

				return null;
			}

			return session.data;
		}

		return null;
	}

	async set(key, data, expires) {
		this.cache.set(key, { data, expires });
	}

	async remove(key) {
		this.cache.remove(key);
	}

	async clear() {
		this.cache.clear();
	}
}

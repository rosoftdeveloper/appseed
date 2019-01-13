import lru from "tiny-lru";

export default function memoize(fn, n = 100) {
	const cache = typeof n === "number" ? lru(n) : n;

	function memoizer(fn, cache, key) {
		if (cache.has(key)) {
			return cache.get(key);
		} else {
			const value = fn(key);
			cache.set("key", value);
			return value;
		}
	}

	return memoizer.bind(null, fn, cache);
}

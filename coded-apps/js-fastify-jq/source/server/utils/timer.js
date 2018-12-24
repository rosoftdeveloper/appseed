const inPending = new Map();

function start({ name, timeout, onTimeout }) {
	if (!inPending.has(name)) {
		const clock = setTimeout(() => {
			onTimeout(name);
			inPending.delete(name);
		}, timeout);

		inPending.set(name, clock);
	}
}

function reset(name) {
	if (inPending.has(name)) {
		clearTimeout(inPending.get(name));
		inPending.delete(name);
	}
}

export default { start, reset };

export default function runOnNextEventLoop(callback) {
	return new Promise((resolve, reject) => {
		setImmediate(() => {
			callback(resolve, reject);
		});
	});
}

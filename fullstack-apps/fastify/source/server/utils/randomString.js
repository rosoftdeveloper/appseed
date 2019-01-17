import { randomBytes } from "crypto";

export default function randomString(n = 128) {
	return randomBytes(n).toString("hex");
}

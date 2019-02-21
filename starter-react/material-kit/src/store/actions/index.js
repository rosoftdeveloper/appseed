/*
 * action types
 */

export const LOGIN = "LOGIN";
export const LOGOUT = "LOGOUT";

/*
 * action creators
 */

export function login(user) {
    return { type: LOGIN, user };
}

export function logout() {
    return { type: LOGOUT };
}
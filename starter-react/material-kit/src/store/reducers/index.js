import { combineReducers } from "redux";
import {
    LOGIN,
    LOGOUT,
} from "../actions";

// the user function itself represents the user key of the store
const user = (state = null, action) => {
    switch (action.type) {
        case LOGIN:
            return {
                ...state,
                ...action.user
            };
        case LOGOUT:
            return null
            
        default:
            return state;
    }
};

const reducers = combineReducers({
    user
});

export default reducers;

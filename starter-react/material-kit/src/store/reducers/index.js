import { combineReducers } from "redux";
import {
    LOGIN,
    LOGOUT,
} from "../actions";


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

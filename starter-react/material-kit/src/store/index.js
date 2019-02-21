import { createStore } from "redux";
import { composeWithDevTools } from "redux-devtools-extension";
import reducers from "./reducers";
import preloadedState from "./preloadedState";

export default createStore(reducers, preloadedState, composeWithDevTools());

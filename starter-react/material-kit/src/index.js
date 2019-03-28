import React from "react";
import ReactDOM from "react-dom";
import { createBrowserHistory } from "history";
import { Router, Route, Switch } from "react-router-dom";
import jwtDecode from "jwt-decode";
import { Provider } from "react-redux";
import store from "./store";
import { login } from "./store/actions";
import Cookies from "./utils/Cookies";

import "./assets/scss/material-kit-react.scss?v=1.4.0";

// pages for this product
import Components from "views/Components/Components.jsx";
import LandingPage from "views/LandingPage/LandingPage.jsx";
import ProfilePage from "views/ProfilePage/ProfilePage.jsx";
import LoginPage from "views/LoginPage/LoginPage.jsx";

var hist = createBrowserHistory();

const token = Cookies.read("token");

if (token) {
  const user = jwtDecode(token);

  store.dispatch(login(user));
}

ReactDOM.render(
  <Provider store={store}>
    <Router history={hist}>
      <Switch>
        <Route path="/landing-page" component={LandingPage} />
        <Route path="/profile-page" component={ProfilePage} />
        <Route path="/login-page" component={LoginPage} />
        <Route path="/components" component={Components} />
        <Route path="/" component={LandingPage} />
      </Switch>
    </Router>
  </Provider>,
  document.getElementById("root")
);

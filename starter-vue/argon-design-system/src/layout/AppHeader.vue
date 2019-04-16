<template>
  <header class="header-global">
    <base-nav class="navbar-main" transparent type="" effect="light" expand>
      <a slot="brand" class="navbar-brand mr-lg-5" href="/">
        <img src="img/brand/white.png" />
      </a>

      <div class="row" slot="content-header">
        <div class="col-6 collapse-brand">
          <a href="/">
            <img src="img/brand/blue.png" />
          </a>
        </div>
      </div>

      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <base-dropdown tag="li" class="nav-item">
          <a
            slot="title"
            href="#"
            class="nav-link"
            data-toggle="dropdown"
            role="button"
          >
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Examples</span>
          </a>
          <router-link to="/landing" class="dropdown-item">Landing</router-link>
          <router-link to="/profile" class="dropdown-item">Profile</router-link>
          <router-link to="/login" class="dropdown-item">Login</router-link>
          <router-link to="/register" class="dropdown-item"
            >Register</router-link
          >
          <router-link to="/components" class="dropdown-item"
            >Components</router-link
          >
        </base-dropdown>
      </ul>
      <ul v-if="user" class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <router-link to="/" class="nav-link"
            >{{ user.name }} {{ user.surname }}</router-link
          >
        </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="#" @click="logout($event)" class="nav-link">Logout</a>
        </li>
      </ul>
      <ul v-else class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <router-link to="/login" class="nav-link">Login</router-link>
        </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <router-link to="/register" class="nav-link">Register</router-link>
        </li>
      </ul>
    </base-nav>
  </header>
</template>
<script>
import BaseNav from "@/components/BaseNav";
import BaseDropdown from "@/components/BaseDropdown";
import Cookies from "../utils/Cookies";
import jwtDecode from "jwt-decode";

export default {
  components: {
    BaseNav,
    BaseDropdown
  },
  computed: {
    user: function() {
      return this.$store.state.user;
    }
  },
  created() {
    const token = Cookies.read("token");

    if (token) {
      const user = jwtDecode(token);
      this.$store.dispatch("LOGIN", user);
    }
  },
  methods: {
    logout(e) {
      e.preventDefault();

      /* First we remove the token in order to stop logging the user on app start-up */
      console.log(Cookies.remove("token"));

      /* Then we clear the user object from our store */
      return this.$store.dispatch("LOGOUT");
    }
  }
};
</script>
<style></style>

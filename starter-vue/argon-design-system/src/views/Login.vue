<template>
  <section class="section section-shaped section-lg my-0">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-md">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <card
            type="secondary"
            shadow
            header-classes="bg-white pb-5"
            body-classes="px-lg-5 py-lg-5"
            class="border-0"
          >
            <template>
              <div class="text-muted text-center mb-3">
                <small>Sign in with</small>
              </div>
              <div class="btn-wrapper text-center">
                <base-button type="neutral">
                  <img slot="icon" src="img/icons/common/github.svg" />
                  Github
                </base-button>

                <base-button type="neutral">
                  <img slot="icon" src="img/icons/common/google.svg" />
                  Google
                </base-button>
              </div>
            </template>
            <template>
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                <base-input
                  v-model="email.value"
                  alternative
                  :class="email.errors.length && 'input-error'"
                  class="mb-3"
                  placeholder="Email"
                  addon-left-icon="ni ni-email-83"
                >
                </base-input>

                <ul class="form-errors">
                  <li v-for="(error, index) in email.errors" :key="index">
                    {{ error }}
                  </li>
                </ul>

                <base-input
                  v-model="password.value"
                  alternative
                  :class="password.errors.length && 'input-error'"
                  type="password"
                  placeholder="Password"
                  addon-left-icon="ni ni-lock-circle-open"
                >
                </base-input>

                <ul class="form-errors">
                  <li v-for="(error, index) in password.errors" :key="index">
                    {{ error }}
                  </li>
                </ul>

                <base-checkbox>
                  Remember me
                </base-checkbox>
                <div class="text-center">
                  <base-button type="submit" @click="submitForm" class="my-4"
                    >Sign In</base-button
                  >
                </div>
              </form>
            </template>
          </card>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light">
                <small>Forgot password?</small>
              </a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light">
                <small>Create new account</small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import Cookies from "../utils/Cookies";
import router from "../router.js";

export default {
  data: () => ({
    email: {
      value: Cookies.read("new_user"),
      errors: []
    },
    password: {
      value: null,
      errors: []
    }
  }),
  methods: {
    validEmail: function(email) {
      const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
    isValidForm() {
      this.email.errors = [];
      this.password.errors = [];

      if (!this.email.value) {
        this.email.errors.push("Email required.");
      } else if (!this.validEmail(this.email.value)) {
        this.email.errors.push("Invalid email.");
      }

      if (!this.password.value) {
        this.password.errors.push("Password required.");
      }

      if (this.password.errors.length || this.email.errors.length) {
        return false;
      }

      return true;
    },
    async submitForm() {
      if (!this.isValidForm()) {
        return;
      }

      const user = {
        email: this.email.value,
        password: this.password.value
      };

      const url = "http://localhost:3000/api/users/login";

      fetch(url, {
        method: "POST", // *GET, POST, PUT, DELETE, etc.
        mode: "cors", // no-cors, cors, *same-origin
        cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        credentials: "same-origin", // include, *same-origin, omit
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ user }) // body data type must match "Content-Type" header
      })
        .then(res => res.json())
        .then(data => {
          const { errors, user } = data;

          if (errors) {
            for (let key in errors) {
              this[key].errors.push(errors[key]);
            }

            return;
          }

          if (user) {
            const { token, ...userData } = user;
            Cookies.create("token", token, null);
            console.log(userData, token);

            this.$store.dispatch("LOGIN", userData);

            router.push("/");
          }
        });
    }
  }
};
</script>
<style>
.form-errors {
  color: red;
}
div.input-error {
  border: 1px solid red;
}
</style>

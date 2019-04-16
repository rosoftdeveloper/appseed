<template>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            <router-link to="/components" title="Landing Page">
              <img v-lazy="'img/theme/components.jpg'" class="card-img" />
            </router-link>
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            <router-link to="/profile" title="Profile Page">
              <img v-lazy="'img/theme/profile.jpg'" class="card-img" />
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">
            Thank you for supporting us!
          </h3>
          <h4 class="mb-0 font-weight-light">
            Let's get in touch on any of these platforms.
          </h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a
            target="_blank"
            href="https://twitter.com/webappseed"
            class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg"
            data-toggle="tooltip"
            data-original-title="Follow us"
          >
            <i class="fa fa-twitter"></i>
          </a>

          <a
            target="_blank"
            href="https://www.facebook.com/webappseed"
            class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg"
            data-toggle="tooltip"
            data-original-title="Like us"
          >
            <i class="fa fa-facebook-square"></i>
          </a>

          <a
            target="_blank"
            href="https://github.com/rosoftdeveloper/appseed"
            class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg"
            data-toggle="tooltip"
            data-original-title="Star on Github"
          >
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr />
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018 Designed by
            <a href="https://www.creative-tim.com" target="_blank"
              >Creative Tim</a
            >. Full Stack App coded by
            <a href="https://www.appseed.us" target="_blank">AppSeed</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a
                href="https://appseed.us/fullstack-apps-generator"
                class="nav-link"
                target="_blank"
                >AppSeed - Full stack app generator</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {};
</script>
<style></style>

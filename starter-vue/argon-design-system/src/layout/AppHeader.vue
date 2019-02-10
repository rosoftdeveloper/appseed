<template>
    <header class="header-global">
        
        <base-nav class="navbar-main" transparent type="" effect="light" expand>
            <a slot="brand" class="navbar-brand mr-lg-5" href="https://demos.creative-tim.com/vue-argon-design-system/documentation">
                <img src="img/brand/white.png">
            </a>

            <div class="row" slot="content-header">
                <div class="col-6 collapse-brand">
                    <a href="https://demos.creative-tim.com/vue-argon-design-system/documentation/">
                        <img src="img/brand/blue.png">
                    </a>
                </div>
            </div>

            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <base-dropdown class="nav-item" menu-classes="dropdown-menu-xl">
                    <a slot="title" href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Components</span>
                    </a>
                    <div class="dropdown-menu-inner">
                        <a href="https://demos.creative-tim.com/vue-argon-design-system/documentation/"
                           class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                <i class="ni ni-spaceship"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                <p class="description d-none d-md-inline-block mb-0">Get started with Bootstrap, the
                                    world's most popular framework for building responsive sites.</p>
                            </div>
                        </a>
                        <a href="https://demos.creative-tim.com/vue-argon-design-system/documentation/"
                           class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                <i class="ni ni-ui-04"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h5 class="heading text-warning mb-md-1">Components</h5>
                                <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon
                                    compiling Scss, change brand colors and more.</p>
                            </div>
                        </a>
                    </div>
                </base-dropdown>
                <base-dropdown tag="li" class="nav-item">
                    <a slot="title" href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Examples</span>
                    </a>
                    <router-link to="/landing" class="dropdown-item">Landing</router-link>
                    <router-link to="/profile" class="dropdown-item">Profile</router-link>
                    <router-link to="/login" class="dropdown-item">Login</router-link>
                    <router-link to="/register" class="dropdown-item">Register</router-link>
                </base-dropdown>
            </ul>
            <ul v-if="user" class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item d-none d-lg-block ml-lg-4">
                    <router-link to="/" class="nav-link">{{user.name}} {{user.surname}}</router-link>
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
import Cookies from '../utils/Cookies';
import jwtDecode from 'jwt-decode';


export default {
    components: {
        BaseNav,
        BaseDropdown
    },
    computed: {
        user: function() {
            return this.$store.state.user
        }
    },
    created() {
        const token = Cookies.read('token')

        if (token) {
            const user = jwtDecode(token)
            this.$store.dispatch('LOGIN', user)
        }
    },
    methods: {
        logout(e) {
            e.preventDefault();
            
            /* First we remove the token in order to stop logging the user on app start-up */
            console.log(Cookies.remove('token'));

            /* Then we clear the user object from our store */
            return this.$store.dispatch('LOGOUT');
        }
    }
};
</script>
<style>
</style>

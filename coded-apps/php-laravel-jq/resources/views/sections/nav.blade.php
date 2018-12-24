<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white navbar-absolute navbar-transparent">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-header">Dropdown header</a>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">One more separated link</a>
            </div>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit-pro/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                Now Ui Kit Pro
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" data-nav-image="assets/img//blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                        <i class="now-ui-icons design_app"></i>
                        <p>Components</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="../index.html">
                            <i class="now-ui-icons business_chart-pie-36"></i> All components
                        </a>
                        <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit-pro/docs/1.0/getting-started/introduction.html">
                            <i class="now-ui-icons design_bullet-list-67"></i> Documentation
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="now-ui-icons files_paper" aria-hidden="true"></i>
                        <p>Sections</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../sections.html#headers">
                            <i class="now-ui-icons shopping_box"></i> Headers
                        </a>
                        <a class="dropdown-item" href="../sections.html#features">
                            <i class="now-ui-icons ui-2_settings-90"></i> Features
                        </a>
                        <a class="dropdown-item" href="../sections.html#blogs">
                            <i class="now-ui-icons text_align-left"></i> Blogs
                        </a>
                        <a class="dropdown-item" href="../sections.html#teams">
                            <i class="now-ui-icons sport_user-run"></i> Teams
                        </a>
                        <a class="dropdown-item" href="../sections.html#projects">
                            <i class="now-ui-icons education_paper"></i> Projects
                        </a>
                        <a class="dropdown-item" href="../sections.html#pricing">
                            <i class="now-ui-icons business_money-coins"></i> Pricing
                        </a>
                        <a class="dropdown-item" href="../sections.html#testimonials">
                            <i class="now-ui-icons ui-2_chat-round"></i> Testimonials
                        </a>
                        <a class="dropdown-item" href="../sections.html#contactus">
                            <i class="now-ui-icons tech_mobile"></i> Contact Us
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="now-ui-icons design_image" aria-hidden="true"></i>
                        <p>Examples</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../examples/about-us.html">
                            <i class="now-ui-icons business_bulb-63"></i> About-us
                        </a>
                        <a class="dropdown-item" href="../examples/blog-post.html">
                            <i class="now-ui-icons text_align-left"></i> Blog Post
                        </a>
                        <a class="dropdown-item" href="../examples/blog-posts.html">
                            <i class="now-ui-icons design_bullet-list-67"></i> Blog Posts
                        </a>
                        <a class="dropdown-item" href="../examples/contact-us.html">
                            <i class="now-ui-icons location_pin"></i> Contact Us
                        </a>
                        <a class="dropdown-item" href="../examples/landing-page.html">
                            <i class="now-ui-icons education_paper"></i> Landing Page
                        </a>
                        <a class="dropdown-item" href="../examples/login-page.html">
                            <i class="now-ui-icons users_circle-08"></i> Login Page
                        </a>
                        <a class="dropdown-item" href="../examples/pricing.html">
                            <i class="now-ui-icons business_money-coins"></i> Pricing
                        </a>
                        <a class="dropdown-item" href="../examples/ecommerce.html">
                            <i class="now-ui-icons shopping_shop"></i> Ecommerce Page
                        </a>
                        <a class="dropdown-item" href="../examples/product-page.html">
                            <i class="now-ui-icons shopping_bag-16"></i> Product Page
                        </a>
                        <a class="dropdown-item" href="../examples/profile-page.html">
                            <i class="now-ui-icons users_single-02"></i> Profile Page
                        </a>
                        <a class="dropdown-item" href="../examples/signup-page.html">
                            <i class="now-ui-icons tech_mobile"></i> Signup Page
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="https://www.creative-tim.com/product/now-ui-kit-pro" target="_blank">
                        <p>Buy Now</p>
                    </a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="login">
                        <p><i class="now-ui-icons users_single-02"></i> Login</p>
                    </a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

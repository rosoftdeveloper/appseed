
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
   <div class="container" >
    <div class="dropdown button-dropdown" >
     <a class="dropdown-toggle" data-toggle="dropdown" href="#pablo" id="navbarDropdown" >
      <span class="button-bar" >
      </span>
      <span class="button-bar" >
      </span>
      <span class="button-bar" >
      </span>
     </a>
     <div aria-labelledby="navbarDropdown" class="dropdown-menu" >
      <a class="dropdown-header" >
       Dropdown header
      </a>
      <a class="dropdown-item" href="#" >
       Action
      </a>
      <a class="dropdown-item" href="#" >
       Another action
      </a>
      <div class="dropdown-divider" ></div>
      <a class="dropdown-item" href="#" >
       Separated link
      </a>
     </div>
    </div>
    <div class="navbar-translate" >
     <a class="navbar-brand" data-placement="bottom" 
        href="<?php echo _assets('LINK_PRODUCT_NOW_UI_KIT') ?>"  rel="tooltip" target="_blank" 
        title="Desig Creative Tim. Full Stack App Coded by AppSeed">
        Now Ui Kit - Full Stack
     </a>
     <button aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler" data-target="#navigation" data-toggle="collapse"  type="button">
      <span class="navbar-toggler-bar top-bar" >
      </span>
      <span class="navbar-toggler-bar middle-bar" >
      </span>
      <span class="navbar-toggler-bar bottom-bar" >
      </span>
     </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" data-nav-image="assets/img/blurred-image-1.jpg" id="navigation" >
     <ul class="navbar-nav" >

        <?php if ( _is_auth() ) { ?>

            <li class="nav-item nav-link">
                <?php echo _identity(); ?>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>" >
                    Logout
                </a>
            </li>

        <?php } else { ?>

            <li class="nav-item" >
                <a class="nav-link" href="<?php echo base_url('auth/login') ?>" >
                    Login
                </a>
            </li>

        <?php } ?>
      
      <li class="nav-item" >
       <a target="_blank" class="nav-link" data-placement="bottom" 
            href="<?php echo _assets('LINK_GITHUB') ?>"  rel="tooltip" target="_blank" title="Download from Github">
        <i class="fab fa-github" >
        </i>
        <p class="d-lg-none d-xl-none" parser_dataid="31">
         Github
        </p>
       </a>
      </li>
      <li class="nav-item" >
       <a target="_blank" class="nav-link" data-placement="bottom" 
            href="<?php echo _assets('LINK_TWITTER') ?>"  rel="tooltip" target="_blank" title="Follow us on Twitter">
        <i class="fab fa-twitter" >
        </i>
        <p class="d-lg-none d-xl-none" parser_dataid="31">
         Twitter
        </p>
       </a>
      </li>
      <li class="nav-item" parser_dataid="32">
       <a target="_blank" class="nav-link" data-placement="bottom" href="<?php echo _assets('LINK_FACEBOOK') ?>" parser_dataid="33" rel="tooltip" target="_blank" title="Like us on Facebook">
        <i class="fab fa-facebook-square" parser_dataid="34">
        </i>
        <p class="d-lg-none d-xl-none" parser_dataid="35">
         Facebook
        </p>
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>


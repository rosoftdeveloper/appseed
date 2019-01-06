
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
   <div class="container" parser_dataid="1">
    <div class="dropdown button-dropdown" parser_dataid="2">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#pablo" id="navbarDropdown" parser_dataid="3">
      <span class="button-bar" parser_dataid="4">
      </span>
      <span class="button-bar" parser_dataid="5">
      </span>
      <span class="button-bar" parser_dataid="6">
      </span>
     </a>
     <div aria-labelledby="navbarDropdown" class="dropdown-menu" parser_dataid="7">
      <a class="dropdown-header" parser_dataid="8">
       Dropdown header
      </a>
      <a class="dropdown-item" href="#" parser_dataid="9">
       Action
      </a>
      <a class="dropdown-item" href="#" parser_dataid="10">
       Another action
      </a>
      <div class="dropdown-divider" parser_dataid="12"></div>
      <a class="dropdown-item" href="#" parser_dataid="13">
       Separated link
      </a>
     </div>
    </div>
    <div class="navbar-translate" parser_dataid="16">
     <a class="navbar-brand" data-placement="bottom" 
        href="<?php echo base_url() ?>" parser_dataid="17" rel="tooltip" target="_blank" 
        title="Designed by Creative Tim. Coded by AppSeed">
        Now Ui Kit
     </a>
     <button aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler" data-target="#navigation" data-toggle="collapse" parser_dataid="18" type="button">
      <span class="navbar-toggler-bar top-bar" parser_dataid="19">
      </span>
      <span class="navbar-toggler-bar middle-bar" parser_dataid="20">
      </span>
      <span class="navbar-toggler-bar bottom-bar" parser_dataid="21">
      </span>
     </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" data-nav-image="assets/img/blurred-image-1.jpg" id="navigation" parser_dataid="22">
     <ul class="navbar-nav" parser_dataid="23">

        <?php if ( _is_auth() ) { ?>

            <li class="nav-item nav-link">
                <?php echo _identity(); ?>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>" parser_dataid="25">
                    Logout
                </a>
            </li>

        <?php } else { ?>

            <li class="nav-item" parser_dataid="24">
                <a class="nav-link" href="<?php echo base_url('auth/login') ?>" parser_dataid="25">
                    Login
                </a>
            </li>

        <?php } ?>

        <li class="nav-item" parser_dataid="24">
            <a class="nav-link" href="<?php echo _assets('LINK_GITHUB') ?>" parser_dataid="25">
                Download
            </a>
        </li>
      
      <li class="nav-item" parser_dataid="28">
       <a class="nav-link" data-placement="bottom" 
            href="<?php echo _assets('LINK_GITHUB') ?>" parser_dataid="29" rel="tooltip" target="_blank" title="Download from Github">
        <i class="fab fa-github" parser_dataid="30">
        </i>
        <p class="d-lg-none d-xl-none" parser_dataid="31">
         Github
        </p>
       </a>
      </li>
      <li class="nav-item" parser_dataid="28">
       <a class="nav-link" data-placement="bottom" 
            href="<?php echo _assets('LINK_TWITTER') ?>" parser_dataid="29" rel="tooltip" target="_blank" title="Follow us on Twitter">
        <i class="fab fa-twitter" parser_dataid="30">
        </i>
        <p class="d-lg-none d-xl-none" parser_dataid="31">
         Twitter
        </p>
       </a>
      </li>
      <li class="nav-item" parser_dataid="32">
       <a class="nav-link" data-placement="bottom" href="<?php echo _assets('LINK_FACEBOOK') ?>" parser_dataid="33" rel="tooltip" target="_blank" title="Like us on Facebook">
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


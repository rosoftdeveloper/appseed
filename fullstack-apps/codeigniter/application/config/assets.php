<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Asset file: global resources 
*/

class Assets {

    public $BRAND                           = 'AppSeed'; 
    public $BRAND_INFO                      = 'Full Stack Web Apps Generator'; // save your google analytics here

    public $GOOGLE_ANALYTICS                = 'UA-104843706-1'; // save your google analytics here

    public $LINK_FACEBOOK                   = 'https://www.facebook.com/webappseed'                              ;
    public $LINK_FACEBOOK_GRP               = 'https://www.facebook.com/groups/fullstack.apps.generator/'        ;
    public $LINK_TWITTER                    = 'https://www.twitter.com/webappseed'                               ;
    public $LINK_INSTAGRAM                  = 'https://www.instagram.com/webappseed'                             ;
    public $LINK_YOUTUBE                    = 'https://www.youtube.com/channel/UCSEnv6MeRzmFXAnG5baXC_Q'         ;
    public $LINK_GITHUB                     = 'https://github.com/rosoftdeveloper/appseed'                       ;
    public $LINK_GITHUB_APPS                = 'https://github.com/rosoftdeveloper/appseed/tree/master/fullstack-apps'  ;
    public $LINK_GITHUB_THEMES              = 'https://github.com/rosoftdeveloper/appseed/tree/master/enhanced-themes' ;

    public $LINK_DOWNLOAD                   = 'https://www.appseed.us/fullstack-apps-generator'                         ;
    public $LINK_COMPONENTS                 = 'https://github.com/rosoftdeveloper/appseed/tree/master/enhanced-themes/' ;

    public $HEADER_TITLE                    = 'Full Stack App @AppSeed.us';
    public $HEADER_DESCRIPTION              = 'Full stack app. Modules: Authentication, Helpers, Database';
    public $HEADER_KEYWORDS                 = 'fullstack app, codeigniter, laravel, node, vue, appseed';

    // ***********************************************************************************************
    // product links 
    public $LINK_PRODUCT_ARGON_DESIGN                  = 'https://www.appseed.us/fullstack-apps-generator'; // 'https://www.appseed.us/fullstack-app-argon-design-system' ; 
    public $LINK_PRODUCT_ARGON_DASHBOARD               = 'https://www.appseed.us/fullstack-apps-generator'; // 'https://www.appseed.us/fullstack-app-argon-dashboard'     ; 
    public $LINK_PRODUCT_NOW_UI_KIT                    = 'https://www.appseed.us/fullstack-apps-generator'; // 'https://www.appseed.us/fullstack-app-now-ui-kit'          ; 
    public $LINK_PRODUCT_NOW_LIGHT_BOOTSTRAP_DASHBOARD = 'https://www.appseed.us/fullstack-app-light-bootstrap-dashboard'; 

    // Common generator
    public $LINK_APP_GENERATOR                         = 'https://www.appseed.us/fullstack-apps-generator'; 
}

// define assets ..
$config['assets' ] = new Assets(); // don't remove this

?>
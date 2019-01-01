<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Asset file: global resources 
*/

class Assets {

    public $GOOGLE_ANALYTICS     = ''; // save your google analytics here
    public $LINK_FACEBOOK        = 'https://www.facebook.com/webappseed'                              ;
    public $LINK_FACEBOOK_GRP    = 'https://www.facebook.com/groups/407230609806980'                  ;
    public $LINK_TWITTER         = 'https://www.twitter.com/webappseed'                               ;
    public $LINK_INSTAGRAM       = 'https://www.instagram.com/webappseed'                             ;
    public $LINK_YOUTUBE         = 'https://www.youtube.com/channel/UCSEnv6MeRzmFXAnG5baXC_Q'         ;
    public $LINK_GITHUB          = 'https://github.com/rosoftdeveloper/appseed/tree/master/coded-apps/php-ci-jq'  ;

    public $LINK_DOWNLOAD        = 'https://www.appseed.us/coded-app-codeigniter-argon-design-system'             ;
    public $LINK_COMPONENTS      = 'https://github.com/rosoftdeveloper/appseed/tree/master/enhanced-themes/argon' ;

    public $HEADER_TITLE         = 'Argon Design System - Coded App in CodeIgniter';
    public $HEADER_DESCRIPTION   = 'Fully Coded App in CodeIgniter. Modules: Authentication, Helpers, Database';
    public $HEADER_KEYWORDS      = 'coded app, codeigniter, argon design, appseed';

}

// define assets ..
$config['assets' ] = new Assets(); // don't remove this

?>
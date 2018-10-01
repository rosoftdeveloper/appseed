<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . DS . 'vendor' . DS . 'propel' . DS . 'propel1' . DS . 'runtime' . DS . 'lib'. DS . 'Propel.php';

class LibPropel
{
    public function __construct() // or any other method
    {
        $PATH_dbConf = APPPATH . DS . 'libraries' . DS . 'propel_db' . DS . 'build' . DS . 'conf' . DS . 'propel_db-conf.php';
        
        Propel::init( $PATH_dbConf );
        
        $PATH_dbClasses = APPPATH . DS . 'libraries' . DS . 'propel_db' . DS . 'build' . DS . 'classes';

        set_include_path( $PATH_dbClasses . PATH_SEPARATOR . get_include_path());        
    }
} 


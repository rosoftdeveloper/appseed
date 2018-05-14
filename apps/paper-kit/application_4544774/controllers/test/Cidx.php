<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
www.AppSeed.us - App builder & automated deployer
Php / CodeIgniter Aplication Template
Licence: RoSoft all rights reserved
*/

class Cidx extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
	}
        
	public function pages( )   
	{
        foreach( g_all_pages() as $obj) {            
            
            echo br(3) . '[' . $obj->getId() . '] -> ' . $obj->segment() ;
            //echo br(3) . var_dump( $obj );
        }
    
    }

	public function index( )   
	{
        // cool!
        return $this->pages();

        $input_user  = 'testusr';
        $input_pass  = 'pass1234';
        $input_mail  = 'adi@yahoo.com';

        $password = $this->ag_auth->salt( $input_pass );
        $email    = $input_mail;

        if($this->ag_auth->register($input_user, $password, $email) === TRUE)
        {
            echo br() . "The user account has now been created.";
            
        } 
        else
        {
            echo br() . "The user account has not been created.";
        }

        return;

        // reset all shit ..
        g_del_all_themes();
        return;

        //var_dump( g_providers() );
        //return;

		$theme = new Theme(	'freehtml5.co', 'union', 'FreeHtml5 - Union', 
							'https://freehtml5.co/demos/union/');
							
		if ( false == $theme->exists() )					
			$theme->save();
		else 
			echo br() . ' theme exists: ' . $theme->provider() . ' -> ' .  $theme->name();
        
        return;

        foreach( g_all_themes() as $obj) {            
            
            //echo br() . '[' . $obj->getId() . '] -> ' . $obj->toJSON() ;
            echo br(3) . var_dump( $obj );
		}
		  
		return;

        $obj_list = UsersQuery::create()->find(); echo br().' test UsersQuery -> ok';

        foreach($obj_list as $obj) {
            
          echo br() . '['. get_class( $obj ) . '] ' . $obj->__toString();
        }
    
        foreach( ObjectsQuery::create()->find() as $obj) {
            
          echo br() . '['. get_class( $obj ) . '] ' . $obj->getKey1();
        }
        
        //echo br() . ObjectsQuery::create()->findOne()->getKey1(); 

        return;
	}	

}

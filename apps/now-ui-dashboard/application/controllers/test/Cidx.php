<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidx extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
        echo br() . 'test -> index';

        $obj_list = UsersQuery::create()->find(); echo br().' test UsersQuery -> ok';

        foreach($obj_list as $obj) {
            
          echo br() . '['. get_class( $obj ) . '] ' . $obj->__toString();
        }
                
    }

}    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public $assets = NULL;

	public function __construct()
	{
		parent::__construct();
		
		$this->assets = load_assets();
	}

}

/* End of file: MY_Controller.php */
/* Location: application/core/MY_Controller.php */
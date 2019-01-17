<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cindex extends CI_Controller {

	// data container to inject into page
	public $data  = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function index( $aSegment='index' )
	{		
		$this->data['theme'  ] = _theme  ();
		$this->data['assets' ] = _assets ();

		$this->data['content'] = $this->load->view('themes/' . _theme() . '/' . $aSegment, $this->data, TRUE );
		$this->load->view('themes/' . _theme() . '/skeleton', $this->data );
	}
}

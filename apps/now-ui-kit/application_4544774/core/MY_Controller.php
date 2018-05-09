<?php
/**
* Authentication Library
*
* @package Authentication
* @category Libraries
* @author Adam Griffiths
* @link http://adamgriffiths.co.uk
* @version 2.0.3
* @copyright Adam Griffiths 2011
*
* Auth provides a powerful, lightweight and simple interface for user authentication .
*/

class Application extends CI_Controller
{

	// this is the switch .. 
	private $theme  = NULL; // read this from config or database 
	private $assets = NULL; // load it based on the theme .. 
	
	public function __construct()
	{
		parent::__construct();
		
		log_message('debug', 'Application Loaded');

		$this->theme = cfg_theme();	
		$this->config->load('assets_' . $this->theme );
		$this->assets = $this->config->item('assets');
		
		//$this->load->library(array('form_validation', 'ag_auth'));
		//$this->load->helper(array('url', 'email', 'ag_auth'));
		
		//$this->config->load('ag_auth');
	}
	
	public function field_exists($value)
	{
		$field_name  = (valid_email($value)  ? 'email' : 'username');
		
		$user = $this->ag_auth->get_user($value, $field_name);
		
		if($user && array_key_exists('id', $user))
		{
			$this->form_validation->set_message('field_exists', 'The ' . $field_name . ' provided already exists, please use another.');
			
			return FALSE;
		}
		else
		{			
			return TRUE;
			
		} // if($this->field_exists($value) === TRUE)
		
	} // public function field_exists($value)
	
	public function register()
	{
		if ( logged_in() ) {
			redirect( '/' );
		}

		$data = array();
		$data['theme'    ] = $this->theme;
		$data['assets'   ] = $this->assets;
		$data['page'     ] = 'register';
		
		if ( is_get() ) {

			$data[ 'content' ] = $this->load->view( 'themes/' . $this->theme . '/register', $data, TRUE);
			$this->load->view( 'themes/' . $this->theme . '/base' , $data);
			return;				
		}

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|callback_field_exists');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|matches[password_conf]');
		$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|min_length[4]|matches[password]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|min_length[6]|valid_email|callback_field_exists');

		if($this->form_validation->run() == FALSE)
		{
	      //die( validation_errors() );
			$data[ 'error'  ] = 'Input Error.';
		}
		else
		{
			$username = set_value('username');
			$password = $this->ag_auth->salt(set_value('password'));
			$email = set_value('email');

			if($this->ag_auth->register($username, $password, $email) === TRUE)
			{
				$data['message'] = "The user account has now been created.";
				
			} // if($this->ag_auth->register($username, $password, $email) === TRUE)
			else
			{
				$data['error'] = "Registration Error.";
			}

		} // if($this->form_validation->run() == FALSE)

		$data[ 'content' ] = $this->load->view( 'themes/' . $this->theme . '/register', $data, TRUE);
		$this->load->view( 'themes/' . $this->theme . '/base' , $data);
		return;				
	
	} // public function register()
	
	
	public function login($redirect = NULL)
	{	
		$redirect = base_url();

		if ( logged_in() ) {
			redirect( $redirect );
		}

		$data = array();
		$data['theme' ] = $this->theme;
		$data['assets'] = $this->assets;
		$data['page'  ] = 'login';
		
		if ( is_get() ) {

			$data[ 'content' ] = $this->load->view( 'themes/' . $this->theme . '/login', $data, TRUE);
			$this->load->view( 'themes/' . $this->theme . '/base' , $data);
			return;				
		}

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		
		if($this->form_validation->run() == FALSE)
		{
	      //die( validation_errors() );
		  $data[ 'errors'  ] = 'Error.';
		}
		else
		{
			$username = set_value('username');
			$password = $this->ag_auth->salt(set_value('password'));
			$field_type  = (valid_email($username)  ? 'email' : 'username');
			
			$user_data = $this->ag_auth->get_user($username, $field_type);
			
			if($user_data && array_key_exists('password', $user_data) && $user_data['password'] === $password)
			{
				
				unset($user_data['password']);
				unset($user_data['id']);

				$this->ag_auth->login_user($user_data);
				
				// go to root
				redirect( base_url() );				
				
			} // if($user_data['password'] === $password)
			else
			{
				$data['errors'] = "The username and password did not match.";
				//$this->ag_auth->view('message', $data);
			}

		} // if($this->form_validation->run() == FALSE)

		$data[ 'content' ] = $this->load->view( 'themes/' . $this->theme . '/login', $data, TRUE);
		$this->load->view( 'themes/' . $this->theme . '/base' , $data);
		return;	

	} // login()
	
	public function logout($redirect = NULL)
	{
		$this->ag_auth->logout();

		// root redirect
		redirect( base_url() );
	
	} // logout() 

}

/* End of file: MY_Controller.php */
/* Location: application/core/MY_Controller.php */
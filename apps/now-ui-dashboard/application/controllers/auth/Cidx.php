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
        echo br() . 'auth -> index';
    }

    public function login($redirect=NULL)
	{
        $data = array();

        if( logged_in() )
        {
            redirect('/');
            return;
        }

        if ( is_get() ) {

            $data['content'] = $this->load->view( 'auth/login', $data, true ); 
            echo $this->load->view( 'auth/index', $data);
            return;
        
        } else {

			$username = set_value('username');
			$password = $this->ag_auth->salt(set_value('password'));
			$field_type  = (valid_email($username)  ? 'email' : 'username');
			
			$user_data = $this->ag_auth->get_user($username, $field_type);			
			
			if($user_data && array_key_exists('password', $user_data) && $user_data['password'] === $password)
			{
				
				unset($user_data['password']);
				unset($user_data['id']);

				$this->ag_auth->login_user($user_data);
                
                if ( !has_text( $redirect ) ) {

                    $redirect = '/';
                }

                redirect($redirect);
                return;
				
			} // if($user_data['password'] === $password)
			else
			{
                echo br() . ' login -> err ';
            }
                        
        }

        echo br() . 'auth -> login';
    }

    // 
    public function register($redirect=NULL)
	{        
        // in case the user want to disable login 
        //redirect('/login');

        $data = array();

        if ( is_get() ) {

            $data['content'] = $this->load->view( 'auth/register', $data, true ); 
            echo $this->load->view( 'auth/index', $data);
            return;
        
        } 
    
        // POST ..
        $this->form_validation->set_rules('username'      , 'Username'             , 'required'); // callback_field_exists
        $this->form_validation->set_rules('password'      , 'Password'             , 'required');
        $this->form_validation->set_rules('password_conf' , 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email'         , 'Email Address'        , 'required|valid_email');

        if($this->form_validation->run() == FALSE)
        {
            echo br() . 'input err';
        }
        else
        {
            $username = set_value('username');
            $password = $this->ag_auth->salt(set_value('password'));
            $email = set_value('email');

            if($this->ag_auth->register($username, $password, $email) === TRUE)
            {
                echo br() . "registration OK";
            }
            else
            {
                echo br() . "registration err";
            }
        }
    }

    public function logout($redirect=NULL)
	{
        $this->ag_auth->logout();

        if ( !has_text( $redirect ) ) {

            $redirect = '/';
        }

        redirect($redirect);
        return;
    }    
}

/* End of file: dashboard.php */
/* Location: application/controllers/admin/dashboard.php */
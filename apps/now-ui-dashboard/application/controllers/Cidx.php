<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
www.AppSeed.us - App builder & automated deployer
Php / CodeIgniter Aplication Template
Licence: RoSoft all rights reserved
*/

class Cidx extends MY_Controller {

    public function __construct()
    {
		parent::__construct();
	}
		
	public function index( $path_1=null, 
						   $path_2=NULL, 
						   $path_3=NULL, 
						   $path_4=NULL, 
						   $path_5=NULL )   
	{

		$data = array();
		$data[ 'assets' ] = $this->assets;

		if ( FALSE == has_text( $path_1 ) ) {

			$path_1 = 'dashboard';
		}

		$data['segment'] = $path_1;

		// load dashboard
		$data['content'] = $this->load->view( $path_1, $data, TRUE);

		$this->load->view( 'base', $data);
		return;
	}


	public function page_not_found( )
	{
		echo br() . "Yep, it's a 404!";
		return ;
	}

	public function api( )
	{
		$data = array();
		
		$input_section = $this->input->post( "section" );
		$input_action  = $this->input->post( "action"  );
		$input_data    = $this->input->post( "data"    );

		// Ajax stuff !!!

		$data[ "status" ] = 0;
		$data[ "info"   ] = 'success, new id = ' . $page->getId();
		
		echo json_encode( $data );
		return;
	}	

	public function mail_me( )
	{
		$data = array();
		
		$input_name    = $this->input->post( "name"    );
		$input_mail    = $this->input->post( "mail"    );
		$input_message = $this->input->post( "message" );
		
		$aBodyText  = '';
		$aBodyText .= '';
		
		$aBodyText  = '<br/> REQUEST > '; 
		$aBodyText .= '<br/> input_name    : ' . $input_name;
		$aBodyText .= '<br/> input_mail    : ' . $input_mail;
		$aBodyText .= '<br/> input_message : ' . $input_message; 

		$mail=new PHPMailer();
		
		$mail->From         = $input_mail;
		$mail->FromName     = 'Client : ' . $input_mail;
		
		$mail->Sender = 'office@your_company.ro';
		$mail->AddAddress( 'target_1@yahoo.com'     );
		$mail->AddAddress( 'target_2@yahoo.com'     );
		
		$mail->Subject = 'XXXX - order - ' . $input_mail;
		$mail->Body    = $aBodyText ;  
		
		$mail->IsHTML( true  ); 		
		$mail->Send();

		$data[ "info" ] = 'success';
		$data[ "msg"  ] = 'Thank you!.';
		
		echo json_encode( $data );
		return;
	}	

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
www.AppSeed.us - App builder & automated deployer
Php / CodeIgniter Aplication Template
Licence: RoSoft all rights reserved
*/

class Cidx extends CI_Controller {

	// this is the switch .. 
	private $theme  = NULL; // read this from config or database 
	private $assets = NULL; // load it based on the theme .. 

    public function __construct()
    {
		parent::__construct();

		$this->theme = cfg_theme();	
		$this->config->load('assets_' . $this->theme );
		$this->assets = $this->config->item('assets');

	}
		
	public function index( $path_1='index', 
						   $path_2=NULL, 
						   $path_3=NULL, 
						   $path_4=NULL, 
						   $path_5=NULL )   
	{	

		$data           = array();
		$data['theme' ] = $this->theme;
		$data['assets'] = $this->assets;
		
		// handle default page 	
		if ( !isset( $path_1 ) ){
			$path_1 = 'index';	
		}

		$data[ 'page'  ] = $path_1      ;	
		$data[ 'theme' ] = $this->theme ;

		$data[ 'content' ] = $this->load->view( 'themes/' . $this->theme . '/' . $path_1/*current page*/, $data, TRUE);

		$this->load->view( 'themes/' . $this->theme . '/base' , $data);
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

		$data[ "status" ] = COMMON::STATUS_ERR;
		$data[ "info"   ] = 'Unknown Err';

		$input_section = $this->input->post( "section" );
		$input_action  = $this->input->post( "action"  );
		$input_segment = $this->input->post( "data"    );
		$input_content = $this->input->post( "data2"   );
		$input_note    = $this->input->post( "data3"   );

		if ( $input_section == COMMON::SECTION_PAGE )
		{
			if ( $input_action == COMMON::OPER_EDIT_PAGE ) 
			{

				if ( session_exists('theme') ) {
					$this->theme = session_get('theme');
				}

				$page = new Page();
		
				$page->setTheme   ( $this->theme   );
				$page->setSegment ( $input_segment );
				$page->setContent ( $input_content );
				$page->setNote    ( $input_note    );

				// save all the shit !
				$page->save();
		
				$data[ "status" ] = COMMON::STATUS_OK;
				$data[ "info"   ] = 'success, new id = ' . $page->getId();
				
				echo json_encode( $data );
				return;
			
			} else 
			if ( $input_action == COMMON::OPER_DELETE_ALL ) {

				g_del_all_pages();

				$data[ "status" ] = COMMON::STATUS_OK;
				$data[ "info"   ] = 'delete ok ';
				
				echo json_encode( $data );
				return;

			} 
		}

		echo json_encode( $data );
		return;	

	}	

	public function mail_me( )
	{
		$data = array();
		
		$input_name    = $this->input->post( "name"    );
		$input_mail    = $this->input->post( "mail"    );
		$input_message = $this->input->post( "message" );

		$aBodyText  = '<br/> Hello, ';
		$aBodyText .= '<br/>  ';
		$aBodyText .= '<br/> I\'m ' . $this->assets->MAIL_FRIENDLY_NAME .' from , welcome on our VIP Club, stay tuned for exclusive discounts and gifts.';

		if ( $this->assets->HAS_EBOOK ) {

			$aBodyText .= '<br/> You will find your special gift on following link:';
			$aBodyText .= '<br/>  ';
			$aBodyText .= '<br/> <a href="' . base_url() . 'bonus" download>' . $this->assets->PRODUCT_NAME . ' eBook</a>';
	
		} else {

			$aBodyText .= '<br/> We will notice you once we have a cool promotion for you';
			
		} 
		
		$aBodyText .= '<br/>  ';
		$aBodyText .= '<br/>Cheers!'; 

		$mail=new PHPMailer();
		
		$mail->From         = $this->assets->CONTACT_MAIL;
		$mail->FromName     = $this->assets->CONTACT_MAIL_TITLE;
		
		$mail->Sender       = $this->assets->CONTACT_MAIL;
		$mail->AddAddress ( $input_mail              );
		$mail->AddCC      ( $this->assets->CONTACT_MAIL );
		
		$mail->Subject = 'Hello from ' . $this->assets->PRODUCT_NAME;
		$mail->Body    = $aBodyText ;  
		
		$mail->IsHTML( true  ); 		
		$mail->Send();

		echo "true";
		return;
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {

	 function __construct() {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->library('google');
    }

	public function index(){
	
		$data['google_login_url']=$this->google->get_login_url();
		if($this->session->userdata('sess_logged_in')==0){
			$this->load->view('login1',$data);
			//	$this->load->view('login1',$data);
			}
		else{
			$this->load->view('private',$data);
			//$this->load->view('private',$data);
		}
	}

	public function oauth2callback(){
		$google_data=$this->google->validate();
	    
	
	   $user=$this->general_model->GetAllInfo('t_register','id',array('email'=>$google_data['email'],'oauth_provider'=>'google'));
	
		if(count($user)>0){
			
			
			$data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'oauth_provider'=>'google',
				'picture'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
		//  $this->load->view('private',$data);
		$this->session->set_userdata($session_data);
			
		}else{
			
        // $this->general_model->insertinto($google_data['name'],$google_data['email'],'google');
			
			$data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'oauth_provider'=>'google',
				'picture'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
	
			$this->session->set_userdata($session_data);
	
		  //    $this->load->view('private',$data);
		}
		
		redirect(base_url());

	}

	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'sess_logged_in'=>0

				);
		$this->session->set_userdata($session_data);
		redirect(base_url());
	}
}
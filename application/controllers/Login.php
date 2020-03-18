<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('login_model');
  
 }

 function index()
 {
  $this->load->view('login1');
 }

 function createpwrd(){
	
	$pass = rand(123456,999999);
	
	return $pass;
	 
	 
 }


function resetpwd()
{
	
 $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
 
  if($this->form_validation->run())
  {	
  
  $email = $this->input->post('email'); 
  $count = $this->login_model->resetpwrd($email);
  
  if($count > 0){
  
  
  	 $password = $this->createpwrd();
	 
	 $encrypted_password = md5($password);
  
  
  $this->login_model->resetpwrd2($email,$encrypted_password,$password);  
     
 
  
  $subject = "Reset password dari Pendaftaran Sekolah Dian Harapan - Jangan Reply email ini";
    $message = "
    <p>Hi ".$this->input->post('user_name')."</p>
    <p>
Ini adalah email reset password dari sistem pendaftaran online Sekolah Dian Harapan
<p>Berikut ini adalah password baru anda </p>

<p>".$password."  </p>

<p>Jika menemui kendala, silahkan menghubungi Nomor berikut ini : 081328340046 WA only</p>

<p>Terima Kasih</p>	
<p>Tim Admisi Sekolah Dian Harapan</p>
    ";
		$this->load->library('email');
	
	
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sdhregisteronline@gmail.com',
			'smtp_pass' => 'BelengBeleng',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);	
	
	$this->email->initialize($config);
	$this->email->set_mailtype("html");
	$this->email->set_newline("\r\n");	
	
//Email content

		
		$this->email->to($email);
		$this->email->from('sdhregisteronline@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);	
	
	//    $this->email->send();
	
	
    $this->email->send();
   
$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
									<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> Password baru berhasil dikirim ke email anda, silahkan periksa email anda dan login menggunakan password yang baru</b2></div>');	
							
  }
  
  else{
	  
   $this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" 		data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Email tidak ditemukan</div>');	  
	  
	  
  }
  
							
  }
  
 
    $this->load->view('login1');	 
  
}

 function validation()
 {
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('private_area');
   }
   else
   {
    $this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> '.$result.'</div>');
    redirect('login');
   }
  }
  else
  {
   $this->index();
  }
 }

}

?>
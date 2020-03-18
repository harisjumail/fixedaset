<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('admin_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('login_admin_model');
 }

 function index()
 {
  $this->load->view('loginadmin');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_name', 'Nama pengguna', 'required');
  $this->form_validation->set_rules('user_password', 'Kata sandi', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_admin_model->can_login($this->input->post('user_name'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('admin_area');
   }
   else
   {
    $this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> '.$result.'</div>');
    redirect('login_admin');
   }
  }
  else
  {
   $this->index();
  }
 }

}

?>
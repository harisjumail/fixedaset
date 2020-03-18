<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Superadmin_area extends CI_Controller {

 public function __construct()

 {

  parent::__construct();

  $idsession = $this->session->userdata('id'); 

  $usersession = $this->session->userdata('admin'); 

  if(!$idsession)

  {

   redirect('login_superadmin');

  }

  $this->load->library('form_validation');

  $this->load->library('encrypt');

  $this->load->model('Superadmin_model'); 
  
  $this->load->model('Admin_model');

  $this->load->model('Private_model'); 

  $this->load->library('numbertowords'); 
 
 
   $this->load->helper('form');


 } 


 function index()

 {

  $usersession = $this->session->userdata('user');	

   	if($usersession == "admin"){

 	$data['totalpendaftar'] = $this->Superadmin_model->get_totalpendaftar();
	
	$val = date('m');
	
	$data['totalpendaftarbulan'] = $this->Superadmin_model->get_totalpendaftarbulan($val);	
	
	$data['totalpendaftarminggu'] = $this->Superadmin_model->get_totalpendaftarminggu();
	
	$data['sekolah']= $this->Superadmin_model->get_sekolah()->result();
	
	$data["postrow"] = $this->Superadmin_model->get_userdata();
	
	$data["tk"] = $this->Superadmin_model->get_tingkat("TK","","");
	
	$data["sd"] = $this->Superadmin_model->get_tingkat("SD","","");
	
	$data["smp"] = $this->Superadmin_model->get_tingkat("SMP","","");
	
	$data["sma"] = $this->Superadmin_model->get_tingkat("SMA","","");
	
	for($i=1;$i<=12;$i++){
	
	$data['tpb'][$i] = $this->Superadmin_model->get_totalpendaftarbulan($i);
	
	}
	
	
	for($i=1;$i<=13;$i++){
	
	$data['tps'][$i] = $this->Superadmin_model->get_totalpendaftarpersekolah($i);
	
	}	
	
	
//	$data['totalconfirm'] = $this->Admin_model->get_totalconfirm();	

//	$data['totalnonconfirm'] = $this->Admin_model->get_totalnonconfirm();

//	$data['sisaform'] = $this->Admin_model->get_totalformulir();

//	$data['main'] = $this->Admin_model->get_maintransaction()->result();

//	$data["postrow"] = $this->Admin_model->get_userdata();

//	$data['totalnonconfirma'] = $this->Admin_model->get_totalconfirmadmin();

	  $data['switch'] ="default";
	  
	  
	  

	  $this->load->view('dashboardsuperadmin',$data);

	}

	else

	{

		redirect('loginsuperadmin');

	}



 }


function filter()

 {


	$submit = $this->input->post('tampil');
	
	$data["postrow"] = $this->Superadmin_model->get_userdata();
	
	$val1 = $this->input->post('tahun');	
	
	$val2 = $this->input->post('sekolah');
	
	if(!empty($val2)){
		
	
	if($submit == "view"){	

	
 	$data['totalpendaftar'] = $this->Superadmin_model->get_totalpendaftarbulanfilter($val1,$val2);
	
 	//$data['totalpendaftar'] = $this->Superadmin_model->get_totalpendaftar($val,$val2);
	
	$date = date('m');
	
	$data['totalpendaftarbulan'] = $this->Superadmin_model->get_totalpendaftarbulan($date);	
	
	$data['totalpendaftarminggu'] = $this->Superadmin_model->get_totalpendaftarminggu();	
	
	$data['sekolah']= $this->Superadmin_model->get_sekolah()->result();
	
	for($i=1;$i<=13;$i++){
	
	$data['tps'][$i] = $this->Superadmin_model->get_totalpendaftarpersekolah($i);
	
	}
	
	$data['val'] = $val1;
			
	
	if ($val1 == "2019" or $val1 == "" or empty($val1)){
		
		$data['switch'] ="filter2";
		
		
		$data["tk"] = $this->Superadmin_model->get_tingkat("TK",$val2,"");
		
		$data["sd"] = $this->Superadmin_model->get_tingkat("SD",$val2,"");
		
		$data["smp"] = $this->Superadmin_model->get_tingkat("SMP",$val2,"");
		
		$data["sma"] = $this->Superadmin_model->get_tingkat("SMA",$val2,"");		
		
		
		for($i=1;$i<=12;$i++){
		
		$data['tpb'][$i] = $this->Superadmin_model->get_totalpendaftarbulanpersekolah($i,$val2);
		
		}		
		
	
		}
		
	else{
		
		$data['switch'] ="filter1";
		
		
			
		$data["tk"] = $this->Superadmin_model->get_tingkat("TK",$val2,$val1);
		
		$data["sd"] = $this->Superadmin_model->get_tingkat("SD",$val2,$val1);
		
		$data["smp"] = $this->Superadmin_model->get_tingkat("SMP",$val2,$val1);
		
		$data["sma"] = $this->Superadmin_model->get_tingkat("SMA",$val2,$val1);	
		
		
		for($i=1;$i<=31;$i++){
		
		$data['tpb'][$i] = $this->Superadmin_model->get_totalpendaftarharipersekolah($i,$val2,$val1);
		
		}	
		
		
		}
	
	
	

	
    $this->load->view('dashboardsuperadmin',$data);
	  
	}
	}
	else{
	
	redirect('superadmin_area');	
		
	}


 }






 function logout()

 {

  $data = $this->session->all_userdata();

  foreach($data as $row => $rows_value)

  {

   $this->session->unset_userdata($row);

  }

  redirect('login_superadmin');

 }

 

 

 

 

}



?>
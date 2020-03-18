<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin_area extends CI_Controller {

 public function __construct()

 {

  parent::__construct();

  $idsession = $this->session->userdata('id'); 

  $usersession = $this->session->userdata('admin'); 

  if(!$idsession)

  {

   redirect('login_admin');

  }

  $this->load->library('form_validation');

  $this->load->library('encrypt');
  
  $this->load->model('Dashboardadmin_model'); 

  $this->load->model('Admin_model'); 

  $this->load->helper('url');

 // $this->load->model('Private_model'); 

 //$this->load->library('numbertowords'); 

 $this->load->library('pagination');

 } 


 function index()

 {

  $usersession = $this->session->userdata('user');	   

  $data["postrow"] = $this->Admin_model->get_userdata();

	if($usersession == "admin"){		

	
	  $this->load->view('dashboard',$data);

	}

	else

	{

		redirect('login');

	}


	


 }



function addmastercat($rowno=0){
 // Row per page
  $rowperpage = 4 ;
  // Row position
   if($rowno != 0){
			   
	 $rowno = ($rowno-1) * $rowperpage;
			 
   }		

//$data = "oke";

//$this->Admin_model->getmastercat();

$data['cek']  = "";


$allcount =  $this->Admin_model->getmastercatrow()->num_rows();
		
		
// Get records
 //$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();

$mastercatrec= $this->Admin_model->getmastercat($rowno,$rowperpage)->result();


		   // Pagination Configuration
		   $config['base_url'] = base_url().'admin_area/addmastercat';
		
		   $config['use_page_numbers'] = TRUE;
		   
		   $config['total_rows'] = $allcount;
		   
		   $config['per_page'] = $rowperpage;
		   
		   $config['num_links'] = 2;
		   
			   $config['use_page_numbers'] = TRUE;
			   $config['reuse_query_string'] = TRUE;
				
			   $config['full_tag_open'] = '<div class="pagination">';
			   $config['full_tag_close'] = '</div>';
				
			   $config['first_link'] = 'First Page';
			   $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			   $config['first_tag_close'] = '</span>';
				
			   $config['last_link'] = 'Last Page';
			   $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			   $config['last_tag_close'] = '</span>';
				
			   $config['next_link'] = 'Next Page';
			   $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			   $config['next_tag_close'] = '</span>';
	
			   $config['prev_link'] = 'Prev Page';
			   $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			   $config['prev_tag_close'] = '</span>';
	
			   $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			   $config['cur_tag_close'] = '</span>';
	
			   $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			   $config['num_tag_close'] = '</span>';	 
			
		   
		   $this->pagination->initialize($config);
		
		   $data['pagination'] = $this->pagination->create_links();
		   
		   $data['main'] = $mastercatrec;
		   
		   $data['row'] = $rowno;

		   $data["postrow"] = $this->Admin_model->get_userdata();


$this->load->view("addmastercat",$data);


}


function mastercatact1(){


	$data["postrow"] = $this->Admin_model->get_userdata();

	$tombol = $this->input->post('tombol');

	if($tombol == "simpan"){

	$this->form_validation->set_rules('fakode', 'Fa Kode', 'required');	
  
	$this->form_validation->set_rules('faname', 'Fa Name', 'required');

	$this->form_validation->set_rules('fano', 'Fa Number', 'required'); 
  
	$this->form_validation->set_rules('famethode', 'Fa Methode', 'required'); 

	$this->form_validation->set_rules('fause', 'Fa Use', 'required');	  
	
  
	if($this->form_validation->run() != false){
  
			 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;

			   $years = $this->input->post('fause');

			   $month = 12 * $years;

			   $depyears = (100/$years);

			   $depyears = number_format($depyears, 2, ',', ' ');

			   $depmonth = ($depyears/12);

			   $depmonth = number_format($depmonth, 2, ',', ' ');
   
			  $masuk = array('mastercat_kode' =>$this->input->post('fakode'),
  
						  'mastercat_nama' =>$this->input->post('faname'),
  
						  'mastercat_type' =>"",

						  'mastercat_fano' =>$this->input->post('fano'),

						  'mastercat_methode' =>$this->input->post('famethode'),

						  'mastercat_year' =>$years,

						  'mastercat_month' =>$month,

						  'mastercat_depyear' =>$depyears,						  
  
						  'mastercat_depmonth' => $depmonth
  
					  
  
			);
  
				
  
		   $this->Admin_model->insertintomastercat($masuk);
  
		   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
  
									  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah master kategori berhasil
  
									  </b2></div>');	
									  
  
  
	}


	else{

		$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

		<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	


	}


	
	redirect('admin_area/addmastercat', 'refresh');	 
  
  
	}// end post submit

	elseif($tombol == "baru"){
	
	redirect('admin_area/addmastercat', 'refresh');	 

	}

	else{
	
		$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $tombol);

		$val= $arrsub[0];	
	 
		$submit = $arrsub[1];  	
		
		$this->form_validation->set_rules('fakode', 'Fa Kode', 'required');	
  
		$this->form_validation->set_rules('faname', 'Fa Name', 'required');
	
		$this->form_validation->set_rules('fano', 'Fa Number', 'required'); 
	  
		$this->form_validation->set_rules('famethode', 'Fa Methode', 'required'); 
	
		$this->form_validation->set_rules('fause', 'Fa Use', 'required');	  
		
	  
		if($this->form_validation->run() != false){
	  
				 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;
	
				   $years = $this->input->post('fause');
	
				   $month = 12 * $years;
	
				   $depyears = (100/$years);
	
				   $depyears = number_format($depyears, 2, ',', ' ');
	
				   $depmonth = ($depyears/12);
	
				   $depmonth = number_format($depmonth, 2, ',', ' ');
	   
				  $masuk = array('mastercat_kode' =>$this->input->post('fakode'),
	  
							  'mastercat_nama' =>$this->input->post('faname'),
	  
							  'mastercat_type' =>"",
	
							  'mastercat_fano' =>$this->input->post('fano'),
	
							  'mastercat_methode' =>$this->input->post('famethode'),
	
							  'mastercat_year' =>$years,
	
							  'mastercat_month' =>$month,
	
							  'mastercat_depyear' =>$depyears,						  
	  
							  'mastercat_depmonth' => $depmonth
	  
						  
	  
				);
	  
					
	  
			   $this->Admin_model->editintomastercat($masuk,$val);
	  
			   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	  
										  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Edit master kategori berhasil	  </b2></div>');	
										  
	  
	  
		}
	
	
		else{
	
			$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	
			<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	
	
	
		}
	


		redirect('admin_area/addmastercat', 'refresh');	 



	}
  
  }


  function editmastercat($rowno =0){

   $this->session->set_flashdata('message','');

 
   $submit_temp = $this->input->post('tombol');

   $arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

   $val= $arrsub[0];	

   $submit = $arrsub[1];   

   if(!empty($val) AND !empty($submit)){	

	// mulai pagnation
	$data["postrow"] = $this->Admin_model->get_userdata();
	
 // Row per page
 $rowperpage = 4 ;
 // Row position
  if($rowno != 0){
			  
	$rowno = ($rowno-1) * $rowperpage;
			
  }		

//$data = "oke";

//$this->Admin_model->getmastercat();

$data['cek']  = "";


$allcount =  $this->Admin_model->getmastercatrow()->num_rows();
// Get records
//$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();

$mastercatrec= $this->Admin_model->getmastercat($rowno,$rowperpage)->result();


		  // Pagination Configuration
		  $config['base_url'] = base_url().'admin_area/editmastercat';
	   
		  $config['use_page_numbers'] = TRUE;
		  
		  $config['total_rows'] = $allcount;
		  
		  $config['per_page'] = $rowperpage;
		  
		  $config['num_links'] = 2;
		  
			  $config['use_page_numbers'] = TRUE;
			  $config['reuse_query_string'] = TRUE;
			   
			  $config['full_tag_open'] = '<div class="pagination">';
			  $config['full_tag_close'] = '</div>';
			   
			  $config['first_link'] = 'First Page';
			  $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			  $config['first_tag_close'] = '</span>';
			   
			  $config['last_link'] = 'Last Page';
			  $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			  $config['last_tag_close'] = '</span>';
			   
			  $config['next_link'] = 'Next Page';
			  $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			  $config['next_tag_close'] = '</span>';
   
			  $config['prev_link'] = 'Prev Page';
			  $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			  $config['prev_tag_close'] = '</span>';
   
			  $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			  $config['cur_tag_close'] = '</span>';
   
			  $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			  $config['num_tag_close'] = '</span>';	 
		   
		  
		  $this->pagination->initialize($config);
	   
		  $data['pagination'] = $this->pagination->create_links();
		  
		  $data['main'] = $mastercatrec;
		  
		  $data['row'] = $rowno;

		  //end pagnation
	
		  $val= $arrsub[0];	

		  $submit = $arrsub[1];   
		  
		  if($submit == "edi"){

		$data['main2'] = $this->Admin_model->getsinglemastercat($val);

		$data['cek']  = "ok";

		$this->load->view("addmastercat",$data);
		  }
		  elseif($submit == "del"){

		$this->Admin_model->hapusmastercat($val);
		

		$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	  
		<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus master kategori berhasil </b2></div>');	
		
		

		redirect('admin_area/addmastercat', 'refresh');	 

		  }

	//echo $data;
      
   }
 

}



// start controller master item
function addmasteritem($rowno =0)

{

// Row per page
$rowperpage = 4 ;
// Row position
 if($rowno != 0){
			 
   $rowno = ($rowno-1) * $rowperpage;
		   
 }		

$data["postrow"] = $this->Admin_model->get_userdata();

$data['cek']  = "";


$allcount =  $this->Admin_model->getmasteritemrow()->num_rows();
	  
	  
// Get records
//$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();

$mastercatrec= $this->Admin_model->getmasteritem($rowno,$rowperpage)->result();


		 // Pagination Configuration
		 $config['base_url'] = base_url().'admin_area/addmasteritem';
	  
		 $config['use_page_numbers'] = TRUE;
		 
		 $config['total_rows'] = $allcount;
		 
		 $config['per_page'] = $rowperpage;
		 
		 $config['num_links'] = 2;
		 
			 $config['use_page_numbers'] = TRUE;
			 $config['reuse_query_string'] = TRUE;
			  
			 $config['full_tag_open'] = '<div class="pagination">';
			 $config['full_tag_close'] = '</div>';
			  
			 $config['first_link'] = 'First Page';
			 $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			 $config['first_tag_close'] = '</span>';
			  
			 $config['last_link'] = 'Last Page';
			 $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			 $config['last_tag_close'] = '</span>';
			  
			 $config['next_link'] = 'Next Page';
			 $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			 $config['next_tag_close'] = '</span>';
  
			 $config['prev_link'] = 'Prev Page';
			 $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			 $config['prev_tag_close'] = '</span>';
  
			 $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			 $config['cur_tag_close'] = '</span>';
  
			 $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			 $config['num_tag_close'] = '</span>';	 
		  
		 
		 $this->pagination->initialize($config);
	  
		 $data['pagination'] = $this->pagination->create_links();
		 
		 $data['main'] = $mastercatrec;
		 
		 $data['row'] = $rowno;

 		 $data['facode'] = $this->Admin_model->getmastercatoformasteitem()->result();	


$this->load->view("addmasteritem",$data);

}


function mastermitact1(){


	$data["postrow"] = $this->Admin_model->get_userdata();

	$tombol = $this->input->post('tombol');

	if($tombol == "simpan"){

	$this->form_validation->set_rules('itkode', 'Item Kode', 'required');	
  
	$this->form_validation->set_rules('itname', 'Item Name', 'required');

	$this->form_validation->set_rules('itbrand', 'Item Brand', 'required');	
  
	$this->form_validation->set_rules('itco', 'Item Colour', 'required');

	$this->form_validation->set_rules('itsize', 'Item Size', 'required'); 
  
	$this->form_validation->set_rules('itfacode', 'Fa Kode', 'required'); 

	$this->form_validation->set_rules('ittype', 'Fa Type', 'required');	  
	
  
	if($this->form_validation->run() != false){
  
			 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;
   
			  $masuk = array('mi_kode' =>$this->input->post('itkode'),
  
						  'mi_namaitem' =>$this->input->post('itname'),

						  'mi_brand' =>$this->input->post('itbrand'),
  
						  'mi_color' =>$this->input->post('itco'),

						  'mi_size' =>$this->input->post('itsize'),

						  'mi_fa' =>$this->input->post('itfacode'),

						  'mi_fatype' =>$this->input->post('ittype') 
					  
  
			);
  
				
  
		   $this->Admin_model->insertintomasteritem($masuk);
  
		   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
  
									  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah master item berhasil
  
									  </b2></div>');	
									  
  
  
	}


	else{

		$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

		<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	


	}


	
	redirect('admin_area/addmasteritem', 'refresh');	 
  
  
	}// end post submit

	elseif($tombol == "baru"){


	redirect('admin_area/addmasteritem', 'refresh');

	}

	else{
	
		$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $tombol);

		$val= $arrsub[0];	
	 
		$submit = $arrsub[1];  	
		
		$this->form_validation->set_rules('itkode', 'Item Kode', 'required');	
  
		$this->form_validation->set_rules('itname', 'Item Name', 'required');
	
		$this->form_validation->set_rules('itbrand', 'Item Brand', 'required');	
	  
		$this->form_validation->set_rules('itco', 'Item Colour', 'required');
	
		$this->form_validation->set_rules('itsize', 'Item Size', 'required'); 
	  
		$this->form_validation->set_rules('itfacode', 'Fa Kode', 'required'); 
	
		$this->form_validation->set_rules('ittype', 'Fa Type', 'required');	  
		
	  
		if($this->form_validation->run() != false){
	  
				 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;
				
	   
				   $masuk = array('mi_kode' =>$this->input->post('itkode'),
  
				   'mi_namaitem' =>$this->input->post('itname'),

				   'mi_brand' =>$this->input->post('itbrand'),

				   'mi_color' =>$this->input->post('itco'),

				   'mi_size' =>$this->input->post('itsize'),

				   'mi_fa' =>$this->input->post('itfacode'),

				   'mi_fatype' =>$this->input->post('ittype') 
			   

	 );
	  
					
	  
			   $this->Admin_model->editintomasteritem($masuk,$val);
	  
			   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	  
										  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Edit master item berhasil	  </b2></div>');	
										  
	  
	  
		}
	
	
		else{
	
			$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	
			<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	
	
	
		}
	


		redirect('admin_area/addmasteritem', 'refresh');	 



	}
  
  }



  function editmasteritem($rowno =0){

	

	$this->session->set_flashdata('message',''); 
  
	$submit_temp = $this->input->post('tombol');
 
	$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);
 
	$val= $arrsub[0];	
 
	$submit = $arrsub[1];   
 
	if(!empty($val) AND !empty($submit)){	

		$data["postrow"] = $this->Admin_model->get_userdata();
 
	 // mulai pagnation
 
	 
  // Row per page
  $rowperpage = 4 ;
  // Row position
   if($rowno != 0){
			   
	 $rowno = ($rowno-1) * $rowperpage;
			 
   }		
 
 //$data = "oke";
 
 //$this->Admin_model->getmastercat();
 
 $data['cek']  = "";
 
 
 $allcount =  $this->Admin_model->getmastercatrow()->num_rows();
 // Get records
 //$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();
 
 $mastercatrec= $this->Admin_model->getmasteritem($rowno,$rowperpage)->result();
 
 
		   // Pagination Configuration
		   $config['base_url'] = base_url().'admin_area/editmasteritem';
		
		   $config['use_page_numbers'] = TRUE;
		   
		   $config['total_rows'] = $allcount;
		   
		   $config['per_page'] = $rowperpage;
		   
		   $config['num_links'] = 2;
		   
			   $config['use_page_numbers'] = TRUE;
			   $config['reuse_query_string'] = TRUE;
				
			   $config['full_tag_open'] = '<div class="pagination">';
			   $config['full_tag_close'] = '</div>';
				
			   $config['first_link'] = 'First Page';
			   $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			   $config['first_tag_close'] = '</span>';
				
			   $config['last_link'] = 'Last Page';
			   $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			   $config['last_tag_close'] = '</span>';
				
			   $config['next_link'] = 'Next Page';
			   $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			   $config['next_tag_close'] = '</span>';
	
			   $config['prev_link'] = 'Prev Page';
			   $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			   $config['prev_tag_close'] = '</span>';
	
			   $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			   $config['cur_tag_close'] = '</span>';
	
			   $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			   $config['num_tag_close'] = '</span>';	 
			
		   
		   $this->pagination->initialize($config);
		
		   $data['pagination'] = $this->pagination->create_links();
		   
		   $data['main'] = $mastercatrec;
		   
		   $data['row'] = $rowno;
 
		   //end pagnation
	 
		   $val= $arrsub[0];	
 
		   $submit = $arrsub[1];   
		   
		   if($submit == "edi"){
 
			$data['main2'] = $this->Admin_model->getsinglemasteritem($val);
	
			$data['cek']  = "ok";

			$data['facode'] = $this->Admin_model->getmastercatoformasteitem()->result();
	
			$this->load->view("addmasteritem",$data);
		   }
		   elseif($submit == "del"){
 
		 $this->Admin_model->hapusmasteritem($val);
		 
 
		 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	   
		 <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus master item berhasil </b2></div>');	
		 
		 redirect('admin_area/addmasteritem', 'refresh');	 
 
		   }
 
	 //echo $data;
	   
	}
  
 
 }
 
 
//end controller master item 

//start controller master lokasi


function addmasterlokasi($rowno =0)

{

// Row per page
$rowperpage = 4 ;
// Row position
 if($rowno != 0){
			 
   $rowno = ($rowno-1) * $rowperpage;
		   
 }		

 $data["postrow"] = $this->Admin_model->get_userdata();

$data['cek']  = "";


$allcount =  $this->Admin_model->getmasterlokasirow()->num_rows();
	  
	  
// Get records
//$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();

$mastercatrec= $this->Admin_model->getmasterlokasi($rowno,$rowperpage)->result();


		 // Pagination Configuration
		 $config['base_url'] = base_url().'admin_area/addmasterlokasi';
	  
		 $config['use_page_numbers'] = TRUE;
		 
		 $config['total_rows'] = $allcount;
		 
		 $config['per_page'] = $rowperpage;
		 
		 $config['num_links'] = 2;
		 
			 $config['use_page_numbers'] = TRUE;
			 $config['reuse_query_string'] = TRUE;
			  
			 $config['full_tag_open'] = '<div class="pagination">';
			 $config['full_tag_close'] = '</div>';
			  
			 $config['first_link'] = 'First Page';
			 $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			 $config['first_tag_close'] = '</span>';
			  
			 $config['last_link'] = 'Last Page';
			 $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			 $config['last_tag_close'] = '</span>';
			  
			 $config['next_link'] = 'Next Page';
			 $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			 $config['next_tag_close'] = '</span>';
  
			 $config['prev_link'] = 'Prev Page';
			 $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			 $config['prev_tag_close'] = '</span>';
  
			 $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			 $config['cur_tag_close'] = '</span>';
  
			 $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			 $config['num_tag_close'] = '</span>';	 
		  
		 
		 $this->pagination->initialize($config);
	  
		 $data['pagination'] = $this->pagination->create_links();
		 
		 $data['main'] = $mastercatrec;
		 
		 $data['row'] = $rowno;

 		 $data['facode'] = $this->Admin_model->getmastercatoformastelokasi()->result();	


$this->load->view("addmasterlokasi",$data);

}


function masterlokact1(){


	$data["postrow"] = $this->Admin_model->get_userdata();

	$tombol = $this->input->post('tombol');

	if($tombol == "simpan"){

	$this->form_validation->set_rules('departemen', 'Departemen', 'required');	
  
	$this->form_validation->set_rules('subdep', 'Sub Departemen', 'required');

	$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');	
  
	if($this->form_validation->run() != false){
  
			 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;
   
			  $masuk = array('masterlok_dep' =>$this->input->post('departemen'),
  
						  'masterlok_sub' =>$this->input->post('subdep'),

						  'masterlok_lokasi' =>$this->input->post('lokasi') 
					  
  
			);
  
				
  
		   $this->Admin_model->insertintomasterlokasi($masuk);
  
		   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
  
									  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah master lokasi berhasil
  
									  </b2></div>');	
									  
  
  
	}


	else{

		$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

		<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	


	}


	
	redirect('admin_area/addmasterlokasi', 'refresh');	 
  
  
	}// end post submit

	elseif($tombol == "baru"){


	redirect('admin_area/addmasterlokasi', 'refresh');

	}

	else{
	
		$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $tombol);

		$val= $arrsub[0];	
	 
		$submit = $arrsub[1];  	
		
		$this->form_validation->set_rules('departemen', 'Departemen', 'required');	
  
		$this->form_validation->set_rules('subdep', 'Sub Departemen', 'required');
	
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		
	  
		if($this->form_validation->run() != false){
	  
				 // 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;
				
	   
				 $masuk = array('masterlok_dep' =>$this->input->post('departemen'),
  
				 'masterlok_sub' =>$this->input->post('subdep'),

				 'masterlok_lokasi' =>$this->input->post('lokasi') 
			 

   );
	  
					
	  
			   $this->Admin_model->editintomasterlokasi($masuk,$val);
	  
			   $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	  
										  <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Edit master lokasi berhasil	  </b2></div>');	
										  
	  
	  
		}
	
	
		else{
	
			$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	
			<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	
	
	
		}
	


		redirect('admin_area/addmasterlokasi', 'refresh');	 



	}
  
  }



  function editmasterlokasi($rowno =0){

	

	$this->session->set_flashdata('message',''); 
  
	$submit_temp = $this->input->post('tombol');
 
	$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);
 
	$val= $arrsub[0];	
 
	$submit = $arrsub[1];   
 
	if(!empty($val) AND !empty($submit)){	
 
		$data["postrow"] = $this->Admin_model->get_userdata();
 
	 
 
  $rowperpage = 4 ;

   if($rowno != 0){
			   
	 $rowno = ($rowno-1) * $rowperpage;
			 
   }		

 
 $data['cek']  = "";
 
 
 $allcount =  $this->Admin_model->getmastercatrow()->num_rows();
 // Get records
 //$users_record = $this->Admin_model->getbuku($rowno,$rowperpage)->result();
 
 $mastercatrec= $this->Admin_model->getmasterlokasi($rowno,$rowperpage)->result();
 
 
		   // Pagination Configuration
		   $config['base_url'] = base_url().'admin_area/editmasterlokasi';
		
		   $config['use_page_numbers'] = TRUE;
		   
		   $config['total_rows'] = $allcount;
		   
		   $config['per_page'] = $rowperpage;
		   
		   $config['num_links'] = 2;
		   
			   $config['use_page_numbers'] = TRUE;
			   $config['reuse_query_string'] = TRUE;
				
			   $config['full_tag_open'] = '<div class="pagination">';
			   $config['full_tag_close'] = '</div>';
				
			   $config['first_link'] = 'First Page';
			   $config['first_tag_open'] = '<span class="btn btn-default firstlink">';
			   $config['first_tag_close'] = '</span>';
				
			   $config['last_link'] = 'Last Page';
			   $config['last_tag_open'] = '<span class="btn btn-default lastlink">';
			   $config['last_tag_close'] = '</span>';
				
			   $config['next_link'] = 'Next Page';
			   $config['next_tag_open'] = '<span class="btn btn-default nextlink">';
			   $config['next_tag_close'] = '</span>';
	
			   $config['prev_link'] = 'Prev Page';
			   $config['prev_tag_open'] = '<span class="btn btn-default prevlink">';
			   $config['prev_tag_close'] = '</span>';
	
			   $config['cur_tag_open'] = '<span class="btn btn-default curlink">';
			   $config['cur_tag_close'] = '</span>';
	
			   $config['num_tag_open'] = '<span class="btn btn-default numlink">';
			   $config['num_tag_close'] = '</span>';	 
			
		   
		   $this->pagination->initialize($config);
		
		   $data['pagination'] = $this->pagination->create_links();
		   
		   $data['main'] = $mastercatrec;
		   
		   $data['row'] = $rowno;
 
		   //end pagnation
	 
		   $val= $arrsub[0];	
 
		   $submit = $arrsub[1];   
		   
		   if($submit == "edi"){
 
			$data['main2'] = $this->Admin_model->getsinglemasterlokasi($val);
	
			$data['cek']  = "ok";

			//$data['facode'] = $this->Admin_model->getmastercatoformasteitem()->result();
	
			$this->load->view("addmasterlokasi",$data);
		   }
		   elseif($submit == "del"){
 
		 $this->Admin_model->hapusmasterlokasi($val);		 
 
		 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	   
		 <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus master lokasi berhasil </b2></div>');	
		 
		 redirect('admin_area/addmasterlokasi', 'refresh');	 
 
		   }
 
	 //echo $data;
	   
	}
  
 
 }



//end controller master lokasi





//Hapus ni Mbahhhh
function listpendaftaran(){
	
	
  $usersession = $this->session->userdata('user');   

	if($usersession == "admin"){		

 	$data['totalpendaftar'] = $this->Admin_model->get_totalpendaftar();

	$data['totalconfirm'] = $this->Admin_model->get_totalconfirm();	

	$data['totalnonconfirm'] = $this->Admin_model->get_totalnonconfirm();

	$data['sisaform'] = $this->Admin_model->get_totalformulir();

	$data['main'] = $this->Admin_model->get_maintransaction()->result();

	$data["postrow"] = $this->Admin_model->get_userdata();

	$data['totalnonconfirma'] = $this->Admin_model->get_totalconfirmadmin();
	

	$this->load->view('adminarea',$data);

	}

	else

	{

		redirect('login');

	}
	
}


function reportjadwal(){

	

	$data["postrow"] = $this->Admin_model->get_userdata();

	$data['main2']= $this->Admin_model->get_kelas()->result();

 	$submit = $this->input->post('konfirm');

	$val = $this->input->post('grade');

	

//	$val = explode("-",$val_temp);

	

	

	$data['val'] = $val ;

//	$data['val2'] = $val[1] ;

	

	

	if($submit == "konfirm" AND !empty($val)){

	$data['main'] = $this->Admin_model->get_reportjadwal2($val)->result();	

	//$data['jumlahsiswa'] = $this->Admin_model->get_totalreportfinance2($val)->row()->jumlah;

    //$data['bayar'] = $this->Admin_model->get_totalbayarfinance2($val)->row()->jumlah;

	}

	else{

//	$data['jumlahsiswa'] = $this->Admin_model->get_totalreportfinance()->row()->jumlah;

  //  $data['bayar'] = $this->Admin_model->get_totalbayarfinance()->row()->jumlah;	

	$data['main'] = $this->Admin_model->get_reportjadwal()->result();

	}

	$this->load->view('reportjadwal',$data);	

	

}





function reportall(){



	$data["postrow"] = $this->Admin_model->get_userdata();

	$data['main2']= $this->Admin_model->get_grade2()->result();





 	$submit = $this->input->post('konfirm');

	$val = $this->input->post('grade');

	

	$data['val'] = $val ;

	

	

	if($submit == "konfirm" AND !empty($val)){

	$data['main'] = $this->Admin_model->get_reportfinance2($val)->result();	

	$data['jumlahsiswa'] = $this->Admin_model->get_totalreportfinance2($val)->row()->jumlah;

    $data['bayar'] = $this->Admin_model->get_totalbayarfinance2($val)->row()->jumlah;

	}

	else{

	$data['jumlahsiswa'] = $this->Admin_model->get_totalreportfinance()->row()->jumlah;

    $data['bayar'] = $this->Admin_model->get_totalbayarfinance()->row()->jumlah;	

	$data['main'] = $this->Admin_model->get_reportfinance()->result();

	}

	$this->load->view('reportall',$data);

	

}











function check()

{


$formSubmit = $this->input->post('konfirm');

	

$checklist = $this->input->post('pick');

if($checklist != "" or !empty($checklist)){


if($formSubmit == 'konfirm' ){



	foreach($checklist as $key =>$value)

	{


	    $kodetemp = $this->Admin_model->get_formulirlast()->row()->main_noformulir;

		

		if($kodetemp == null OR $kodetemp == 0){$insetkodetemp = 1;}  

		

		else{$insetkodetemp = $kodetemp+1;}	

		

		$query = "UPDATE t_main SET main_noformulir = ".$insetkodetemp." WHERE main_id = ".$value." AND main_noformulir IS NULL";

		

		$this->db->query($query);

				

		$query = "UPDATE t_main SET main_confirmu = 2 WHERE main_id = ".$value."" ;

		

		$this->db->query($query);

		


	}

	

 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Berhasil konfirmasi admin</b2></div>');				

				  

redirect('admin_area/listpendaftaran');

	

}



elseif($formSubmit == 'unkonfirm' ){

	

    $checklist = $this->input->post('pick');

	

	foreach($checklist as $key =>$value)

	{

		

		$query = "UPDATE t_main SET main_confirmu = 0 WHERE main_confirmu = 2 AND main_id = ".$value."" ;

		

		$this->db->query($query);

		

			

	   // echo $query;echo "<br>";

	}

	

 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Berhasil Membatalkan konfirmasi admin</b2></div>');				

				  

redirect('admin_area/listpendaftaran');

	

}

elseif($formSubmit == 'delete' ){

 $checklist = $this->input->post('pick');

	foreach($checklist as $key =>$value)

	{

		

		$query = "DELETE FROM t_main WHERE main_id = ".$value."" ;


		$this->db->query($query);


	}





$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>  Data berhasil dihapus</b2></div>');	

redirect('admin_area/listpendaftaran');

	

	}

	

elseif($formSubmit == 'masuk'){



    $checklist = $this->input->post('pick');

	

	foreach($checklist as $key =>$value)

	{

		

		//$data['invoice']=$this->Admin_model->get_invoice($value);

	$data['invoice'] = $this->Private_model->get_invoicec($value)->row();

	

	$number =  $this->Private_model->get_invoicec($value)->row()->main_jumlahbyr;

	

	$idsekolah = $this->Private_model->get_invoicec($value)->row()->main_sekolah;



	//  $data["postrow"] = $this->Private_model->get_userdata();	



	



	 $data['bank'] = $this->Private_model->get_bank($idsekolah);		



	}



	

	$data['saythewords'] = $this->numbertowords->convert_number($number);



	$data["postrow"] = $this->Admin_model->get_userdata();	

					

	$this->load->view('invoice',$data);

}

	

elseif($formSubmit == 'jadwal'){

	

	

    $checklist = $this->input->post('pick');

	

	foreach($checklist as $key =>$value)

	{

		

		$data['jadwal']=$this->Admin_model->get_jadwalsingle($value);



	}



	$data["postrow"] = $this->Admin_model->get_userdata();					

	$this->load->view('jadwaltestsingle',$data);

}









elseif($formSubmit == 'formulir'){



    $checklist = $this->input->post('pick');

	

	foreach($checklist as $key =>$value)

	{

		

	$data['main'] = $this->Admin_model->get_maindetail($value);

	$data['main2'] = $this->Admin_model->get_tingkat()->result();

	$data["postrow"] = $this->Admin_model->get_userdata();

	$data['negara'] = $this->Private_model->get_country();	

	$data['agama'] = $this->Private_model->get_agama();  



    $data['negara'] = $this->Private_model->get_country();	  



	 $data['job'] = $this->Private_model->get_job();			



	}





	$data["postrow"] = $this->Admin_model->get_userdata();	

					

	$this->load->view('formulir',$data);

}

	
}
else{
	
	
$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Mohon piliih salah satu calon siswa terlebih dahulu</div>');				

				  

redirect('admin_area/listpendaftaran');	
	
	
}




	

}





function editdata(){

	

    $val = $this->uri->segment(3);

	

	$data['main'] = $this->Admin_model->get_maindetail($val);

	$data['main2'] = $this->Admin_model->get_tingkat()->result();

	$data["postrow"] = $this->Admin_model->get_userdata();

	$data['negara'] = $this->Private_model->get_country();	

	$data['agama'] = $this->Private_model->get_agama();  

    $data['negara'] = $this->Private_model->get_country();	  

	 $data['job'] = $this->Private_model->get_job();		

	  	

	

	$this->load->view('editdata1',$data);	

	

}



function editdataok(){

	

	

		$val  =  $this->input->post('mainid');	

	

	

		$sibling = $this->input->post('nasub0').",".$this->input->post('grsub0').";".



						$this->input->post('nasub1').",".$this->input->post('grsub1').";".



						$this->input->post('nasub2').",".$this->input->post('grsub2').";".



						$this->input->post('nasub3').",".$this->input->post('grsub3').";".



						$this->input->post('nasub4').",".$this->input->post('grsub4').";".



						$this->input->post('nasub5').",".$this->input->post('grsub5');	

	



							

				$masuk = array(


							'main_nama' => strtoupper($this->input->post('nama')),



							'main_kelas' => $this->input->post('grade'),



							'main_kewarganegaraan' => $this->input->post('kewarga'),						



							'main_jk' => $this->input->post('jk'),



							'main_temptlahir' => $this->input->post('tempatlahir'),						



							'main_tgllahir' => $this->input->post('tgllahir'),						



							'main_agama' => $this->input->post('agama'),

							

							'main_alamat' => $this->input->post('alamat'),



							'main_namaa' => $this->input->post('naayah'),



							'main_pekerjaana' => $this->input->post('pekayah'),



							'main_naperusa' => $this->input->post('napera'),



							'main_alperusa' => $this->input->post('alpera'),



							'main_notlprmha' => $this->input->post('notllpra'),



							'main_notlpkntra' => $this->input->post('notlkaa'),



							'main_nohpa' => $this->input->post('nohpa'),



							'main_emaila' => $this->input->post('emaila'),



							



							'main_namai' => $this->input->post('naibu'),



							'main_pekerjaani' => $this->input->post('pekerjaanibu'),



							'main_naperusi' => $this->input->post('naperibu'),



							'main_alperusi' => $this->input->post('alperibu'),



							'main_notlprmhi' => $this->input->post('notllpri'),



							'main_notlpkntri' => $this->input->post('notlkai'),



							'main_nohpi' => $this->input->post('nohpi'),



							'main_emaili' => $this->input->post('emaili'),																		





	



							'main_na_as_sekolah' => $this->input->post('nasekolahasal'),



							'main_al_as_sekolah' => $this->input->post('asekolahasal'), // cek



							'main_kelasskrg' => $this->input->post('kelasskrg'),



							'main_sibling' => $this->input->post('nasub1'),



				//			'main_user' => "",



				//			'main_kode' => $this->input->post('kodreg'),



							'main_sibling' => $sibling,



							



				//			'main_tgldaftar' => date('Y-m-d'),	



				//			'main_confirmu' => 0,



							



				//			'main_namapengirim' => $this->input->post('napeng')



							



							);  				

	

	

	



	//if(){

	//}

	$this->Admin_model->editdatamain($masuk,$val);

	

 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Berhasil Membatalkan konfirmasi admin</b2></div>');				

				  

redirect('admin_area/listpendaftaran');	

	

	



}







 function logout()

 {

  $data = $this->session->all_userdata();

  foreach($data as $row => $rows_value)

  {

   $this->session->unset_userdata($row);

  }

  redirect('login_admin');

 }

 

 

 

 

}



?>

<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Prc extends CI_Controller {

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

  $this->load->model('Prmodel'); 

  $this->load->helper('url');

 // $this->load->model('Private_model'); 

 //$this->load->library('numbertowords'); 

 $this->load->library('pagination');

 } 


 function index()

 {

	
	$this->session->set_flashdata('message', ' ');	

	$usersession = $this->session->userdata('user');	   

	$data["postrow"] = $this->Prmodel->get_userdata();

	$data["first"] ="yes";


	$date = date("y-m-d");
	$d = date_parse_from_format("Y-m-d", $date);	
	
	$month = sprintf('%02d', $d["month"]); 
	$year = $d["year"];


	$numbertemp = $this->Prmodel->getlastnumber()->row()->tr_head;

	$count2 = substr($numbertemp,15,5);	

    $kode2 = $count2+1;

	$kode3 = str_pad($kode2, 5, "0", STR_PAD_LEFT);


	$id =  "FA/PR/MKT/".$month.$year."/".$kode3;	

	$data['id'] = $id; // random id untuk mendapatkan ID first time load = yes

	$data["main"] = $this->Prmodel->getdataprttemp($id)->result();
  
	  if($usersession == "admin"){	
		  
		$this->load->view('addpr',$data);
  
	  }
  
	  else
  
	  {
  
		  redirect('login');
  
	  }
  

 }


function submitdata(){


$data["first"] ="no";

$tombol = $this->input->post('tombol');


if($tombol =="sementara"){

	$this->form_validation->set_rules('app2', 'App 2', 'required');

	$this->form_validation->set_rules('app1', 'App 1', 'required');
	
	$this->form_validation->set_rules('reqdate', 'Req Date', 'required');

	$this->form_validation->set_rules('reqno', 'Reqno', 'required');

	$this->form_validation->set_rules('ditem', 'Detail item', 'required');

	$this->form_validation->set_rules('qpr', 'Quantity PR', 'required');

	$this->form_validation->set_rules('unit', 'unit', 'required');		 
  
	$this->form_validation->set_rules('qstock', 'Quantity stock', 'required');	

	$this->form_validation->set_rules('dstock', 'Departement Stock', 'required');	

	$this->form_validation->set_rules('prmeth', 'Methode', 'required');

	$this->form_validation->set_rules('status', 'Status', 'required'); 

	$this->form_validation->set_rules('currency', 'Currency', 'required'); 

	$this->form_validation->set_rules('price', 'Price', 'required');	

	$this->form_validation->set_rules('supplier', 'Supplier', 'required');	


		if($this->form_validation->run() != false){
		
				// 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;

				$masuk = array('tr_head' =>$this->input->post('reqno'),
					
							'tr_kode' =>$this->input->post('idcode'),

							'tr_detail' =>$this->input->post('ditem'),

							'tr_qty' =>$this->input->post('qpr'),

							'tr_unit' =>$this->input->post('unit'),

							'tr_qtystock' =>$this->input->post('qstock'),

							'tr_deptstrock' =>$this->input->post('dstock'),

							'tr_jenis' =>$this->input->post('prmeth'),

							'tr_status' =>$this->input->post('status'), 

							'tr_curr' =>$this->input->post('currency'),

							'tr_price' =>$this->input->post('price'),

							'tr_supp' =>$this->input->post('supplier') ,
							
							'tr_image'	=> $this->input->post('img')						
						
			);

		

			$this->Prmodel->insertintoprt($masuk);

			$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

										<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah data berhasil

										</b2></div>');										


		}

		else{

		$this->session->set_flashdata('message','<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

		<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');	


		}


		$id = $this->input->post('reqno');

		$data["main"] = $this->Prmodel->getdataprttemp($id)->result();

		$usersession = $this->session->userdata('user');	   

		$data["postrow"] = $this->Prmodel->get_userdata();
	
		$data["first"] ="no";

		$id = $this->input->post('idkode'); // post id untuk mendapatkan ID first time load = no
	
		  
		  if($usersession == "admin"){		

			
			$this->load->view('addpr',$data);
			  
			//redirect('prc');
	  
		  }
	  
		  else
	  
		  {
	  
		   redirect('login');
	  
		  }	  

}

elseif($tombol =="postall"){
	
	$id = $this->input->post('reqno');	

	$ceknull = $this->Prmodel->cekdatatransemptyornot($id);

	$this->form_validation->set_rules('app2', 'App 2', 'required');

	$this->form_validation->set_rules('app1', 'App 1', 'required');
	
	$this->form_validation->set_rules('reqdate', 'Req Date', 'required');

	$this->form_validation->set_rules('reqno', 'Reqno', 'required');

	if($ceknull == 0 OR $this->form_validation->run() == false)
	
	{

		$this->session->set_flashdata('message','<div class="alert alert alert-warning"> 
		
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		
		<span aria-hidden="true">&times;</span> </button>

		<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Periksa inputan anda</div>');
		
		redirect('prc', 'refresh');	

	}

	else{		
				// 	  $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;

			$id = $this->input->post('reqno');		

			$this->Prmodel->insertmaintrans($id);

			$this->session->set_flashdata('message', ' <div class="alert alert-success">
			
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

			<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah data berhasil

			</b2></div>');			


		$usersession = $this->session->userdata('user');	   

	//	$data["postrow"] = $this->Prmodel->get_userdata();
	
	//	$data["first"] ="no";

	//	$id = $this->input->post('idkode'); // post id untuk mendapatkan ID first time load = no
	
		  
		  if($usersession == "admin"){	

			redirect('prc', 'refresh');	 

		  }
	  
		  else
	  
		  {
	  
		  redirect('login');
	  
		  }

		}

}

elseif($tombol =="newpr"){

	redirect('prc', 'refresh');	 

}
elseif($tombol =="delpr"){

	$checklist = $this->input->post('pick');

	foreach($checklist as $key =>$value)

	{

		$query = "DELETE FROM t_transactiontmp WHERE tr_id = ".$value."" ;		

		$this->db->query($query);
		

	}

$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Data berhasil dihapus </b2></div>');

$id = $this->input->post('reqno');		  

$data["main"] = $this->Prmodel->getdataprttemp($id)->result();

$this->load->view("addpr",$data);


} // end if delete


// re collect data at temp field


	
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

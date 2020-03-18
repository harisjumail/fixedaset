<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Masteradmin extends CI_Controller {	

 public function __construct()

 {

  parent::__construct();
  

  $mysession = $this->session->userdata('id');

  $usesession =  $this->session->userdata('user');  

  $this->load->library('form_validation');

  if(!$mysession)

  {

   redirect('login_admin'); 

  }

     $this->load->model('Admin_model'); 

 }



function loadindex(){

	

  $usersession = $this->session->userdata('user');	

   

	if($usersession == "admin"){

			 

    $this->session->set_flashdata('message', ''); 	 



    $data["postrow"] = $this->Admin_model->get_userdata();



    $data['main'] = $this->Admin_model->get_masterdata()->result();


	$data['main2'] = $this->Admin_model->get_materdatatingkat()->result();

	
 

    $data['open'] = $this->Admin_model->get_singleschool();

	

	$data['bank'] = $this->Admin_model->fetch_bank();

   	 

   $this->load->view('masteradmin',$data);

	}

	else{

	 redirect('login');	

	}	

	

}



 function index()

 {

	 

$this->loadindex();

  

 }

 

 

function listjadwal(){

	

 	$data["postrow"] = $this->Admin_model->get_userdata();		

	$data['main']= $this->Admin_model->get_jadwal()->result();

	$data['main2']= $this->Admin_model->get_grade()->result();

    $this->load->view('jadwal',$data);		



}







 

public function listbank(){

	

    $data["postrow"] = $this->Admin_model->get_userdata();		

	$data['main']= $this->Admin_model->get_bank()->result();



	

    $this->load->view('listbank',$data);	



}



	

public function hapusbank(){

	

	

 	$submit_temp = $this->input->post('delbank');



	$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

	

	$val= $arrsub[0];

	 

	$submit = $arrsub[1]; 	

	

	//$id = $this->input->post('idbank'); 

	



	if(!empty($val)){	

	$this->Admin_model->deletebank($val);

	

    $data["postrow"] = $this->Admin_model->get_userdata();		

	$data['main']= $this->Admin_model->get_bank()->result();

 	

	

  $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

									<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus bank berhasil dilakukan</b2></div>');	

									

     $this->load->view('listbank',$data);									

									

	}

	

}



function editjadwaltest(){

	

 	$submit_temp = $this->input->post('edit');



	$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

	

	$val= $arrsub[0];

	 

	$submit = $arrsub[1]; 

	

	if(!empty($val) AND !empty($submit)){	

	

	

	$jadwaltanggal = $this->input->post('tanggal');

	$jadwalwaktu = $this->input->post('waktu');

	$jadwaljumlah = $this->input->post('jumlah');

	$jadwalnama = $this->input->post('nama');

	$jadwalkelas = $this->input->post('grade');

	$jadwaltempattest = $this->input->post('tempattest');

	$jadwalmateritest = $this->input->post('materitest');

	$jadwaltanggal2 = $this->input->post('tanggal2');

	$jadwalwaktu2 = $this->input->post('waktu2');

	$jadwallastword1 = $this->input->post('lastword1');

	$jadwallastword2 = $this->input->post('lastword2');	

	

	

		$this->db->query("UPDATE t_jadwal SET jadwal_tanggal ='".$jadwaltanggal."',jadwal_waktu ='".$jadwalwaktu."',jadwal_jumlah=".$jadwaljumlah.",jadwal_nama='".$jadwalnama."',jadwal_kelas = ".$jadwalkelas.",

		jadwal_tempattest='".$jadwaltempattest."',

		jadwal_materitest='".$jadwalmateritest."', jadwal_tanggal2='".$jadwaltanggal2."',

		jadwal_waktu2='".$jadwalwaktu2."',jadwal_lastword1='".$jadwallastword1."',jadwal_lastword2='".$jadwallastword2."' WHERE jadwal_id=".$val." ");

	

	  $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Edit jadwal berhasil dilakukan</b2></div>');

	}

	

	$this->listjadwal();	

	

	

}





function check()

{

	



$formSubmit = $this->input->post('konfirm');

    $checklist = $this->input->post('pick');



if($formSubmit == 'konfirm' ){

	



	

	foreach($checklist as $key =>$value)

	{

		

		$query = "UPDATE t_register SET is_email_verified = 'yes' WHERE id = ".$value."" ;

		

		$this->db->query($query);

		

			

	   // echo $query;echo "<br>";

	}

	

 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>User berhasil diaktifkan</b2></div>');				



	

}



elseif($formSubmit == 'delete' ){

		

	foreach($checklist as $key =>$value)

	{



		$query = "DELETE FROM t_register WHERE id = ".$value."" ;

		

		$this->db->query($query);

		

	}





$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Data '.$value.' berhasil dihapus </b2></div>');	



	

	}



redirect('masteradmin/listuser');

	

}









public function hapusjadwal(){

	$id = $this->input->post('idjadwal'); 

	if(!empty($id)){	

	$this->Admin_model->deletejadwal($id);

	

  //  $data["postrow"] = $this->Admin_model->get_userdata();		

//	$data['main']= $this->Admin_model->get_jadwal()->result();

 	

	

  $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus jadwal berhasil dilakukan</b2></div>');	

									

	$this->listjadwal();										

									

	}

	

}





public function tambahlistbank(){



  $this->form_validation->set_rules('nbank', 'nama bank', 'required');	

  $this->form_validation->set_rules('nrek', 'nomor rekening', 'required');

  $this->form_validation->set_rules('prek', 'atas nama', 'required'); 

  

  if($this->form_validation->run() != false){

			 $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;



			$masuk = array('bank_nama' =>$this->input->post('nbank'),

						'bank_atasn' =>$this->input->post('prek'),

						'bank_norek' =>$this->input->post('nrek'),

						'bank_sekolah' => $idsekolah

						

 		 );

		 	 

		 $this->Admin_model->insertintobank($masuk);

			  $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

									<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah bank berhasil dilakukan

									</b2></div>');	

				 

	$this->listbank();	 

		 

		 

		 

  }

  





}



public function tambahlistjadwal(){

  $this->form_validation->set_rules('nama', 'nama jadwal', 'required');

  $this->form_validation->set_rules('grade', 'grade jadwal', 'required');	

  $this->form_validation->set_rules('waktu', 'waktu jadwal', 'required');

  $this->form_validation->set_rules('jumlah', 'jumlah anak', 'required'); 

  $this->form_validation->set_rules('tempattest', 'jumlah anak', 'required');

  $this->form_validation->set_rules('materitest', 'jumlah anak', 'required');

  if($this->form_validation->run() != false){
	  
	  		

			 $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;

			$masuk = array('jadwal_nama' =>$this->input->post('nama'),

						'jadwal_kelas' =>$this->input->post('grade'),

						'jadwal_tanggal' => $this->input->post('tanggal'),

						'jadwal_waktu' => $this->input->post('waktu'),						

						'jadwal_tanggal2' =>$this->input->post('tanggal2'),

						'jadwal_waktu2' => $this->input->post('waktu2'),						

						'jadwal_jumlah' =>$this->input->post('jumlah'),	

						'jadwal_tempattest' =>$this->input->post('tempattest'),

						'jadwal_materitest' =>$this->input->post('materitest'),

						'jadwal_lastword1' =>$this->input->post('lastword1'),

						'jadwal_lastword2' =>$this->input->post('lastword2'),						

						'jadwal_sekolah' => $idsekolah
			

 		 );

		 	 

		 $this->Admin_model->insertintojadwal($masuk);

			  $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Tambah jadwal berhasil dilakukan </b2></div>');	

				 

	$this->listjadwal();	 

		 

		 

		 

  }

  





}







	public function listuser()

	{



	$data['main'] = $this->Admin_model->get_userlist()->result();

	$data["postrow"] = $this->Admin_model->get_userdata();

	

	$this->load->view('listuser',$data);

	

		

		

		

	}

 

 

 function jadwaltest(){

	 

	 

	$submit =  $this->input->post('simpan');

//	$data['ok'] ="default";

	if($submit){

//		$data['ok'] = $submit;

		$data_temp =  $this->input->post('select'.$submit);

	    $sekolah_temp = explode("-",$data_temp);	

		//explode(" ","Geeks for Geeks");<br />

		//$data['ok'] = $data_temp;

		///$data['ok0'] =$sekolah_temp[0];

		//$data['ok1'] =$sekolah_temp[1];

		//$data['ok2'] =$sekolah_temp[2];

		

		$masuk = array('transjadwal_main' =>$sekolah_temp[0],

						'transjadwal_idjadwal' =>$sekolah_temp[2],

						'transjadwal_sekolah' =>$sekolah_temp[1]

						

 		 );		

		

		

         if ($this->Admin_model->insertintotransjadwal($masuk)){

			 

		$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

											<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Masukkan siswa berhasil</b2></div>');			 

			 

		 }

		 else{

			 

$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Masukkan siswa berhasil</b2></div>');				 

			 

		 }

		

		

	}

	 

	  

	 $data['main'] = $this->Admin_model->get_jadwal()->result();

	 

	 if($this->Admin_model->get_jadwal()->num_rows!=0){

		 $coutn = $this->Admin_model->get_jadwal()->row()->jadwal_id;	 

	 }

	 else{

		 $coutn  = 0;

	 }

//	return 0;

//}

	 

	 

	 $data["postrow"] = $this->Admin_model->get_userdata(); 

	 $data['totalsiswa'] = $this->Admin_model->get_totaljadwal($coutn);

	 $data['siswa'] = $this->Admin_model->get_listsiswa()->result();

	 

	$this->load->view('jadwaltest',$data); 

	 

 }

 

 function hapusdetailjadwal(){

	 

	 

	 $submit =  $this->input->post('hapus');



	if($submit){



		$data_temp =  $submit;



		

		if ($this->Admin_model->deletetransjadwal($data_temp)){

		$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Hapus Jadwal</b2></div>');		

		}

		

	 $this->jadwaltest();	

	 

	 

		 }

 }

 

 function detailjadwal(){

	 



	

	

	$val  =  $this->uri->segment(3);

	

	$data["postrow"] = $this->Admin_model->get_userdata();

	//   $data['main'] = $this->Admin_model->get_jadwal()->result();

	  // $data['main2'] = $this->Admin_model->get_transjadwal()->result();

	  

	$data['main2'] = $this->Admin_model->get_detailtransjadwal($val)->result();  

	$this->load->view('detailjadwal',$data); 	

	 



	 

 

	 

 }

 

 

 public function validate()

 {

	 

	 

	    $idsekolah = $this->Admin_model->get_userdata()->admin_sekolah;

	 

	//	$idsekolah = $this->Admin_model->get_totalpendaftar();



		$query = $this->db->query('SELECT grade_id FROM t_grade WHERE grade_sekolah = '.$idsekolah.'');

		

		$bukasekolah = $this->input->post('buka'); 

		

		$this->db->query("UPDATE t_sekolah SET sekolah_buka = ".$bukasekolah." WHERE sekolah_id = ".$idsekolah."");

		

		//$this->db->query("UPDATE t_tingkat SET ");

		

		

		$query2 = $this->db->query("SELECT tingkat_id FROM t_tingkat WHERE tingkat_sekolah = ".$idsekolah."");

		

		

		foreach ($query2->result() as $row2)

		{



		$buka = $this->input->post('tingkat_buka['.$row2->tingkat_id.']'); 

		

		$this->db->query("UPDATE t_tingkat SET tingkat_buka = ".$buka." WHERE tingkat_id = ".$row2->tingkat_id."");

		



		}

		

		

		foreach ($query->result() as $row)

		{

			

		$buka = $this->input->post('grade_buka['.$row->grade_id.']'); 		

		

		$harga = $this->input->post('grade_harga['.$row->grade_id.']'); 

		

		$stok = $this->input->post('grade_stok['.$row->grade_id.']');

		

		$bumur = $this->input->post('grade_umur['.$row->grade_id.']');

		

			

$this->db->query("UPDATE t_grade SET grade_harga=".$harga.",grade_buka=".$buka.",grade_stok =".$stok." ,grade_umur ='".$bumur."' WHERE grade_id = ".$row->grade_id." ");

	

	

		}

 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

									<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>

								Perubahan data berhasil dilakukan	

									</b2></div>'); 	 





  $data["postrow"] = $this->Admin_model->get_userdata();

  

  $data['open'] = $this->Admin_model->get_singleschool();

	 

  $data['main'] = $this->Admin_model->get_masterdata()->result();

  

	$data['main2'] = $this->Admin_model->get_materdatatingkat()->result();  

  

  

  $data['test'] = $bukasekolah;

  

  $data['bank'] = $this->Admin_model->fetch_bank();

  	 

  $this->load->view('masteradmin',$data);	 

	 

	 

 }

 

 





}



?>
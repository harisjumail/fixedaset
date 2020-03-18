<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Private_area extends CI_Controller {



 public function __construct()



 {



  parent::__construct();



  $mysession = $this->session->userdata('id');



  $usersession =  $this->session->userdata('user');


  if(!$mysession){

		   redirect('login');  



	  }


  $this->load->library('form_validation');



  $this->load->library('encrypt');

  $this->load->model('Private_model'); 


 }


 function index()



 {


  $usersession = $this->session->userdata('user');	

	if($usersession == "user"){	


	  $data['sekolah'] = $this->Private_model->fetch_sekolah();



	  $data["jutrans"] = $this->Private_model->get_hargaformulir();



	  $data["kodreg"] = $this->createcode();



	  $data["postrow"] = $this->Private_model->get_userdata();



	  $data['idsession'] = $this->session->userdata('id');



	  $data['usersession'] =  $this->session->userdata('user'); 



	  $data['agama'] = $this->Private_model->get_agama();  



      $data['negara'] = $this->Private_model->get_country();	  



	  $data['job'] = $this->Private_model->get_job();	  


	  $this->load->view('private',$data);


	}


	else{


		redirect('login');



	}



 }



 



 



 function coba2()



 {


//  echo $this->Private_model->get_coba(1);



  if($this->input->post('sekolah_id'))



  {

  echo $this->Private_model->get_coba($this->input->post('sekolah_id')); 


  }


 }





 	function coba()



	   {




   $query = $this->db->query("SELECT * FROM t_admin");


    if($query->num_rows() > 0){



        $userData = $query->result_array();



        $data['status'] = 'ok';



        $data['result'] = $userData;



    }else{



        $data['status'] = 'err';



        $data['result'] = '';



    }	



	   //returns data as JSON format



    echo json_encode($data);


 		}

 function fetch_tingkat()



 {



  if($this->input->post('sekolah_id'))



  {



   echo $this->Private_model->fetch_tingkat($this->input->post('sekolah_id'));




  }



 }







 function fetch_grade()



 {



  if($this->input->post('tingkat_id'))



  {



   echo $this->Private_model->fetch_grade($this->input->post('tingkat_id'));



  }



 }



 



 function fetch_bank()



 {



  if($this->input->post('grade_id'))



  {



   echo $this->Private_model->fetch_bank($this->input->post('grade_id'));



  }	 

 }


 function fetch_bank2()

 {


  if($this->input->post('sekolah_id'))


  {

   echo $this->Private_model->fetch_bank2($this->input->post('sekolah_id'));

  }	 

 } 


function validate()



{


  $this->load->model('private_model');

  $this->form_validation->set_rules('sekolah', 'sekolah', 'required');	



  $this->form_validation->set_rules('tingkat', 'tingkat', 'required');



  $this->form_validation->set_rules('nama', 'nama', 'required');	



  $this->form_validation->set_rules('grade', 'grade', 'required');



  $this->form_validation->set_rules('kewarga', 'kewarganegaraan', 'required');	



  $this->form_validation->set_rules('jk', 'jenis klamin', 'required');



  $this->form_validation->set_rules('tempatlahir', 'tempat lahir', 'required');



  $this->form_validation->set_rules('tgllahir', 'tgl lahir', 'required');	



  $this->form_validation->set_rules('agama', 'agama', 'required');  


   $this->form_validation->set_rules('naayah', 'nama ayah', 'required');



   $this->form_validation->set_rules('pekayah', 'pekerjaan ayah', 'required');



   $this->form_validation->set_rules('nohpa', 'nomor hp ayaha', 'required');  



  



   $this->form_validation->set_rules('naibu', 'nama ibu', 'required');



   $this->form_validation->set_rules('pekerjaanibu', 'pekerjaan ibu', 'required');



   $this->form_validation->set_rules('nohpi', 'no hp ibu', 'required');  



   



   $batas = date($this->input->post('batasumur'));



   //$umur = $this->input->post('tgllahir');



   



   $umur = date("Y-m-d", strtotime($this->input->post('tgllahir')));



  



  



   //$batas= "2014-08-23";



   // $umur ="2014-08-24";



   



   



  



  $data['sekolah'] = $this->Private_model->fetch_sekolah();



  $this->fetch_tingkat();$this->fetch_grade();$this->fetch_bank();



  $data["postrow"] = $this->Private_model->get_userdata();



  $data["jutrans"] = $this->Private_model->get_hargaformulir();











	if($this->form_validation->run() != false){ // cek form validasi jika validasi berhasil input to database



	



	  if(($batas < $umur) AND $batas !="0000-00-00" AND $batas !=""){ // cek jika umur tidak mencukupi maka total





	$data['sekolah'] = $this->input->post('sekolah'); 



	$data['tingkat'] = $this->input->post('tingkat'); 



	$data['nama'] = $this->input->post('nama'); 



	$data['grade'] = $this->input->post('grade'); 



	$data['kewarga'] = $this->input->post('kewarga'); 



	$data['jk'] = $this->input->post('jk'); 



	$data['tempatlahir'] = $this->input->post('tempatlahir'); 



	$data['tgllahir'] = $this->input->post('tgllahir'); 



	$data['agama'] = $this->input->post('agama'); 





 	$data['alamat'] = $this->input->post('alamat'); 



	$data['naayah'] = $this->input->post('naayah'); 



	$data['pekayah'] = $this->input->post('pekayah'); 



	$data['napera'] = $this->input->post('napera'); 



	$data['alpera'] = $this->input->post('alpera'); 



	$data['notllpra'] = $this->input->post('notllpra'); 



	$data['notlkaa'] = $this->input->post('notlkaa'); 



	$data['nohpa'] = $this->input->post('nohpa'); 



	$data['emaila'] = $this->input->post('emaila'); 



 



  	$data['naibu'] = $this->input->post('naibu'); 



	$data['pekerjaanibu'] = $this->input->post('pekerjaanibu'); 



	$data['naperibu'] = $this->input->post('naperibu'); 



	$data['alperibu'] = $this->input->post('alperibu'); 



	$data['notlpri'] = $this->input->post('notlpri'); 



	$data['notlkai'] = $this->input->post('notlkai'); 



	$data['nohpi'] = $this->input->post('nohpi'); 



	$data['emaili'] = $this->input->post('emaili'); 



	



	$data['nasekolahasal'] = $this->input->post('nasekolahasal');  



	$data['asekolahasal'] = $this->input->post('asekolahasal'); 



	$data['kelasskrg'] = $this->input->post('kelasskrg'); 



	$data['nasub1'] = $this->input->post('nasub1'); 



	$data['grsub1'] = $this->input->post('grsub1'); 



	$data['nasub2'] = $this->input->post('nasub2'); 



	$data['grsub2'] = $this->input->post('grsub2'); 



	$data['nasub3'] = $this->input->post('nasub3'); 



	$data['grsub3'] = $this->input->post('grsub3'); 		



	$data['nasub4'] = $this->input->post('nasub4'); 



	$data['grsub4'] = $this->input->post('grsub4'); 



	$data['nasub5'] = $this->input->post('nasub5'); 



	$data['grsub5'] = $this->input->post('grsub5'); 	



	$data['nasub6'] = $this->input->post('nasub6'); 



	$data['grsub6'] = $this->input->post('grsub6'); 



	$data['kodreg'] = $this->input->post('kodreg'); 	







	



	



	



 $this->session->set_flashdata('message', '<div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



					<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3>



					Putra / putri bapak ibu belum memenuhi kriteria minimum usia untuk dapat mengikuti kelas ini </div>');	



					



					



	$data['sekolah'] = $this->Private_model->fetch_sekolah();



  	$data["postrow"] = $this->Private_model->get_userdata();



  	$data["jutrans"] = $this->Private_model->get_hargaformulir();



    $data['job'] = $this->Private_model->get_job();



	$data['negara'] = $this->Private_model->get_country();



	$data['agama'] = $this->Private_model->get_agama(); 



	$data['bank'] = $this->Private_model->get_bank($this->uri->segment(5)); 



    $this->load->view('private',$data);			  



		  



		  



	  }



	  else{ // jika umur mencukupi terima



  		



						$mysession = $this->session->userdata('id');



						$sibling = $this->input->post('nasub1').",".$this->input->post('grsub1').";".



						$this->input->post('nasub2').",".$this->input->post('grsub2').";".



						$this->input->post('nasub3').",".$this->input->post('grsub3').";".



						$this->input->post('nasub4').",".$this->input->post('grsub4').";".



						$this->input->post('nasub5').",".$this->input->post('grsub5').";".



						$this->input->post('nasub6').",".$this->input->post('grsub6');



						$masuk = array(



							'main_idreg' => $mysession,



							'main_sekolah' => $this->input->post('sekolah'),



							'main_tingkat' => $this->input->post('tingkat'),



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



							



							'main_jumlahbyr' => $this->input->post('jutrans'),



	



							'main_na_as_sekolah' => $this->input->post('nasekolahasal'),



							'main_al_as_sekolah' => $this->input->post('asekolahasal'), // cek



							'main_kelasskrg' => $this->input->post('kelasskrg'),



							'main_sibling' => $this->input->post('nasub1'),



							'main_user' => "",



							'main_kode' => $this->input->post('kodreg'),



							'main_sibling' => $sibling,



							



							'main_tgldaftar' => date('Y-m-d'),	



							'main_confirmu' => 0,



							



							'main_namapengirim' => $this->input->post('napeng')



							



							);  				



		



						



							$this->private_model->insertinto($masuk);



						    $kodreg=$this->input->post('kodreg');

							

							redirect('private_area/sucess/'.$kodreg.'');



//	$this->Private_model->get_bank($this->uri->segment(5)); 						



							



	//	$y ="";			



	//for($i=0;$i<=2;$i++){



	//	$y.="ok <br>";



//	}				



					



							



//	$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



//	<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> Pendaftaran siswa atas nama : '.$this->input->post('nama').' berhasil dilakukan, untuk proses selanjutnya silahkan melakukan pembayaran pembelian formulir sebesar Rp '.$this->input->post('jutrans'). ' dengan cara transfer ke salah satu nomor rekening berikut ini :



//	'.$y.'



	



//	, Setelah anda melakukan pembayaran silahkan login lagi kehalaman ini dan masuk pada menu konfirmasi transfer dengan memasukkan kode pembayaran <b>: '.$this->input->post('kodereg').'



//						</b2></div>');







 	//$data['kode']=$this->input->post('kodreg');



	//	$data['orangtua']=$this->input->post('naibu');



	//	$data['namasekolah']=$this->Private_model->get_sekolah($this->input->post('sekolah'))->sekolah_nama;



	//	$data['bank']=$this->Private_model->get_bank($this->input->post('sekolah'));



	



	//	$data['status']="0";			



	//	$data['jumlahbayar']=$this->input->post('jutrans');	

		

		

	//	$data['invoice'] = $this->Private_model->get_invoicec($val);		



	//	$this->load->view('sucessb',$data);



	  }



	}



   else



   { // cek validasi jika validasi gagal tolak







   



	$data['sekolah'] = $this->input->post('sekolah'); 



	$data['tingkat'] = $this->input->post('tingkat'); 



	$data['nama'] = $this->input->post('nama'); 



	$data['grade'] = $this->input->post('grade'); 



	$data['kewarga'] = $this->input->post('kewarga'); 



	$data['jk'] = $this->input->post('jk'); 



	$data['tempatlahir'] = $this->input->post('tempatlahir'); 



	$data['tgllahir'] = $this->input->post('tgllahir'); 



	$data['agama'] = $this->input->post('agama'); 



 



 



 	$data['alamat'] = $this->input->post('alamat'); 



	$data['naayah'] = $this->input->post('naayah'); 



	$data['pekayah'] = $this->input->post('pekayah'); 



	$data['napera'] = $this->input->post('napera'); 



	$data['alpera'] = $this->input->post('alpera'); 



	$data['notllpra'] = $this->input->post('notllpra'); 



	$data['notlkaa'] = $this->input->post('notlkaa'); 



	$data['nohpa'] = $this->input->post('nohpa'); 



	$data['emaila'] = $this->input->post('emaila'); 



 



  	$data['naibu'] = $this->input->post('naibu'); 



	$data['pekerjaanibu'] = $this->input->post('pekerjaanibu'); 



	$data['naperibu'] = $this->input->post('naperibu'); 



	$data['alperibu'] = $this->input->post('alperibu'); 



	$data['notlpri'] = $this->input->post('notlpri'); 



	$data['notlkai'] = $this->input->post('notlkai'); 



	$data['nohpi'] = $this->input->post('nohpi'); 



	$data['emaili'] = $this->input->post('emaili'); 



	



	$data['nasekolahasal'] = $this->input->post('nasekolahasal');  



	$data['asekolahasal'] = $this->input->post('asekolahasal'); 



	$data['kelasskrg'] = $this->input->post('kelasskrg'); 



	$data['nasub1'] = $this->input->post('nasub1'); 



	$data['grsub1'] = $this->input->post('grsub1'); 



	$data['nasub2'] = $this->input->post('nasub2'); 



	$data['grsub2'] = $this->input->post('grsub2'); 



	$data['nasub3'] = $this->input->post('nasub3'); 



	$data['grsub3'] = $this->input->post('grsub3'); 		



	$data['nasub4'] = $this->input->post('nasub4'); 



	$data['grsub4'] = $this->input->post('grsub4'); 



	$data['nasub5'] = $this->input->post('nasub5'); 



	$data['grsub5'] = $this->input->post('grsub5'); 	



	$data['nasub6'] = $this->input->post('nasub6'); 



	$data['grsub6'] = $this->input->post('grsub6'); 



	$data['kodreg'] = $this->input->post('kodreg'); 	







	



	



	



 $this->session->set_flashdata('message', ' <div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



					<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Mohon periksa kembali field isian anda ada field yang kosong yang wajib anda isi</div>');	



	$data['sekolah'] = $this->Private_model->fetch_sekolah();



  	$data["postrow"] = $this->Private_model->get_userdata();



  	$data["jutrans"] = $this->Private_model->get_hargaformulir();



    $data['job'] = $this->Private_model->get_job();



	$data['negara'] = $this->Private_model->get_country();



	$data['agama'] = $this->Private_model->get_agama(); 



	$data['bank'] = $this->Private_model->get_bank($this->uri->segment(5)); 



    $this->load->view('private',$data);



	



 



   



   }



  



  



  



   



//}



 



}











function sucess(){



	$data["postrow"] = $this->Private_model->get_userdata();

 

$val = $this->uri->segment(3);



$data['invoice'] = $this->Private_model->get_invoicep2($val);







$sekolahid = $this->Private_model->get_invoicep2($val)->main_sekolah;



$data['bank'] = $this->Private_model->get_bank($sekolahid);







$this->load->view('sucessb',$data);

	



}







function praconfirm(){



	



	  $data["postrow"] = $this->Private_model->get_userdata();



	



	  $data['main'] = $this->Private_model->get_transaction_user()->result();



	



	  



	   



	//  $data['EMPLOYEES'] = null;



	  



	  // if($query){



	  







	  



	   //}		  



	  



	  



	//  $data["t_main"] = $this->Private_model->get_transaction_user();



		















	



      $this->load->view('praconfirm',$data);		



	



	



}







function geturl(){



	



	$data['oke']= $this->uri->segment(2);



	



	$this->load->view('url',$data);



	



}









function confirm2()

{

	

//	$submit =$this->input->post('konfirmasi');



 	$submit_temp = $this->input->post('konfirmasi');



	$arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

	

	$val= $arrsub[0];

	 

	$submit = $arrsub[1]; 

	

	$data["postrow"] = $this->Private_model->get_userdata();		

	

   if($submit == "konf"){	   

	



	 $data['bank'] = $this->Private_model->get_bank($this->uri->segment(5));	 



	 $data['myid'] = $this->uri->segment(3);	 	



	 $data['kodreg'] = $this->uri->segment(4);

	 

	 $data['mypay'] =  $this->Private_model->get_transaction_user()->row()->main_jumlahbyr;



	 $data['emails'] = $this->uri->segment(5);



	 $data['emailsekolah'] = $this->Private_model->get_emailsekolah($this->uri->segment(5));	 



	 $this->load->view('confirm',$data);  

	   

	   

   }	

	

	

}







function confirm(){

	



	  $mysession = $this->session->userdata('id');

	 



 	  $submit_temp = $this->input->post('konfirm');





	 $arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

	 $val= $arrsub[0]; 

	 $submit = $arrsub[1]; 



	 //	 $data['emailsekolah'] = "oke";





	$data["postrow"] = $this->Private_model->get_userdata();	

	



	if($submit == "kirim"){



	$data['invoice'] = $this->Private_model->get_invoicec($val)->row();

	

	$idsekolah = $this->Private_model->get_invoicec($val)->row()->main_sekolah;



	//  $data["postrow"] = $this->Private_model->get_userdata();	



	



	 $data['bank'] = $this->Private_model->get_bank($idsekolah);



	 



	// $data['myid'] = $this->uri->segment(3);	 	

 	// $data['myid'] =$val; // ambil main id

		

		

	// 

	// $data['mypay'] =  $this->Private_model->get_transaction_user()->row()->main_jumlahbyr;











	// $data['emailsekolah'] = $this->Private_model->get_emailsekolah($idsekolah);



	 



	 $this->load->view('confirm',$data);



	}



	



	elseif($submit == "lihat"){





     $data['invoice'] = $this->Private_model->get_invoicep($val); 



	$data['invoice'] = $this->Private_model->get_invoicec($val)->row();

	

	//dapatkan id sekolah

	

	$sekolahid = $this->Private_model->get_invoicec($val)->row()->main_sekolah;

	

    $data['bank'] = $this->Private_model->get_bank($sekolahid);	



	//	$data['kode'] = $this->Private_model->get_gransaction_user2($this->uri->segment(3))->main_kode;



		



	//	$data['orangtua'] = $this->Private_model->get_gransaction_user2($this->uri->segment(3))->main_namai;



		



	//	$idsekolah = $this->Private_model->get_gransaction_user2($this->uri->segment(3))->main_sekolah;



		



	//	$data['namasekolah'] = $this->Private_model->get_sekolah($idsekolah)->sekolah_nama;



		



	//	$data['bank'] = $this->Private_model->get_bank($idsekolah);



		



	//	$data['norek']="01992882";



	//	$data['atasnama']="Yayasan Pendidikan Pelita Harapan";



	//	$data['status'] = $this->Private_model->get_gransaction_user2($this->uri->segment(3))->main_confirmu;			

	//	$data['jumlahbayar']=  $this->Private_model->get_gransaction_user2($this->uri->segment(3))->main_jumlahbyr;	



	    $this->load->view('sucess',$data);



	}


}



function confirmoke(){


	 $mysession = $this->session->userdata('id');


 	  $submit_temp = $this->input->post('submit');





	 $arrsub = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $submit_temp);

	 

	  $val= $arrsub[0]; 

	 

	  $submit = $arrsub[1]; 	

	 

	$data["postrow"] = $this->Private_model->get_userdata();



	 $data['invoice'] = $this->Private_model->get_invoicec($val)->row();

	

	$namaanak = $this->Private_model->get_invoicec($val)->row()->main_nama;

	 

	$sekolahid = $this->Private_model->get_invoicec($val)->row()->main_sekolah;

	

    $data['bank'] = $this->Private_model->get_bank($sekolahid);	



	 $formsubmit = $this->input->post('kirim'); // fungsi untuk mengecek apakah tombol di confirm view di tekan 



	// $formsubmit2 = $this->input->post('lihat');



	 if($submit == "kirim"){



	// $data["kodereg"] = "ok";	



	 $this->session->set_flashdata('message', '');



	 $this->load->model('private_model');





  	 $this->form_validation->set_rules('catra', 'Cara transfer', 'required');	



 	 $this->form_validation->set_rules('trabank', 'Nama Bank', 'required');



 	 $this->form_validation->set_rules('napeng', 'Nama Pengirim', 'required');	



  	 $this->form_validation->set_rules('jutransc', 'Jumlah transfer', 'required');	



     $this->form_validation->set_rules('tglbayar', 'Tanggal bayar', 'required');		 



	 $mypay = $this->input->post('mypay');



	 $myid = $this->input->post('myid');



	 $kodreg = $this->input->post('kodreg');

	 

	 $jutransc = str_replace(".","",$this->input->post('jutransc'));

	 

 

  //else{



     if($this->form_validation->run() != false){ // jika tidak kosong maka

		 

		 

		 if ($jutransc < $mypay){ // jika pembayaran tidak sesuai(lebih kecil) dengan jumlah transfer

  

  

  

  

  	 $this->session->set_flashdata('message', ' <div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



								<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Jumlah pembayaran tidak sesuai dengan harga formulir </div>');	

  

  

					$data['catra'] = $this->input->post('catra'); 



					$data['trabank'] = $this->input->post('trabank'); 



					$data['napeng'] = $this->input->post('napeng'); 

					

					$data['mypay'] = $this->input->post('mypay');



					$data['jutransc'] = str_replace(".","",$this->input->post('jutransc')); 



					$data['kodreg'] = $this->input->post('kodreg');				



  				//    $this->load->view('confirm',$data);

  			 $this->load->view('confirm',$data);

  

  }

  

  else{

	  

					$catra = $this->input->post('catra'); 



					$trabank = $this->input->post('trabank'); 



					$napeng = $this->input->post('napeng'); 





					$emails = $this->input->post('emails');					

	



					$tglbayar = $this->input->post('tglbayar'); 



					$data['mypay'] = $this->input->post('mypay');

				



    $subject = "Konfirmasi pembayaran baru saja dilakukan";



    $message = "



    <p>Hi Admision, </p>



    <p>Pendaftar dengan kode ".$kodreg." baru saja melakukan pembayaran, mohon untuk memeriksa sistem untuk konfirmasi</p>







	<p> Kode : <b>".$kodreg." </b></p>

	

	<p> Nama Anak : <b>".$namaanak." </b></p>



	<p> Nama Pengirim : ".$napeng."</p>



	<p> Jumlah transfer : Rp.".$jutransc." </p>

	

	<P> Harga Formulir : Rp.".$mypay."</p>



	<p> Transfer ke bank : ".$trabank." </p>



	<p> Tanggal transfer : ".$tglbayar." </p>











<p>Terima Kasih</p>	



<p></p>



<p>Sistem pendaftaran online Sekolah Dian Harapan</p>



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







		



		$this->email->to($emails);



		$this->email->from('sdhregisteronline@gmail.com');



		$this->email->subject($subject);



		$this->email->message($message);	



	



	//    $this->email->send();



	



	



    $this->email->send();







				 // $updateData=array("main_confirmu"=>"0");



				  $this->db->query("UPDATE t_main SET main_confirmu=1,main_tglbayar='".$tglbayar."',main_jmlrealbyr=".$jutransc.",main_carabayar='".$catra."',main_namabank='".$trabank."' WHERE main_id = ".$myid." AND main_idreg=".$mysession."");



				 $this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Konfirmasi pendaftaran berhasil dilakukan, tim kami akan memeriksa pembayaran yang sudah anda transfer, silahkan login kembali ke halaman ini untuk melihat status invoice anda</b2></div>');			

	

	 $data['invoice'] = $this->Private_model->get_invoicec($val)->row();







           $this->load->view('sucess',$data);

				  

  					}

		



				}



				else{



				 $this->session->set_flashdata('message', ' <div class="alert alert alert-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



								<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Gagal</h3> Mohon periksa kembali field isian anda ada field yang kosong yang wajib anda isi</div>');	



								



								



					$data['catra'] = $this->input->post('catra'); 



					$data['trabank'] = $this->input->post('trabank'); 



					$data['napeng'] = $this->input->post('napeng'); 

					

					$data['mypay'] = $this->input->post('mypay');



					$data['jutransc'] = str_replace(".","",$this->input->post('jutransc')); 



					$data['kodreg'] = $this->input->post('kodreg');				



				 $this->load->view('confirm',$data);				



								



				}



		} // akhir if tombol ditekan



		



//	 }



				else{ //jika yang lain ditekan maka



					



	



			 $this->session->set_flashdata('message', '');			

			 $this->load->view('confirm',$data);

					



				}



	



	



}







function createcode(){



	



	



	$pass = rand(123456,999999);



	



	return $pass;



	



}







function createcode2() { 







    $chars = "abcdefghijkmnopqrstuvwxyz"; 



    srand((double)microtime()*1000000); 



    $i = 0; 



    $pass = '' ; 







    while ($i <= 6) { 



        $num = rand() % 33; 



        $tmp = substr($chars, $num, 1); 



        $pass = $pass . $tmp; 



        $i++; 



    } 







    return $pass; 







} 



 function logout()



 {



	$this->session->unset_userdata('id'); 



	$this->session->unset_userdata('user');



		 



	 



  //$data = $this->session->all_userdata();



  //foreach($data as $row => $rows_value)



 // {



   //$this->session->unset_userdata($row);



 // }



  redirect('login');



 }



}







?>
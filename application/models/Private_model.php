<?php 

class Private_model extends CI_Model{

function insertinto($data){

// Inserting in Table(students) of Database(college)

$this->db->insert('t_main', $data);

}



public function get_userdata(){

  $mysession = $this->session->userdata('id');	

  $this->load->library('session');	

  $this->db->select("id,name,email"); 

  $this->db->from('t_register');

  $this->db->where('id=',$mysession);

  $query = $this->db->get();



	 if($query->num_rows()>0) {	

	 $row= $query->row();	 	  

	 return $row;	 

	 } else {	 

	 return false;	 

	 }		 

  

	}



public function get_transaction_user(){

	  $mysession = $this->session->userdata('id');	



	  $this->load->library('session');



	  return $this->db->query('SELECT main_sekolah, main_id,main_nama,grade_nama,main_tgldaftar,main_jumlahbyr,main_jmlrealbyr,main_confirmu,main_kode FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id WHERE main_idreg = '.$mysession.' ORDER BY main_id DESC');



}





public function get_gransaction_user2($id){

	

		$query = $this->db->query('SELECT main_sekolah,main_namabank main_id,main_nama,grade_nama,main_tgldaftar,main_jumlahbyr,main_namai,main_confirmu,main_kode FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id WHERE main_id = '.$id.'');

		  

		  $row= $query->row();

	      return $row;

	

}



public function get_country(){

	

	$query = $this->db->query("SELECT * FROM t_negara ORDER BY id ASC");

	return $query->result();

	

}





public function get_job(){

	

	$query = $this->db->query("SELECT * FROM t_pekerjaan ORDER BY pekerjaan_id ASC");

	return $query->result();

	

}



public function get_agama(){

	

	$query = $this->db->query("SELECT * FROM t_agama ORDER BY agama_id ASC");

	return $query->result();

	

}







public function get_sekolah($idsekolah){

	

	$query = $this->db->query("SELECT * FROM t_sekolah WHERE sekolah_id = ".$idsekolah."");

	$row= $query->row();

	return $row;

	

	

	

}



function get_invoicep($val){

	

	$query = $this->db->query('SELECT main_id,main_sekolah,main_kode,main_nama,main_jumlahbyr,main_confirmu,main_alamat,main_namabank,sekolah_nama,sekolah_alamat FROM t_main JOIN t_sekolah ON t_main.main_sekolah = t_sekolah.sekolah_id WHERE main_id='.$val.'');

	

	

	 $row= $query->row();

	 return $row;

	

}



function get_invoicep2($val){

	

	$query = $this->db->query('SELECT main_id,main_sekolah,main_kode,main_nama,main_jumlahbyr,main_confirmu,main_alamat,main_namabank,sekolah_nama,sekolah_alamat,sekolah_bot FROM t_main JOIN t_sekolah ON t_main.main_sekolah = t_sekolah.sekolah_id WHERE main_kode='.$val.'');

	

	

	 $row= $query->row();

	 return $row;

	

}





function get_bank($sekolahid){

	

	if($sekolahid != ""){

	$query = $this->db->query("SELECT * FROM t_bank WHERE bank_sekolah = ".$sekolahid." ORDER BY bank_id ASC");

	return $query->result();	

	}

}





function get_emailsekolah($sekolahid){

	

	$query = $this->db->query("SELECT sekolah_email FROM t_sekolah WHERE sekolah_id = ".$sekolahid."");

	

	$row= $query->row();	 	  

	

	return $row->sekolah_email;	

	

}

	

public function get_hargaformulir(){

	

	$angka = 100000;

	return $angka;

	

}



 function fetch_sekolah()

 {

  $this->db->where('sekolah_buka', '1');	 

  $this->db->order_by("sekolah_nama", "ASC");

  $query = $this->db->get("t_sekolah");

  return $query->result();

 }

 

 public function get_invoicec($val){

	

	$query = $this->db->query('SELECT main_id,main_sekolah,main_kode,main_nama,main_jumlahbyr,main_confirmu,main_alamat,main_namabank,main_sekolah,sekolah_nama,sekolah_alamat,sekolah_email,sekolah_bot,grade_nama FROM t_main JOIN t_sekolah ON t_main.main_sekolah = t_sekolah.sekolah_id JOIN t_grade on grade_id = main_kelas WHERE main_id='.$val.'');

	

	return $query;

	

}





 function fetch_tingkat($sekolah_id)

 {

	 



  //$where = '(tingkat_sekolah='.$sekolah_id.' AND tingkat_buka = 1)';

  

  //$this->db->where($where);

  

  

  //$this->db->order_by('tingkat_nama', 'ASC');

  

  //$query = $this->db->get('t_tingkat');

  

  

  $query = $this->db->query("SELECT tingkat_id,tingkat_nama FROM t_tingkat WHERE tingkat_sekolah=".$sekolah_id." AND tingkat_buka =1");

  

  $output = "<option value=''>Pilih Tingkat</option>";

  

  foreach($query->result() as $row)

  {

	  

   $output .= "<option value=".$row->tingkat_id.">".$row->tingkat_nama."</option>";

   

  }

  



  $output2 = "<div>";

 

  $query = $this->db->query("SELECT bank_norek, bank_nama, bank_sekolah FROM t_bank WHERE bank_sekolah = ".$sekolah_id."");

 

 

  foreach($query->result() as $row)

  {

	  

   $output2 .= "

	        

                                      

                                            <div class='box bg-info text-center'>

                                                <h1 class='font-light text-white'>".$row->bank_norek."</h1>

                                                <h6 class='text-white'>".$row->bank_nama."</h6>

                                            </div>

                                        

                                    ";

   

  }

  

  



  

  

  

  		 $posts['tingkat'] = $output;

		 $posts['bankno2'] = $output2;

  

  

        $response['result'] = $posts;

        header('Content-Type: application/json');

		$jsonall = json_encode($response,false);

		

		

		return str_replace('\\','', $jsonall);  

  

  //return $output;

  

 }







function get_coba($val)

{

  $query = $this->db->query("SELECT * FROM t_tingkat WHERE tingkat_sekolah=".$val." AND tingkat_buka =1");

  $output = "<option value=''>Pilih Tingkat</option>";


  foreach($query->result() as $row)

  {

	  

   $output .= "<option value=".$row->tingkat_id.">".$row->tingkat_nama."</option>";

   

  }	

	



 

  $query = $this->db->query("SELECT bank_norek, bank_nama, bank_sekolah FROM t_bank WHERE bank_sekolah = ".$val."");

 

 $output2 ="";

  foreach($query->result() as $row)

  {




   

   $output2 .="<div class='col-md-6 col-lg-3 col-xlg-3'><div class='card'><div class='box bg-white text-center'><h3>".$row->bank_norek."</h3><h6>".$row->bank_nama."</h6></div></div></div>";


  }


 		 $posts['tingkat'] = $output;

		 $posts['bankno2'] = $output2;
			

			

        $response['result'] = $posts;

        header('Content-Type: application/json');

		$jsonall = json_encode($response,false);

		

		

		return str_replace('\\','', $jsonall);
	

	

}









 function fetch_grade($tingkat_id)

 {
 // $query = $this->db->query("SELECT grade_nama,grade_id,(grade_stok - terjual) as sisa FROM t_grade JOIN 
//(SELECT main_kelas,main_confirmu,COUNT(main_id) as terjual FROM t_main  WHERE main_confirmu <> '0' GROUP BY main_kelas)B ON t_grade.grade_id = B.main_kelas 
//WHERE AND grade_tingkat=".$tingkat_id." AND grade_buka = 1 AND ((grade_stok - terjual) > 0 OR (grade_stok - terjual) = null) ORDER BY grade_id ASC");

  $query = $this->db->query("SELECT *,(grade_stok - terjual) as sisa FROM t_grade LEFT JOIN 
(SELECT main_kelas,main_confirmu,COUNT(main_id) as terjual FROM t_main  WHERE main_confirmu <> '0' GROUP BY main_kelas)B ON t_grade.grade_id = B.main_kelas 
WHERE t_grade.grade_tingkat = ".$tingkat_id." AND ((grade_stok - terjual) IS NULL OR (grade_stok - terjual) > 0) AND grade_buka = 1  ORDER BY grade_id ASC");



  $output = '<option value="">Pilih Grade</option>';

  foreach($query->result() as $row)

  {

   $output .= '<option value="'.$row->grade_id.'">'.$row->grade_nama.'</option>';

  }

  return $output;

 }











function fetch_bank2($value){

	

	$query = $this->db->query("SELECT * FROM t_bank WHERE bank_sekolah =".$value." ");

	$ret = $query->row();

	//foreach($ret as $row){

	$output = ' <div class="col-md-6 col-lg-3 col-xlg-3">

                                        <div class="card">

                                        

                                      

                                            <div class="box bg-danger text-center" >

                                        

                                                  

                                            </div>

                                        </div>

                                    </div>';	

		

	//}

	

}



function fetch_bank($value)



	{

		

	$query = $this->db->query("SELECT grade_harga,grade_umur FROM t_grade WHERE grade_id =".$value."");

	$ret = $query->row();

	

	$output = '<label for="alamat ammount">Jumlah transfer</label>

				 <h6 class="card-subtitle">Amount : </h6>   

                 <label for="alamat ammount2"><h3>Rp'.number_format($ret->grade_harga,0,',','.').'</h3></label>

       	      <input type="hidden" class="form-control" id="jutrans" name="jutrans" value="'.$ret->grade_harga.'"> 



	<input type="hidden" name="batasumur" value="'.$ret->grade_umur.'">'; 

	

	

	

	//$output = $ret->bank_nama;

//	$output = '<option value="'.$ret->bank_id.'">'.$ret->bank_nama.'</option>';

			   

	return $output;		   		

		

	}

	

}


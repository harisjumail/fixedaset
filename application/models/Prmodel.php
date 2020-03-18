<?php 

class Prmodel extends CI_Model{



	function get_userdata(){

		$mysession = $this->session->userdata('id');	
	  
		$this->load->library('session');	
	  
		$this->db->select("admin_id,admin_username"); 
	   
		$this->db->from('t_admin');
	  
		$this->db->where('admin_id=',$mysession);
	  
		$query = $this->db->get();	  
	  
	  
		   if($query->num_rows()>0) {	
	  
		   $row= $query->row();	 	  
	  
		   return $row;	 
	  
		   } else {	 
	  
		   return false;	 
	  
		   }		 
	  
		
	  
		  }


function insertintoprt($data){

$this->db->insert('t_transactiontmp',$data);


}

function getdataprttemp($id){

	return $this->db->query("SELECT * FROM t_transactiontmp WHERE tr_head = '$id'");


	

}


function insertmaintrans($id){

return $this->db->query("INSERT INTO t_transaction(tr_head,tr_app1,tr_app2,tr_date,
tr_kode,tr_detail,tr_qty,tr_unit,tr_qtystock,tr_deptstrock,tr_jenis,tr_status,
tr_curr,tr_price,tr_supp,tr_image) 
SELECT tr_head,tr_app1,tr_app2,tr_date,
tr_kode,tr_detail,tr_qty,tr_unit,tr_qtystock,tr_deptstrock,tr_jenis,tr_status,
tr_curr,tr_price,tr_supp,tr_image FROM t_transactiontmp WHERE tr_head='".$id."'");
	


}

function getlastnumber(){

return $this->db->query("SELECT tr_head FROM t_transaction ORDER BY tr_id DESC LIMIT 1");


}

function cekdatatransemptyornot($id){

	return $this->db->query("SELECT tr_id FROM t_transactiontmp WHERE tr_head = '".$id."'")->num_rows();

}

function getmastercat($offset,$number){

	if ($offset == ""){$offset = 0;}	

	return $this->db->query("SELECT * FROM t_mastercat ORDER BY mastercat_id DESC LIMIT ".$offset.",".$number."");



}

function hapusmastercat($id){

	return $this->db->query("DELETE FROM t_mastercat WHERE mastercat_id = ".$id."");
}

function getmastercatrow(){

	return $this->db->query("SELECT mastercat_id FROM t_mastercat");


}


function insertintomastercat($data){


$this->db->insert('t_mastercat',$data);


}

function getsinglemastercat($id){

	 
	//$query = $this->db->select('*')->from('t_mastercat')->where('mastercat_id',$id);

	return $this->db->query('SELECT * FROM t_mastercat WHERE mastercat_id = '.$id.'')->row();

	//$this->db->from('t_mastercat');

	//$this->db->where('mastercat_id', $id); 

	//return $query->result();
	 
	//return $this->db->get();



}


function editmastercat($data,$id){


//$this->db->query("UPDATE t_main SET test WHERE main_id = ".$id."");

$this->db->where('master_id', $id);

$this->db->update('t_mastercat', $data);



}


function editintomastercat($data,$id){



$this->db->where('mastercat_id', $id);

$this->db->update('t_mastercat', $data);


}

//end model master category 

//start model master item


function getmasteritem($offset,$number){

	if ($offset == ""){$offset = 0;}	

	return $this->db->query("SELECT * FROM t_masteritem tms JOIN t_mastercat tm ON tms.mi_fa = tm.mastercat_id 
	
	ORDER BY mi_id DESC LIMIT ".$offset.",".$number."");



}

function hapusmasteritem($id){

	return $this->db->query("DELETE FROM t_masteritem WHERE mi_id = ".$id."");
}

function getmasteritemrow(){

	return $this->db->query("SELECT mi_id FROM t_masteritem");


}


function insertintomasteritem($data){


$this->db->insert('t_masteritem',$data);


}

function getsinglemasteritem($id){



	return $this->db->query('SELECT * FROM t_masteritem WHERE mi_id = '.$id.'')->row();



}


function editmasteritem($data,$id){



$this->db->where('master_id', $id);

$this->db->update('t_mastercat', $data);



}


function editintomasteritem($data,$id){



$this->db->where('mi_id', $id);

$this->db->update('t_masteritem', $data);


}

function getmastercatoformasteitem(){

	return $this->db->query("SELECT * FROM t_mastercat ORDER BY mastercat_id DESC ");


}
//end model master item


//start model master lokasi



function getmasterlokasi($offset,$number){

	if ($offset == ""){$offset = 0;}	

	return $this->db->query("SELECT * FROM t_masterlok	ORDER BY masterlok_id DESC LIMIT ".$offset.",".$number."");



}

function hapusmasterlokasi($id){

	return $this->db->query("DELETE FROM t_masterlok WHERE masterlok_id = ".$id."");
}

function getmasterlokasirow(){

	return $this->db->query("SELECT masterlok_id FROM t_masterlok");


}


function insertintomasterlokasi($data){


$this->db->insert('t_masterlok',$data);


}

function getsinglemasterlokasi($id){



	return $this->db->query('SELECT * FROM t_masteritem WHERE mi_id = '.$id.'')->row();



}


function editmasterlokasi($data,$id){



$this->db->where('master_id', $id);

$this->db->update('t_mastercat', $data);



}


function editintomasterlokasi($data,$id){



$this->db->where('masterlok_id', $id);

$this->db->update('t_masterlok', $data);


}

function getmastercatoformastelokasi(){

	return $this->db->query("SELECT * FROM t_masterlok ORDER BY masterlok_id DESC ");


}



//end model master lokasi



//hapus mpe sini mbah..


function insertintobank($data){

// Inserting in Table(students) of Database(college)

$this->db->insert('t_bank', $data);

}



function insertintojadwal($data){

// Inserting in Table(students) of Database(college)

$this->db->insert('t_jadwal', $data);

}





function editdatamain($data,$id){
	

	$this->db->query("UPDATE t_main SET test WHERE main_id = ".$id."");



	//$this->db->where('main_id', $id);

	

	//$this->db->update('t_main', $data);



}





function insertintotransjadwal($data){

	$this->db->insert('t_transjadwal', $data);

}



function deletebank($id){



$this->db->query("DELETE FROM t_bank WHERE bank_id =".$id."");

	

}





function deletejadwal($id){



$this->db->query("DELETE FROM t_jadwal WHERE jadwal_id =".$id."");

	

}





function deletetransjadwal($id){



$this->db->query("DELETE FROM t_transjadwal WHERE transjadwal_id =".$id."");	

	

}

	





 function fetch_bank()

 {

 

   $query = $this->db->query("SELECT * FROM t_bank WHERE bank_sekolah = ".$this->get_userdata()->admin_sekolah." ORDER BY 

   bank_id ASC");

   return $query->result();

 }

 

 

function get_masterdata(){

	

//return $this->db->query('SELECT * FROM t_grade WHERE grade_sekolah ='.$this->get_userdata()->admin_sekolah.'');	


return $this->db->query("SELECT * FROM t_grade LEFT JOIN 
(SELECT main_kelas,main_confirmu,COUNT(main_id) as terjual FROM t_main  WHERE main_confirmu <> '0' GROUP BY main_kelas)B ON t_grade.grade_id = B.main_kelas 
WHERE t_grade.grade_sekolah = ".$this->get_userdata()->admin_sekolah." ORDER BY grade_id ASC");
	

	

}





function get_materdatatingkat(){

	

return $this->db->query('SELECT * FROM t_tingkat WHERE tingkat_sekolah ='.$this->get_userdata()->admin_sekolah.' ORDER BY tingkat_id ASC');	

	

}





function get_singleschool(){

  $mytemp = $this->get_userdata()->admin_sekolah;

  $this->db->select("sekolah_buka"); 

  $this->db->from('t_sekolah');

  $this->db->where('sekolah_id=',$mytemp);

  $query = $this->db->get();



	 if($query->num_rows()>0) {	

	 $row= $query->row();	 	  

	 return $row;	 

	 } else {	 

	 return $row;	 

	 }		 

  

	

 // $query = $this->db->query('SELECT sekolah_buka FROM t_sekolah WHERE sekolah_id = '.$this->get_userdata()->admin_sekolah.'');

	//return $query->row();	

}





function get_maintransaction(){

//	  $mysession = $this->session->userdata('id');	



//	  $this->load->library('session');

	  

	  return $this->db->query('SELECT main_id,main_nama,main_kelas,main_namai,main_confirmu,main_carabayar,main_jumlahbyr,main_namabank,main_tglbayar,main_kode,main_jmlrealbyr,grade_nama FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' ORDER BY main_id DESC');



}





function get_reportfinance(){

	

	  return $this->db->query('SELECT * FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_confirmu = 2 ORDER BY main_id DESC');		



	

}





function get_reportjadwal(){

	

return $this->db->query('SELECT transjadwal_id,main_nama,main_kelas,jadwal_nama,jadwal_tanggal,jadwal_waktu,jadwal_materitest FROM t_transjadwal JOIN t_main on t_transjadwal.transjadwal_main = t_main.main_id JOIN t_jadwal ON t_transjadwal.transjadwal_idjadwal = t_jadwal.jadwal_id WHERE transjadwal_sekolah = '.$this->get_userdata()->admin_sekolah.' ORDER BY transjadwal_id DESC');		

	

	

}



function get_reportjadwal2($val){

	

return $this->db->query('SELECT transjadwal_id,main_nama,main_kelas,jadwal_nama,jadwal_tanggal,jadwal_waktu,jadwal_materitest FROM t_transjadwal JOIN t_main on t_transjadwal.transjadwal_main = t_main.main_id JOIN t_jadwal ON t_transjadwal.transjadwal_idjadwal = t_jadwal.jadwal_id WHERE transjadwal_sekolah = '.$this->get_userdata()->admin_sekolah.' AND main_kelas = '.$val.' ORDER BY transjadwal_id DESC');			

	

	

}





function get_kelas(){

	

	return $this->db->query('SELECT grade_id,grade_nama FROM t_grade WHERE grade_sekolah = '.$this->get_userdata()->admin_sekolah.'');

	

	

}



function get_totalreportfinance(){ //menghitung jumlah calon siswa

	

	return $this->db->query('SELECT COUNT(*) AS jumlah FROM t_main WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_confirmu = 2');



	

}



function get_totalreportfinance2($val){ //menghitung jumlah calon siswa filter

	

	return $this->db->query('SELECT COUNT(*) AS jumlah FROM t_main WHERE main_kelas='.$val.' AND main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_confirmu = 2');

	

}



function get_totalbayarfinance(){ //menghitung jumlah uang

	

		return $this->db->query('SELECT SUM(main_jmlrealbyr) AS jumlah FROM t_main WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_confirmu = 2');

}



function get_totalbayarfinance2($val){ //menghitung jumlah uang filter

	

		return $this->db->query('SELECT SUM(main_jmlrealbyr) AS jumlah FROM t_main WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.'  AND main_kelas='.$val.' AND t_main.main_confirmu = 2');

}



public function get_reportfinance2($val){

	

	  return $this->db->query('SELECT * FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_kelas = '.$val.' AND t_main.main_confirmu = 2 ORDER BY main_id DESC');	

	

	

}



function get_maindetail($val){

	

return $this->db->query('SELECT * FROM t_main JOIN t_grade ON t_main.main_kelas = t_grade.grade_id 

JOIN t_register ON t_main.main_idreg = t_register.id JOIN t_sekolah ON t_main.main_sekolah = t_sekolah.sekolah_id 

JOIN t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id 

WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_id = '.$val.'')->row();	

	

}



function get_tingkatform($val){

	

return $this->db->query('SELECT tingkat_nama FROM t_main JOIN t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.' AND t_main.main_id = '.$val.'');	

	

}





function get_formulirlast(){

	return $this->db->query("SELECT main_noformulir FROM t_main WHERE main_sekolah = ".$this->get_userdata()->admin_sekolah." 

	AND main_noformulir IS NOT NULL AND main_noformulir like '%".$val."%' ORDER BY main_noformulir DESC LIMIT 1");

	

}



function get_tingkat(){



return $this->db->query('SELECT grade_id,grade_nama FROM t_grade WHERE grade_sekolah = '.$this->get_userdata()->admin_sekolah.'');

 

}





public function get_totalpendaftar(){



$query = $this->db->query('SELECT main_id FROM t_main WHERE main_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();	

		

}





public function get_totalconfirma(){



$query = $this->db->query('SELECT main_id FROM t_main WHERE main_confirmu = 2 AND main_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();	

		

}



public function get_totalconfirm(){



$query = $this->db->query('SELECT main_id FROM t_main WHERE main_confirmu = 1 AND main_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();	

		

}





public function get_totalconfirmadmin(){

	

$query = $this->db->query('SELECT main_id FROM t_main WHERE main_confirmu = 2 AND main_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();		

	

}



public function get_totalnonconfirm(){



$query = $this->db->query('SELECT main_id FROM t_main WHERE main_confirmu = 0 AND main_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();	

		

}





public function get_totalformulir(){



$query = $this->db->query('SELECT sekolah_formulir FROM t_sekolah WHERE sekolah_id = '.$this->get_userdata()->admin_sekolah.'');

//$query = $this->db->query("YOUR QUERY");



$row = $query->row();



	if (isset($row))

	{

			return $row->sekolah_formulir;

	

	}	

		

}





public function get_userlist(){



return $this->db->query('SELECT * FROM t_register ORDER BY id ASC');		

	

	

}





public function get_listsiswa(){

return $this->db->query('SELECT main_id,main_sekolah,main_nama,main_kode FROM t_main LEFT JOIN t_transjadwal ON t_main.main_id = t_transjadwal.transjadwal_main WHERE  t_transjadwal.transjadwal_main IS NULL AND main_sekolah ='.$this->get_userdata()->admin_sekolah.' AND main_confirmu = 2' );	

	

}



public function get_invoice($val){

	$query = $this->db->query('SELECT main_id,main_sekolah,main_kode,main_nama,main_jumlahbyr,main_confirmu,main_alamat FROM t_main JOIN t_sekolah ON t_main.main_sekolah = t_sekolah.sekolah_id WHERE main_id='.$val.'');

	 $row= $query->row();

	 return $row;

	

}



public function get_bank(){



return $this->db->query('SELECT * FROM t_bank WHERE bank_sekolah = '.$this->get_userdata()->admin_sekolah.'');

	

	

}





public function get_jadwal(){



return $this->db->query('SELECT *,COUNT(t_transjadwal.transjadwal_idjadwal) AS countj FROM t_jadwal LEFT JOIN t_transjadwal ON t_jadwal.jadwal_id = t_transjadwal.transjadwal_idjadwal JOIN t_grade ON t_jadwal.jadwal_kelas = t_grade.grade_id WHERE jadwal_sekolah = '.$this->get_userdata()->admin_sekolah.' GROUP BY t_jadwal.jadwal_id ORDER BY t_jadwal.jadwal_id DESC');



//if($result->num_rows()==0){

//	return 0;

//}

//else{

//	return $result;

//}



	

}





public function get_jadwalsingle($val){



$query = $this->db->query('SELECT * FROM t_transjadwal JOIN t_main ON t_transjadwal.transjadwal_main = t_main.main_id JOIN t_grade ON t_main.main_kelas = t_grade.grade_id JOIN t_jadwal ON t_transjadwal.transjadwal_idjadwal = t_jadwal.jadwal_id WHERE transjadwal_main = '.$val.'');

 $row= $query->row();

 if($query->num_rows()>0) {	

 return $row;

 }



	

}



function get_detailtransjadwal($val){

	

	return $this->db->query('SELECT * FROM t_transjadwal JOIN t_main ON t_transjadwal.transjadwal_main = t_main.main_id JOIN t_grade ON t_main.main_kelas = t_grade.grade_id JOIN t_jadwal ON t_transjadwal.transjadwal_idjadwal = t_jadwal.jadwal_id WHERE transjadwal_idjadwal = '.$val.'');

	

	

	

}



function get_totaljadwal($id){

	

$query = $this->db->query('SELECT transjadwal_id FROM t_transjadwal WHERE transjadwal_idjadwal = '.$id.' AND transjadwal_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query->num_rows();	

	

}



function get_transjadwal(){

$query = $this->db->query('SELECT * FROM t_transjadwal JOIN t_main ON t_transjadwal.transjadwal_main = t_main.main_id JOIN t_jadwal ON t_transjadwal.transjadwal_idjadwal = t_jadwal.jadwal_id WHERE transjadwal_sekolah = '.$this->get_userdata()->admin_sekolah.'');

return $query;	

}



public function get_grade(){



$query =  $this->db->query('SELECT * FROM t_grade WHERE grade_buka = 1 AND grade_sekolah = '.$this->get_userdata()->admin_sekolah.'');	



return $query;

	

}



public function get_grade2(){



$query =  $this->db->query('SELECT * FROM t_grade WHERE grade_sekolah = '.$this->get_userdata()->admin_sekolah.'');	



return $query;

	

}



 function fetch_sekolah()

 {

  $this->db->order_by("sekolah_nama", "ASC");

  $query = $this->db->get("t_sekolah");

  return $query->result();

 }



 function fetch_tingkat($sekolah_id)

 {

  $this->db->where('tingkat_sekolah', $sekolah_id);

  $this->db->order_by('tingkat_nama', 'ASC');

  $query = $this->db->get('t_tingkat');

  $output = '<option value="">Pilih Tingkat</option>';

  foreach($query->result() as $row)

  {

   $output .= '<option value="'.$row->tingkat_id.'">'.$row->tingkat_nama.'</option>';

  }

  return $output;

 }






 function fetch_grade($tingkat_id)

 {

  $this->db->where('grade_tingkat', $tingkat_id);

  $this->db->order_by('grade_nama', 'ASC');

  $query = $this->db->get('t_grade');

  $output = '<option value="">Pilih Grade</option>';

  foreach($query->result() as $row)

  {

   $output .= '<option value="'.$row->grade_id.'">'.$row->grade_nama.'</option>';

  }

  return $output;

 }

	

	

}


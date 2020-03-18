<?php 

class Superadmin_model extends CI_Model{


public function get_sekolah(){
 $query = $this->db->query('SELECT * FROM t_sekolah ORDER BY sekolah_id ASC');	
 return $query;
	
}


public function get_totalpendaftar(){

$query = $this->db->query('SELECT main_id FROM t_main WHERE main_confirmu = 2');

return $query->num_rows();	

}

public function get_tingkat($val1,$val2,$val3){
	
if($val2 == "" and $val3 == ""){
	$query =$this->db->query("SELECT main_id FROM t_main join t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id WHERE main_confirmu = 2 AND t_tingkat.tingkat_nama = '".$val1."'" );
	
}
elseif($val2 == ""){
$query = $this->db->query("SELECT main_id FROM t_main join t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id WHERE main_confirmu = 2 AND t_tingkat.tingkat_nama = '".$val1."' AND t_main.main_sekolah = ".$val2."" );
}

else{
$query = $this->db->query("SELECT main_id FROM t_main join t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id WHERE main_confirmu = 2 AND t_tingkat.tingkat_nama = '".$val1."' AND t_main.main_sekolah = ".$val2." AND t_main.main_tgldaftar like '%".$val3."%'" );
}

return $query->num_rows();	
	
}


public function get_totalpendaftarbulan($val){

$query = $this->db->query('SELECT main_id FROM t_main WHERE MONTH(main_tgldaftar) = '.$val.' AND main_confirmu = 2');

return $query->num_rows();	

}

public function get_totalpendaftarminggu(){

$query = $this->db->query('SELECT *
FROM   t_main
WHERE  YEARWEEK(`main_tgldaftar`, 1) = YEARWEEK(CURDATE(), 1)');
return $query->num_rows();	

}

public function get_totalpendaftarpersekolah($val){
	
$query = $this->db->query('SELECT main_id FROM t_main WHERE main_sekolah ='.$val.' AND main_confirmu = 2');

return $query->num_rows();	
	
}



public function get_totalpendaftarbulanpersekolah($val,$val2){

$query = $this->db->query('SELECT main_id FROM t_main WHERE MONTH(main_tgldaftar) = '.$val.' AND main_confirmu = 2 AND 

main_sekolah = '.$val2.'');

return $query->num_rows();	

}


public function get_totalpendaftarharipersekolah($val,$val2,$val1){

$query = $this->db->query("SELECT main_id FROM t_main WHERE DAY(main_tgldaftar) = ".$val." AND main_tgldaftar LIKE '%".$val1."%' 

AND main_confirmu = 2 AND main_sekolah = ".$val2."");

return $query->num_rows();	

}



public function get_totalpendaftarbulanfilter($val,$val2){

$query = $this->db->query("SELECT main_id FROM t_main WHERE main_confirmu = 2 AND main_tgldaftar like '%".$val."%' AND main_sekolah = ".$val2."");

return $query->num_rows();	

}





function get_userdata(){

  $mysession = $this->session->userdata('id');	

  $this->load->library('session');	

  $this->db->select("superadmin_id,superadmin_username"); 

  $this->db->from('t_superadmin');

  $this->db->where('superadmin_id=',$mysession);

  $query = $this->db->get();


	 if($query->num_rows()>0) {	

	 $row= $query->row();	 	  

	 return $row;	 

	 } else {	 

	 return false;	 

	 }		 

  

	}

	

}


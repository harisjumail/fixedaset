<?php 

class Dashboardadmin_model extends CI_Model{



function get_userdata(){

  $mysession = $this->session->userdata('id');	

  $this->load->library('session');	

  $this->db->select("admin_id,admin_username,admin_sekolah"); 

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


public function get_sekolah(){
 $query = $this->db->query('SELECT * FROM t_sekolah ORDER BY sekolah_id ASC');	
 return $query;
	
}


public function get_totalpendaftar(){

$query = $this->db->query("SELECT main_id FROM t_main WHERE main_confirmu <> 0 AND main_sekolah = ".$this->get_userdata()->admin_sekolah." ");

return $query->num_rows();	

}

public function get_tingkat($val1){


$query = $this->db->query("SELECT main_id FROM t_main join t_tingkat ON t_main.main_tingkat = t_tingkat.tingkat_id WHERE main_confirmu <> 0 AND t_tingkat.tingkat_nama = '".$val1."' AND t_main.main_sekolah = ".$this->get_userdata()->admin_sekolah."" );



return $query->num_rows();	
	
}


public function get_totalpendaftarbulan($val){

$query = $this->db->query("SELECT main_id FROM t_main WHERE MONTH(main_tgldaftar) = ".$val." AND main_confirmu <> 0 AND main_sekolah = ".$this->get_userdata()->admin_sekolah." ");

return $query->num_rows();	

}

public function get_totalpendaftarminggu(){

$query = $this->db->query("SELECT *
FROM   t_main
WHERE  main_confirmu <> 0 AND main_sekolah = ".$this->get_userdata()->admin_sekolah." AND YEARWEEK(`main_tgldaftar`, 1) = YEARWEEK(CURDATE(), 1)");
return $query->num_rows();	

}





	

}


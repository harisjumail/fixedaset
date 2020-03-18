<?php
class Login_model extends CI_Model
{
 function can_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('t_register');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    if($row->is_email_verified == 'yes')
    {
    // $store_password = $this->encrypt->decode($row->password);
	
	$store_password = $row->password;
	
     if(md5($password) == $store_password)
     {
      $this->session->set_userdata('id', $row->id);
	  $this->session->set_userdata('user', "user");
     }
     else
     {
      return 'Password salah';
     }
    }
    else
    {
     return 'Verifikasi dahulu email anda';
    }
   }
  }
  else
  {
   return 'Email tidak ditemukan';
  }
 }
 
 function resetpwrd($email){
	 
	 
	 $query = $this->db->query("SELECT email from t_register WHERE email = '".$email."'");
	 
	 return $query->num_rows(); 
	 
 }
 
 function resetpwrd2($email,$pwd){
	 

	 
	 $this->db->query("UPDATE t_register SET password = '".$pwd."' WHERE email = '".$email."'");
	 
	// return $password;
	 
 }
 
 function createpwrd(){
	
	$pass = rand(123456,999999);
	
	return $pass;
	 
	 
 }
 

 
 
}

?>
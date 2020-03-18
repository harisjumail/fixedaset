<?php

class Login_superadmin_model extends CI_Model

{

 function can_login($user, $password)

 {

  $this->db->where('superadmin_username', $user);

  $query = $this->db->get('t_superadmin');

  if($query->num_rows() > 0)

  {

   foreach($query->result() as $row)

   {

		$store_password = $row->superadmin_password;

    // $store_password = $this->encrypt->decode($row->admin_password);

     if(md5($password) == $store_password)

     {

      $this->session->set_userdata('id', $row->superadmin_id);

      $this->session->set_userdata('user', 'admin');	  

     }

     else

     {

      return 'Password yang anda masukkan salah';

     }

    }



  }

  else

  {

   return 'Username tidak ditemukan';

  }

 }

}



?>
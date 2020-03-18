<?php

class Login_admin_model extends CI_Model

{

 function can_login($user, $password)

 {

  $this->db->where('admin_username', $user);

  $query = $this->db->get('t_admin');

  if($query->num_rows() > 0)

  {

   foreach($query->result() as $row)

   {

    if($row->admin_aktif == '1')

    {

		

		$store_password = $row->admin_password;

    // $store_password = $this->encrypt->decode($row->admin_password);

     if(md5($password) == $store_password)

     {

      $this->session->set_userdata('id', $row->admin_id);

      $this->session->set_userdata('user', 'admin');	  

     }

     else

     {

      return 'Password yang anda masukkan salah';

     }

    }

    else

    {

     return 'Verifikasi email anda terlebih dahulu';

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
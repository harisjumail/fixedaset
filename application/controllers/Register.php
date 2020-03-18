
<?php







defined('BASEPATH') OR exit('No direct script access allowed');







class Register extends CI_Controller {







 public function __construct()



 {



  parent::__construct();



  if($this->session->userdata('id'))



  {



   redirect('private_area');



  }



  $this->load->library('form_validation');



  $this->load->library('encrypt');



  $this->load->model('register_model');



 }







 function index()



 {



  $this->load->view('register1');



 }







 function validation()



 {



  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');



  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[t_register.email]');



  $this->form_validation->set_rules('user_password', 'Password', 'required');



  $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[user_password]');



  



  



  



//  $this->form_validation->set_rules();



  if($this->form_validation->run())



  {



   $verification_key = md5(rand());



  // $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));



  $encrypted_password = md5($this->input->post('user_password'));



  



   $data = array(



    'name'  => $this->input->post('user_name'),



    'email'  => $this->input->post('user_email'),



    'password' => $encrypted_password,



    'verification_key' => $verification_key



   );







  // if($id > 0)



   //{



    $subject = "Verifikasi Email dari Pendaftaran Sekolah Dian Harapan - Jangan Reply email ini";



    $message = "



    <p>Hi ".$this->input->post('user_name').",</p>



    <p>



Ini adalah email verifikasi dari sistem pendaftaran online Sekolah Dian Harapan, Untuk proses selanjutnya agar dapat login ke sistem, Pertama, Anda harus memverifikasi email anda dengan mengklik link berikut ini 

<br> 





<table width='100%' cellspacing='0' cellpadding='0'>

  <tr>

      <td>

          <table cellspacing='0' cellpadding='0'>

              <tr>

                  <td style='border-radius: 2px;' bgcolor='#ED2939'>

                      <a href='".base_url()."register/verify_email/".$verification_key."' target='_blank' style='padding: 8px 12px; border: 1px solid #ED2939;border-radius: 2px;font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;text-decoration: none;font-weight:bold;display: inline-block;'>

                          Verifikasi Email Sekarang           

                      </a>

                  </td>

              </tr>

          </table>

      </td>

  </tr>

</table>

</p>	



<p>Setelah itu, email Anda akan diverifikasi dan anda dapat masuk ke sistem untuk melanjutkan proses Registrasi Online</p>



<p>Terima Kasih</p>	



<p>Tim Admisi Sekolah Dian Harapan</p>

WA : 081328340046

email : admission@sdh.or.id

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



		



		$this->email->to($this->input->post('user_email'));



		$this->email->from('sdhregisteronline@gmail.com');



		$this->email->subject($subject);



		$this->email->message($message);	



	



	//    $this->email->send();



	



	



  //  if($this->email->send())



  //  {



		



	   $id = $this->register_model->insert($data);	



$this->session->set_flashdata('message', ' <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>Silahkan periksa email anda pada folder inbox ataupun spam </b2></div>');		



		



   



     $this->load->view('login1');



	// redirect('register');



  //  }



//	else{



	//	echo "gagal";



//	}



   }



//  }



  else



  {



   $this->index();



  }



 }



















 function verify_email()



 {



  if($this->uri->segment(3))



  {



   $verification_key = $this->uri->segment(3);



   if($this->register_model->verify_email($verification_key))



   {



      $data['message'] = '<h3 align="center">



		Email Anda telah berhasil diverifikasi, sekarang Anda dapat masuk dari <a href="'.base_url().'login"> sini </a></h3>';



   }



   else



   {



    $data['message'] = '<h3 align="center">Link salah</h3>';



   }



   $this->load->view('email_verification', $data);



  }



 }







}







?>
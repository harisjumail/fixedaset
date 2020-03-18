<!DOCTYPE html>
<html>
<head>
 <title>Registrasi Online Sekolah Dian Harapan</title>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center">Registrasi Online Sekolah Dian Harapan</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Pendaftaran pengguna</div>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>register/validation">
     <div class="form-group">
      <label>Masukkan nama</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Masukkan email</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Masukkan password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jika sudah mempunyai hak akses silahkan klik <a href="<?php echo base_url(); ?>login">Login</a> untuk melanjutkan pendaftaran calon siswa Seklah Dian Harapan
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

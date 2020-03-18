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
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>login/validation">
                    <div class="form-group">
                        <label>Masukkan Email Pengguna</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Masukan Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
  <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jika belum mempunyai hak akses silahkan klik <a href="<?php echo base_url(); ?>register">Register</a> untuk melanjutkan registrasi pengguna
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
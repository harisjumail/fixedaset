
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
    <title>Pendaftaran Online Sekolah Dian Harapan</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url();?>css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url();?>css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">In You Ever After</p>
        </div>
    </div>
    
   
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url();?>assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                
 
        <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                 
                        '.$this->session->flashdata("message").'
                   
                    ';
                }
                ?>                
                
                    <form class="form-horizontal form-material" id="loginform" action="<?php echo base_url(); ?>login/validation" method="post">
                        <h3 class="box-title m-b-20">Sign In</h3>
              <h6 class="card-subtitle">Registrasi Online Sekolah Dian Harapan</h6>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="user_email" type="text" required placeholder="Email" value="<?php echo set_value('user_email'); ?>" maxlength="50">
<span class="text-danger"><?php echo form_error('user_email'); ?></span>                                
                                
                                 </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="user_password" type="password" required 
                                placeholder="Kata sandi" value="<?php echo set_value('user_password'); ?>" maxlength="20" > 
<span class="text-danger"><?php echo form_error('user_password'); ?></span>                                
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> Ingatkan saya </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Lupa pwd?</a> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
<!-- <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
<a href="<?php //echo $google_login_url?>" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                               Belum punya account? <a href="<?php echo base_url(); ?>register" class="text-info m-l-5"><b>Daftar</b></a>
                            </div>
                        </div>
                    </form>
        <form class="form-horizontal" id="recoverform" action="<?php echo base_url();?>login/resetpwd" method="post">
                    
 			<?php
                if($this->session->flashdata('message'))
                {
                    echo '
                 
                        '.$this->session->flashdata("message").'
                   
                    ';
                }
                ?>                
                                    
                    
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Masukkan email anda, password baru akan dikirimkan ke email anda! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="email" type="text" required placeholder="Email"> 
 							<span class="text-danger"><?php echo form_error('email'); ?></span>                                
                                
                                </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>

</html>
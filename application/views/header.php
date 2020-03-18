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

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon1.png">

    <title>Fixed Aset Management information system</title>

    <!-- Bootstrap Core CSS -->

    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/plugins/wizard/steps.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">    

    
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="<?php echo base_url();?>assets/plugins/c3-master/c3.min.css" rel="stylesheet">

    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url();?>css/pages/dashboard2.css" rel="stylesheet">  

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropify/dist/css/dropify.min.css">


</head>



<body class="fix-header card-no-border fix-sidebar">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <div class="preloader">

        <div class="loader">

            <div class="loader__figure"></div>

            <p class="loader__label">Alabare</p>

        </div>

    </div>





   <!-- ============================================================== -->

        <!-- End Topbar header -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <aside class="left-sidebar">

            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">

                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">

                    <ul id="sidebarnav">

                        <li class="nav-devider"></li>

                   
                   
                <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url();?>admin_area" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>

                         

                        </li>                   
                   
                   

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-comment-outline"></i><span class="hide-menu">PR</span></a>


                          <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo base_url();?>prc">Input Data</a></li>

                            </ul>                          


                        </li>  

   

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-comment-check-outline"></i><span class="hide-menu">PO</span></a>


                          <ul aria-expanded="false" class="collapse">

                                <li><a href="#">Input Data</a></li>

                            </ul>                          


                        </li>      

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">FA</span></a>


                          <ul aria-expanded="false" class="collapse">

                                <li><a href="#">Input FA & BPB</a></li>
                                <li><a href="#">Retur FA</a></li>
                                <li><a href="#">Pengembalian FA</a></li>
                                <li><a href="#">Mutasi FA</a></li>

                            </ul>                          


                        </li>       
                     


                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Master</span></a>


                          <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo base_url();?>admin_area/addmastercat">Master Kategori</a></li>

                                <li><a href="<?php echo base_url();?>admin_area/addmasteritem">Master Asset</a></li>

                                <li><a href="<?php echo base_url();?>admin_area/addmasterlokasi">Master Lokasi</a></li>

                            </ul>                          


                        </li>            

   
                     

                          

 <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Laporan</span></a>

                            <ul aria-expanded="false" class="collapse">

                                <li><a href="#">Laporan A</a></li>

                                <li><a href="#">Laporan B</a></li>

                            </ul>

                        </li>

                        

                                     

                      

                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>



    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

        <header class="topbar">

            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <!-- ============================================================== -->

                <!-- Logo -->

                <!-- ============================================================== -->

                <div class="navbar-header">

                    <a class="navbar-brand" href="index.html">

<!--

                            <img src="<?php //echo base_url();?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                             Light Logo icon 

                            <img src="<?php //echo base_url();?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
-->
                        </b>

                        <!--End Logo icon -->

                        <!-- Logo text --><span>

                         <!-- dark Logo text 

                         <img src="<?php //echo base_url();?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                       Light Logo text 

                         <img src="<?php //echo base_url();?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>  </a>
                         -->
                </div>

                <!-- ============================================================== -->

                <!-- End Logo -->

                <!-- ============================================================== -->

                <div class="navbar-collapse">

                    <!-- ============================================================== -->

                    <!-- toggle and nav items -->

                    <!-- ============================================================== -->

                    <ul class="navbar-nav mr-auto">

                        <!-- This is  -->

                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                        <li class="nav-item hidden-sm-down"></li>

                    </ul>

                    <!-- ============================================================== -->

                    <!-- User profile and search -->

                    <!-- ============================================================== -->

                    <ul class="navbar-nav my-lg-0">

                        <!-- ============================================================== -->

                        <!-- Search -->

                        <!-- ============================================================== -->



                        <!-- ============================================================== -->

                        <!-- End Messages -->

                        <!-- ============================================================== -->



                        <!-- End mega menu -->

                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                        <!-- Language -->

                        <!-- ============================================================== -->

      

                        <!-- ============================================================== -->

                        <!-- Profile -->

                        <!-- ============================================================== -->

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>/assets/images/users/default.png" alt="user" class="profile-pic" /></a>

                            <div class="dropdown-menu dropdown-menu-right animated flipInY">

                                <ul class="dropdown-user">

                                    <li>

                                        <div class="dw-user-box">

          <div class="u-img"><img src="<?php echo base_url();?>/assets/images/users/default.png" alt="user"></div>

                                            <div class="u-text">

                                                <h4><?php  echo $postrow->admin_username; ?></h4>

                                                <p class="text-muted"><?php  //echo $postrow->admin_sekolah;?></p>

                                        </div>

                                    </li>

                                    <li><a href="<?php echo base_url();?>admin_area/logout"></i> Logout</a></li>

                                </ul>

                            </div>

                        </li>

                    </ul>

                </div>

            </nav>

        </header>

        

        



     <div class="page-wrapper">

   

            <div class="container-fluid">

       

           

        
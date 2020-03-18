      <?php $this->load->view('header'); ?>









                <!-- ============================================================== -->

                <!-- Bread crumb and right sidebar toggle -->

                <!-- ============================================================== -->

          

                <!-- ============================================================== -->

                <!-- End Bread crumb and right sidebar toggle -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                            

    		<?php

               // if($this->session->flashdata('message'))

                //{            

                  // echo $this->session->flashdata("message");

										

				//  }										

										                         

          ?> 

                            





 

 

       <div class="printableArea">

 

 



      



   

       <!-- start looping -->

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Kartu Test Masuk Sekolah Dian Harapan</h4> 

              <div class="text-right">



 <form name="form<?php echo $jadwal->transjadwal_id?>" method="post" action="<?php echo base_url()?>masteradmin/hapusdetailjadwal"> 

<!--

<button type="submit" name="hapus" value="<?php //echo $jadwal->transjadwal_id?>" class="btn btn-warning btn-circle" onclick="return confirm('Anda akan menghapus siswa ini dari jadwal?')"><i class="fa fa-times"></i> </button></button> -->



            </div>  

            <code>

                                <h5 >Tahun Ajaran 2020 / 2021</h5>

                                

                                

   									  <table class="table">

                                            <tr>

                                           	    <td width="20%">Nama</td>

                                                <td width="80%"><?php echo $jadwal->main_nama;?></td>

                                            </tr>

                                            <tr>

                                                <td>Kelas</td>

                                                <td><?php echo $jadwal->grade_nama;?> </td>

                                            </tr>

                                            <tr>

                                                <td>Tanggal Tes</td>

                                                <td>

	<?php echo date("d-m-Y",strtotime($jadwal->jadwal_tanggal));?> Pukul <?php echo $jadwal->jadwal_waktu;?>



    <?php if($jadwal->jadwal_tanggal2 == null OR empty($jadwal->jadwal_tanggal2) OR ($jadwal->jadwal_tanggal2 == "0000-00-00")){ echo "";} else{?>

    <?php echo " & ".date("d-m-Y",strtotime($jadwal->jadwal_tanggal2));}?> 

     <?php if($jadwal->jadwal_waktu2 == null OR empty($jadwal->jadwal_waktu2) OR ($jadwal->jadwal_waktu2 == "00:00:00")){ echo "";} else{?>

     <?php echo "Pukul ".$jadwal->jadwal_waktu2;}?>

    </td>

                                            </tr>

                                            <tr>

                                                <td>Tempat Tes</td>

                                                <td><?php echo $jadwal->jadwal_tempattest;?></td>

                                            </tr>   

                                            <tr>     

                                                <td>Materi Tes</td>

                                                <td><?php echo $jadwal->jadwal_materitest;?>

                                                </td>

    											

                                            </tr>   

     										  <tr>     

   									   <td><?php echo $jadwal->jadwal_lastword1;?></td>

                                       <td><?php echo $jadwal->jadwal_lastword2;?></td>

                                       		  </tr>  

                                   

                                   </table>                                         

                     </code>           

                            </form>    

                            </div>

                        </div>

                    </div>

         

 



                     

  </div>

                    

              <div class="text-right">



<button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>



            </div>          

 

 











                               



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

		</div>

       

            





   

            

  <?php $this->load->view('footer'); ?>

  

   

 

 

  <script src="<?php echo base_url();?>js/jquery.PrintArea.js" type="text/JavaScript"></script>   



         



   <script>



    $(document).ready(function() {



        $("#print").click(function() {



            var mode = 'iframe'; //popup



            var close = mode == "popup";



            var options = {



                mode: mode,



                popClose: close



            };



            $("div.printableArea").printArea(options);



        });



    });



    </script>


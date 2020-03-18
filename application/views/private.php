      <?php $this->load->view('header1'); ?>



      



          <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <h4 class="card-title"><b><div align="center" style="color:#09C"><br />Selamat datang di sistem registrasi online Sekolah Dian Harapan</div></b></h4>



                                <h6 class="card-subtitle">



                                <!-- Selamat datang di sistem registrasi online Sekolah Dian Harapan. -->



                                



                                </h6>



 



                    



                        </div>



                    </div>



                </div>



                </div> <!-- div row-->   







      



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 



                <div class="row" id="validation">



                    <div class="col-12">



                        <div class="card wizard-content">



                            <div class="card-body">



                        



                                



        <?php



                if($this->session->flashdata('message'))



                {            

                   echo $this->session->flashdata("message");


				  }										

          ?>                       

              



<form action="<?php echo base_url()?>private_area/validate" class="validation-wizard wizard-circle" id="addreg" name="addreg" method="post">



                                    <!-- Step 1 -->



                                    <h6>Data Calon Siswa</h6>



                                    <section>


                                    <div class = "row">


      <div class="col-md-6">



                    <div class="form-group">



      				<label for="sekolah">Sekolah yang dituju <span class="text-danger">*</span></label>



      



					<h6 class="card-subtitle">The intended school : </h6>      



					<select class="custom-select form-control required" id="sekolah" name="sekolah">







 					 <option value="">Pilih Sekolah</option>



						<?php foreach($sekolah as $row){?>



                            



                       <option value="<?php echo $row->sekolah_id; ?>"



                        



					   <?php //if(set_value('sekolah') == $row->sekolah_id) { echo "selected";} ?>

                       >



                       



					   <?php echo $row->sekolah_nama; ?> </option>



                       



                         <?php }  ?>



                      </select>                                                    



                       <span class="text-danger"><?php echo form_error('sekolah'); ?></span>           



                                                    </div>



                                                    



                                            </div>       



 



      <div class="col-md-6">



                    <div class="form-group">



      				<label for="Kelas">Tingkatan yang tersedia <span class="text-danger">*</span> </label>



      



					<h6 class="card-subtitle">Tingkat : </h6>      



      



      



   						<select class="custom-select form-control required" id="tingkat" name="tingkat">



                                   <option value="">Pilih Tingkatan</option>



                                                            



                                     </select>    



                                     



 				 <span class="text-danger"><?php echo form_error('sekolah'); ?></span>                                                                                      



                                                    



                                                    </div>



                                            </div>                                



                                 



                                    </div>



                                    



                                    



                                        <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



   <label for="Nama"> Nama calon siswa<code>(Sesuai Akte Lahir)</code> <span class="text-danger">*</span></label>



   



   <h6 class="card-subtitle">Name <code>(As on Birth Certificate)</code>: </h6>



   



    <input type="text" class="form-control required" id="nama" name="nama" value="<?php echo set_value('nama');?>">



    



 <span class="text-danger"><?php echo form_error('nama'); ?></span>          



   	



     </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



      <label for="Kelas">Kelas yang dimasuki <span class="text-danger">*</span></label>



      



<h6 class="card-subtitle">Grade : </h6>      



      



      



   							<select class="custom-select form-control required" id="grade" name="grade">



                                   <option value="">Pilih kelas</option>



                               



                                     </select>    



                                



                                     



                                     



<!-- 



   							<select class="custom-select form-control" id="bankno" name="bankno">



                                   <option value="">Pilih kelas</option>



                               



                                     </select>            -->                           



                                                                                     



    <span class="text-danger"><?php echo form_error('level'); ?></span>                                                  



                                                    </div>



                                            </div>



                                        </div>



                                        <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



  <label for="kewarga">Kewarganegaraan  <span class="text-danger">*</span></label>



  



  <h6 class="card-subtitle">Nationality : </h6>



   



    <select class="custom-select form-control required" id="kewarga" name="kewarga">



    <option value="Indonesia">Indonesia</option>



    <?php foreach($negara as $rownegara){?>



                                                        



    <option value="<?php echo $rownegara->country_name;?>" <?php if($rownegara->country_name == set_value('kewarga')){echo "selected";}?>><?php echo $rownegara->country_name;?></option>



                                                        



	<?php }?>                                                        



                                                    </select>



       <span class="text-danger"><?php echo form_error('kewarga'); ?></span>  



    </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



  <label for="jeniskelamin">Jenis kelamin <span class="text-danger">*</span></label>



  



  <h6 class="card-subtitle">Sex : </h6>



  















<div class="form-check">



  <input type="radio" class="form-check-input" id="Unchecked" name="jk" value="m" <?php if(set_value('jk')=='m'){echo "checked";}?>>



  <label class="form-check-label" for="Unchecked">Laki-Laki</label>



</div>







<!-- Material checked -->



<div class="form-check">



  <input type="radio" class="form-check-input" id="Checked" name="jk" value="f" <?php if(set_value('jk')=='f'){echo "checked";}?>>



  <label class="form-check-label" for="Checked">Perempuan</label>



</div>







    <span class="text-danger"><?php echo form_error('jk'); ?></span>  



        



 </div>



   



   



   



                                            </div>



                                        </div>



                                        <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                



                                                



   <label for="tempatlahir">Tempat lahir <span class="text-danger">*</span></label>



   



   <h6 class="card-subtitle">Place of Birth: </h6>



   



<input type="text" class="form-control required" id="tempatlahir" name="tempatlahir" value="<?php echo set_value('tempatlahir');?>"><span class="text-danger"><?php echo form_error('tempatlahir'); ?></span>                                                  



                                                



                                                



                                                </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



	<label for="tgllahir">Tanggal Lahir <span class="text-danger">*</span></label>



    



    <h6 class="card-subtitle">Date of Birth : </h6>



    



    



     <input type="date" class="form-control required" id="tgllahir" name="tgllahir" value="<?php echo set_value('tgllahir');?>"> 



     



         <span class="text-danger"><?php echo form_error('tgllahir'); ?></span>  



                                                 </div>



                                            </div>



                                        </div>



                                        



                                        



       <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



                                            	



                                                



<label for="agama"> Agama <span class="text-danger">*</span></label>







<h6 class="card-subtitle">Religion : </h6>







 <select class="custom-select form-control required" id="agama" name="agama">



                                                        <option value="">Pilih agama</option>



                                                        



  <?php foreach($agama as $rowa){?>                                                         



                                                         



            <option value="<?php echo $rowa->agama_keterangan;?>"



			<?php if (set_value('agama')== $rowa->agama_keterangan){echo "selected";}?>><?php echo $rowa->agama_keterangan;?></option>



<?php } ?>                                                        



                                                    </select>



                                                



       <span class="text-danger"><?php echo form_error('agama'); ?></span>                                               



                                                



                                                </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



  <label for="shortDescription1">Alamat :</label>



  <h6 class="card-subtitle">Home Address : </h6>



  

<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat');?>">



<!-- <textarea name="alamat" rows="6" class="form-control"><?php //echo set_value('alamat');?></textarea> -->



                                                 </div>



                                            </div>



                                        </div>                                        



                                        



                                        



                                    </section>



                                    <!-- Step 2 -->



                                    <h6>Data Orang tua</h6>



                                    <section>



                                        <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label for="jobTitle2">Nama Ayah : <span class="text-danger">*</span></label>



                                                    



<h6 class="card-subtitle">Father's Name : </h6>                                                    



                                                    



                 <input type="text" class="form-control required" id="naayah" name="naayah" value="<?php echo set_value('naayah');?>">



                  <span class="text-danger"><?php echo form_error('naayah'); ?></span>  



                                                </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label for="pekerjaan">Pekerjaan Ayah : <span class="text-danger">*</span></label>



<h6 class="card-subtitle">Father's Occupation : </h6>                                                    



                                                    



                                                    



  <select class="custom-select form-control required" id="pekayah" name="pekayah">



                                                         <option value="">Pilih pekerjaan</option>



                                                         



    <?php foreach($job as $rowj){?>                                                         



                                                         



            <option value="<?php echo $rowj->pekerjaan_keterangan;?>"



			<?php if (set_value('pekayah')== $rowj->pekerjaan_keterangan){echo "selected";}?>><?php echo $rowj->pekerjaan_keterangan;?></option>



<?php } ?>



                                                    </select>



          <span class="text-danger"><?php echo form_error('pekayah'); ?></span> 



         



         </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



                 <label for="nama perusahaan">Nama Perusahaan Ayah :</label>



                 



<h6 class="card-subtitle">Company Name : </h6>                 



                 



                <input type="text" class="form-control" id="napera" name="napera" value="<?php echo set_value('napera');?>">



                                                </div>



                                            </div>



                                            



                                            



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">Alamat Perusahaan Ayah:</label>



                 



<h6 class="card-subtitle">Office address : </h6>                 



                 



                 



                <input type="text" class="form-control" id="alpera" name="alpera" value="<?php echo set_value('alpera');?>">



                                                </div>



                                            </div>     



                                            



                                            



                      



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No Telpon Rumah Ayah:</label>



                 



<h6 class="card-subtitle">House Phone Number : </h6>                 



                 



                <input type="text" class="form-control" id="notllpra" name="notllpra" value="<?php echo set_value('notllpra');?>">



                                                </div>



                                            </div>                                                                                    



             



                                   



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No Telpon Kantor Ayah:</label>



                 



<h6 class="card-subtitle">Office Phone Number : </h6>                 



                 



                <input type="text" class="form-control" id="notlkaa" name="notlkaa" value="<?php echo set_value('notlkaa');?>">



                                                </div>



                                            </div> 



                      



                      



                      



                      



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No HP Ayah : <span class="text-danger">*</span></label>



                 



<h6 class="card-subtitle">HP Number : </h6>                 



                 



                <input type="text" class="form-control required" id="nohpa" name="nohpa" value="<?php echo set_value('nohpa');?>">



        <span class="text-danger"><?php echo form_error('nohpa'); ?></span>         



                



                                                </div>



                                            </div>                       



                                            



                          



                          



				 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">Alamat Email Ayah:</label>



                 



                 <h6 class="card-subtitle">Email : </h6>



                 



                <input type="text" class="form-control" id="emaila" name="emaila" value="<?php echo set_value('emaila');?>">



                                                </div>



                                            </div>                           



                          



                                 



       



      



              <div class="col-md-6">



                                                <div class="form-group">



                                                    <label for="jobTitle2">Nama Ibu : <span class="text-danger">*</span></label>



                                                    



<h6 class="card-subtitle">Mother's Name: </h6>                                                    



                                                    



                                                    



                 <input type="text" class="form-control required" id="naibu" name="naibu" value="<?php echo set_value('naibu');?>">



                 <span class="text-danger"><?php echo form_error('naibu'); ?></span> 



                                                </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label for="pekerjaan">Pekerjaan Ibu : <span class="text-danger">*</span></label>



                                                    



<h6 class="card-subtitle">Mother's Occupation : </h6>                                                    



                                                    



                                                    



  <select class="custom-select form-control required" id="pekerjaanibu" name="pekerjaanibu">



                                                        <option value="">Pilih pekerjaan</option>















   <?php foreach($job as $rowj){?>                                                         



                                                         



            <option value="<?php echo $rowj->pekerjaan_keterangan;?>"



			<?php if (set_value('pekerjaanibu')== $rowj->pekerjaan_keterangan){echo "selected";}?>><?php echo $rowj->pekerjaan_keterangan;?></option>



<?php } ?>











                                                    </select>



         <span class="text-danger"><?php echo form_error('pekerjaanibu'); ?></span> 



         



         </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



                 <label for="nama perusahaan">Nama Perusahaan Ibu :</label>



                 



<h6 class="card-subtitle">Company Name : </h6>                 



                 



                <input type="text" class="form-control" id="naperibu" name="naperibu" value="<?php echo set_value('naperibu');?>">



                                                </div>



                                            </div>



                                            



                                            



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">Alamat Perusahaan Ibu:</label>



                 



    		  <h6 class="card-subtitle">Office address : </h6>          



                 



                <input type="text" class="form-control" id="alperibu" name="alperibu" value="<?php echo set_value('alperibu');?>">



                                                </div>



                                            </div>     



                                            



                                            



                      



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No Telpon Rumah Ibu:</label>



                 



			<h6 class="card-subtitle">House Phone Number : </h6>                 



                 



                <input type="text" class="form-control" id="notllpri" name="notllpri" value="<?php echo set_value('notpllpri');?>">



                                                </div>



                                            </div>                                                                                    



             



                                   



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No Telpon Kantor Ibu:</label>



                 



				<h6 class="card-subtitle">Office number : </h6>                 



                 



                <input type="text" class="form-control" id="notlkai" name="notlkai" value="<?php echo set_value('notlkai');?>">



                                                </div>



                                            </div> 



                      



                      



                      



                      



    					 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">No HP Ibu  : <span class="text-danger">*</span></label>



                 



				<h6 class="card-subtitle">HP Number : </h6>                 



                 



                <input type="text" class="form-control required" id="nohpi" name="nohpi" value="<?php echo set_value('nohpi');?>">



                <span class="text-danger"><?php echo form_error('nohpi'); ?></span> 



                



                                                </div>



                                            </div>                       



                                            



                          



                          



				 <div class="col-md-6">



                                                <div class="form-group">



                 <label for="alamat perusahaan">Alamat Email Ibu</label>



                 



				<h6 class="card-subtitle">Email : </h6>                 



                 



                <input type="text" class="form-control" id="emaili" name="emaili" value="<?php echo set_value('emaili');?>">



                                                </div>



                                            </div>                           



                          



                                            



                                        </div>                                  



                                 



                           



                                    </section>



                                    <!-- Step 3 -->



                                    <h6>Asal sekolah dan saudara kandung</h6>



                                    <section>



                                    



                                    



     <div class="row">



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label for="behName1">Nama sekolah asal</label>



													<h6 class="card-subtitle">Previous School Name : </h6>                                                    



                                                    



                                                    <input type="text" class="form-control" id="nasekolahasal" name="nasekolahasal" value="<?php echo set_value('nasekolahasal');?>">



                                                </div>



                                                <div class="form-group">



                            <label for="participants1">Alamat sekolah asal </label>



													<h6 class="card-subtitle">Previous School Address : </h6>                                                    



      <input type="text" class="form-control" id="asekolahasal" name="asekolahasal" value="<?php echo set_value('asekolahasal');?>">



                                                </div>



                                                <div class="form-group">



                                                    <label for="participants1">Kelas sekarang</label>



                                                      <h6 class="card-subtitle">Recent Level/Grade : </h6>



                                                    <select class="custom-select form-control" id="kelasskrg" name="kelasskrg">



                                                        <option value="">Pilih kelas</option>



                                                        <option value="K1">K1</option>



                                                        <option value="K2">K2</option>



                                                        <option value="K3">K3</option>



                                                        <option value="SD1">SD1</option>



                                                        <option value="SD2">SD2</option>



                                                        <option value="SD3">SD3</option>                                                        <option value="SD4">SD4</option>



                                                        <option value="SD5">SD5</option>



                                                        <option value="SD6">SD6</option>                                                        <option value="SMP1">SMP1</option>



                                                        <option value="SMP2">SMP2</option>



                                                        <option value="SMP3">SMP3</option>                                                        <option value="SMA1">SMA1</option>



                                                        <option value="SMA2">SMA2</option>



                                                        <option value="SMA3">SMA3</option>                                                 



                                                        



                                                    </select>



                                                </div>



                                                



   								                                            



                                                



                                                



                                            </div>



                                            <div class="col-md-6">



                                             



                                             



                                             



                                             



  <div class="card-body">



                                <h5 class="card-title">Nama saudara kandung yang masih bersekolah di SDH</h5>



                                <h6 class="card-subtitle">Name of siblings who already study in SDH</h6>



                                <div class="table-responsive">



                                   











    <table class="table">



                                        <thead>



                                            <tr>



                                                <th>#</th>



                                                <th>Nama  <h6 class="card-subtitle">Name : </h6></th>



                                                <th>Kelas  <h6 class="card-subtitle">Level/Grade : </h6></th>



                                            </tr>



                                        </thead>



                                        <tbody>



                                        	<?php 



											for ($i=1;$i<=6;$i++){



												echo "



                                            <tr>



                                                <td>$i</td>



 <th><input type=\"text\" class=\"form-control\" id=\"nasub".$i."\" name=\"nasub".$i."\" 



												value=".set_value('nasub'.$i.'')."></th>



 <th><input type=\"text\" class=\"form-control\" id=\"grsub".$i."\" name=\"grsub".$i."\" value=".set_value('grsub'.$i.'')."></th>



                                            </tr>";



											}



                                    	?>



                                        </tbody>



                                    </table>



                            



                                </div>



                            </div>                                             



                            



                                             



                                        </div>         



      



                                      </section>



                                    <!-- Step 4 -->



                                    <h6>Informasi transfer</h6>



                                    



                                    



                                    



                                    <section>



                                    



        			        



   



     Tekan tombol  <b><font color="#FF0000">SUBMIT</font></b> dan lakukan pembayaran ke bank yang tertera di bawah ini:

                                              



   



                                  <div class="row m-t-40" id="bankno2">



                                    <!-- Column -->



                                   



        



                                 



                              



                                 



                                    </div>                  



                                



                  



                  



                      			<div class="col-md-12">



                                



                                <div class="col-md-6" id="bankno"></div>



                                



                                



                                <div class="col-md-6">











                 <label for="alamat ammount">Kode pembayaran</label>



				 <h6 class="card-subtitle">Payment code : </h6>   



                 <label for="alamat ammount2"><h1><?php echo $kodreg;?></h1></label>



       			 <input type="hidden" class="form-control" id="kodreg" name="kodreg" value="<?php echo $kodreg;?>">  



                     

			

                                



                               </div>

                               

                          



                                </div>                    



                  



                                



                      



                      </div>   



                      



                                 



                                    



                                      



                                    </section>



                                    



                                    



                                    



                                </form>



                            </div>



                        </div>



                    </div>



                </div>



   



                <!-- ============================================================== -->



                <!-- End PAge Content -->



                <!-- ============================================================== -->



                <!-- ============================================================== -->



                <!-- Right sidebar -->



                <!-- ============================================================== -->



                <!-- .right-sidebar -->



         



                <!-- ============================================================== -->



                <!-- End Right sidebar -->



                <!-- ============================================================== -->



            </div>



            <!-- ============================================================== -->



            <!-- End Container fluid  -->



            <!-- ============================================================== -->



            <!-- ============================================================== -->



            <!-- footer -->



            <!-- ============================================================== -->



            



         



<script>







$(document).ready(function(){



 $('#sekolah').change(function(){



  var sekolah_id = $('#sekolah').val();



  if(sekolah_id != '')



  {



   $.ajax({



    method:"POST",



<!--	url:"<?php //echo base_url(); ?>private_area/fetch_tingkat",-->



 	url:"<?php echo base_url(); ?>private_area/coba2",



	dataType:"json",



    data:{sekolah_id:sekolah_id},	



    success:function(data)



    {		



	$('#tingkat').html(data.result.tingkat);



	$('#bankno2').html(data.result.bankno2);	



    <!--  $('#tingkat').html(data);



     <!-- $('#grade').html('<option value="">Pilih Tingkat</option>');



    }



   });



  }



  else



  {



   $('#tingkat').html('<option value="">Pilih Tingkat</option>');



   $('#grade').html('<option value="">Pilih Kelas</option>');



  }



 });



 



 







 $('#tingkat').change(function(){



  var tingkat_id = $('#tingkat').val();



  if(tingkat_id != '')



  {



   $.ajax({



    url:"<?php echo base_url(); ?>private_area/fetch_grade",



    method:"POST",



    data:{tingkat_id:tingkat_id},



    success:function(data)



    {



     $('#grade').html(data);



    }



   });



  }



  else



  {



   $('#grade').html('<option value="">Pilih Kelas</option>');



  }



 });



 







$('#grade').change(function(){



  var grade_id = $('#grade').val();



  if(grade_id != '')



  {



   $.ajax({



    url:"<?php echo base_url();?>private_area/fetch_bank",



    method:"POST",



    data:{grade_id:grade_id},



    success:function(data)



    {



     $('#bankno').html(data);



    }



   });



  }



  else



  {



  $('#grade').html('');



  }



 }); 



 



 



 



 



});















 



















</script>            



            



            



  <?php $this->load->view('footer'); ?>
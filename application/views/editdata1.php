      <?php $this->load->view('header'); ?>

  
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
              

<form action="<?php echo base_url()?>Admin_area/editdataok" class="validation-wizard wizard-circle" id="addreg" name="addreg" method="post">

                                    <!-- Step 1 -->

                                    <h6>Data Calon Siswa</h6>

                                    <section>
            

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">

   <label for="Nama"> Nama calon siswa<code>(Sesuai Akte Lahir)</code> <span class="text-danger">*</span></label>

   

   <h6 class="card-subtitle">Name <code>(As on Birth Certificate)</code>: </h6>

   

    <input type="text" class="form-control required" id="nama" name="nama" value="<?php echo $main->main_nama;?>">

    <input type="hidden" value="<?php echo $main->main_id;?>" name="mainid" />
    

 <span class="text-danger"><?php echo form_error('nama'); ?></span>          

   	

     </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

      <label for="Kelas">Kelas yang dimasuki <span class="text-danger">*</span></label>

      

<h6 class="card-subtitle">Grade : </h6>      
  						

   							<select class="custom-select form-control required" id="grade" name="grade">

                                   <option value="">Pilih kelas</option>

                               <?php 
							    foreach($main2 as $row2){
									
									?>
<option value = "<?php echo $row2->grade_id; ?>" <?php if($main->main_kelas == $row2->grade_id){echo "selected";}?>><?php echo $row2->grade_nama ?></option>
								
                                <?php }
		
							   ?>

                                     </select>    

  
                                                                                     

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

                                                        

    <option value="<?php echo $rownegara->country_name;?>" <?php if($rownegara->country_name == $main->main_kewarganegaraan){echo "selected";}?>><?php echo $rownegara->country_name;?></option>

                                                        

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

  <input type="radio" class="form-check-input" id="Unchecked" name="jk" value="m" <?php if($main->main_jk=='m'){echo "checked";}?>>

  <label class="form-check-label" for="Unchecked">Laki-Laki</label>

</div>



<!-- Material checked -->

<div class="form-check">


  <input type="radio" class="form-check-input" id="Checked" name="jk" value="f" <?php if($main->main_jk=='f'){echo "checked";}?>>

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

   

<input type="text" class="form-control required" id="tempatlahir" name="tempatlahir" value="<?php echo $main->main_temptlahir;?>"><span class="text-danger"><?php echo form_error('tempatlahir'); ?></span>                                                  

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

	<label for="tgllahir">Tanggal Lahir <span class="text-danger">*</span></label>

    

    <h6 class="card-subtitle">Date of Birth : </h6>

    

    

     <input type="date" class="form-control required" id="tgllahir" name="tgllahir" value="<?php echo $main->main_tgllahir?>"> 

     

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

			<?php if ($main->main_agama== $rowa->agama_keterangan){echo "selected";}?>><?php echo $rowa->agama_keterangan;?></option>

<?php } ?>                                                        

                                                    </select>

                                                

       <span class="text-danger"><?php echo form_error('agama'); ?></span>                                               

                                                

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

  <label for="shortDescription1">Alamat :</label>

  <h6 class="card-subtitle">Home Address : </h6>

  
<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $main->main_alamat;?>">

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

                                                    

                 <input type="text" class="form-control required" id="naayah" name="naayah" 
                 value="<?php echo $main->main_namaa;?>">

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

			<?php if ($main->main_pekerjaana== $rowj->pekerjaan_keterangan){echo "selected";}?>><?php echo $rowj->pekerjaan_keterangan;?></option>

<?php } ?>

                                                    </select>

          <span class="text-danger"><?php echo form_error('pekayah'); ?></span> 

         

         </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                 <label for="nama perusahaan">Nama Perusahaan Ayah :</label>

                 

<h6 class="card-subtitle">Company Name : </h6>                 

                 

<input type="text" class="form-control" id="napera" name="napera" value="<?php echo $main->main_naperusa?>">

                                                </div>

                                            </div>

                                            

                                            

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">Alamat Perusahaan Ayah:</label>

                 

<h6 class="card-subtitle">Office address : </h6>                 

                 

                 

                <input type="text" class="form-control" id="alpera" name="alpera" value="<?php echo $main->main_alperusa;?>">

                                                </div>

                                            </div>     

                                            

                                            

                      

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No Telpon Rumah Ayah:</label>

                 

<h6 class="card-subtitle">House Phone Number : </h6>                 

                 

<input type="text" class="form-control" id="notllpra" name="notllpra" value="<?php echo $main->main_notlprmha;?>">

                                                </div>

                                            </div>                                                                                    

             

                                   

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No Telpon Kantor Ayah:</label>

                 

<h6 class="card-subtitle">Office Phone Number : </h6>                 

                 

<input type="text" class="form-control" id="notlkaa" name="notlkaa" value="<?php echo $main->main_notlpkntra;?>">

                                                </div>

                                            </div> 

                      

                      

                      

                      

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No HP Ayah : <span class="text-danger">*</span></label>

                 

<h6 class="card-subtitle">HP Number : </h6>                 

                 

                <input type="text" class="form-control required" id="nohpa" name="nohpa" 
                value="<?php echo $main->main_nohpa;?>">

        <span class="text-danger"><?php echo form_error('nohpa'); ?></span>         

                

                                                </div>

                                            </div>                       

                                            

                          

                          

				 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">Alamat Email Ayah:</label>

                 

                 <h6 class="card-subtitle">Email : </h6>

                 

                <input type="text" class="form-control" id="emaila" name="emaila" value="<?php echo $main->main_emaila;?>">

                                                </div>

                                            </div>                           

                          

                                 

       

      

              <div class="col-md-6">

                                                <div class="form-group">

                                                    <label for="jobTitle2">Nama Ibu : <span class="text-danger">*</span></label>

                                                    

<h6 class="card-subtitle">Mother's Name: </h6>                                                    

                                                    

                                                    

                 <input type="text" class="form-control required" id="naibu" name="naibu" value="<?php echo $main->main_namai;?>">

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

			<?php if ($main->main_pekerjaani== $rowj->pekerjaan_keterangan){echo "selected";}?>><?php echo $rowj->pekerjaan_keterangan;?></option>

<?php } ?>





                                                    </select>

         <span class="text-danger"><?php echo form_error('pekerjaanibu'); ?></span> 

         

         </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                 <label for="nama perusahaan">Nama Perusahaan Ibu :</label>

                 

<h6 class="card-subtitle">Company Name : </h6>                 

                 

                <input type="text" class="form-control" id="naperibu" name="naperibu" value="<?php echo $main->main_naperusi;?>">

                                                </div>

                                            </div>

                                            

                                            

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">Alamat Perusahaan Ibu:</label>

                 

    		  <h6 class="card-subtitle">Office address : </h6>          

                 

                <input type="text" class="form-control" id="alperibu" name="alperibu" value="<?php echo $main->main_alperusi;?>">

                                                </div>

                                            </div>     

                                            

                                            

                      

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No Telpon Rumah Ibu:</label>

                 

			<h6 class="card-subtitle">House Phone Number : </h6>                 

                 

                <input type="text" class="form-control" id="notllpri" name="notllpri" value="<?php echo $main->main_notlprmhi;?>">

                                                </div>

                                            </div>                                                                                    

             

                                   

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No Telpon Kantor Ibu:</label>

                 

				<h6 class="card-subtitle">Office number : </h6>                 

                 

                <input type="text" class="form-control" id="notlkai" name="notlkai" value="<?php echo $main->main_notlpkntri;?>">

                                                </div>

                                            </div> 

                      

                      

                      

                      

    					 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">No HP Ibu  : <span class="text-danger">*</span></label>

                 

				<h6 class="card-subtitle">HP Number : </h6>                 

                 

    <input type="text" class="form-control required" id="nohpi" name="nohpi" value="<?php echo $main->main_nohpi;?>">

                <span class="text-danger"><?php echo form_error('nohpi'); ?></span> 

                

                                                </div>

                                            </div>                       

                                            

                          

                          

				 <div class="col-md-6">

                                                <div class="form-group">

                 <label for="alamat perusahaan">Alamat Email Ibu</label>

                 

				<h6 class="card-subtitle">Email : </h6>                 

                 

                <input type="text" class="form-control" id="emaili" name="emaili" value="<?php echo $main->main_emaili;?>">

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

                                                    

                                                    <input type="text" class="form-control" id="nasekolahasal" name="nasekolahasal" value="<?php echo $main->main_na_as_sekolah;?>">

                                                </div>

                                                <div class="form-group">

                            <label for="participants1">Alamat sekolah asal </label>

													<h6 class="card-subtitle">Previous School Address : </h6>                                                    

      <input type="text" class="form-control" id="asekolahasal" name="asekolahasal" 
      value="<?php echo $main->main_al_as_sekolah;?>">

                                                </div>

                                                <div class="form-group">

                                                    <label for="participants1">Kelas sekarang</label>

                                                      <h6 class="card-subtitle">Recent Level/Grade : </h6>

                                                    <select class="custom-select form-control" id="kelasskrg" name="kelasskrg">

                                                        <option value="">Pilih kelas</option>
                                                      

                                                        <option value="K1" <?php if($main->main_kelasskrg == "K1"){echo "selected";}?>>K1</option>

                                                        <option value="K2" <?php if($main->main_kelasskrg == "K2"){echo "selected";}?>>K2</option>

                                                        <option value="K3" <?php if($main->main_kelasskrg == "K3"){echo "selected";}?>>K3</option>

                                                        <option value="SD1" <?php if($main->main_kelasskrg == "SD1"){echo "selected";}?>>SD1</option>

                                                        <option value="SD2" <?php if($main->main_kelasskrg == "SD2"){echo "selected";}?>>SD2</option>

                                                        <option value="SD3" <?php if($main->main_kelasskrg == "SD3"){echo "selected";}?>>SD3</option>                          
                                                         <option value="SD4" <?php if($main->main_kelasskrg == "SD4"){echo "selected";}?>>SD4</option>

                                                        <option value="SD5" <?php if($main->main_kelasskrg == "SD5"){echo "selected";}?>>SD5</option>

                                                        <option value="SD6" <?php if($main->main_kelasskrg == "SD6"){echo "selected";}?>>SD6</option>                                                        
                                                        <option value="SMP1" <?php if($main->main_kelasskrg == "SMP1"){echo "selected";}?>>SMP1</option>

                                                        <option value="SMP2" <?php if($main->main_kelasskrg == "SMP2"){echo "selected";}?>>SMP2</option>

                                                        <option value="SMP3" <?php if($main->main_kelasskrg == "SMP3"){echo "selected";}?>>SMP3</option>                                                        
                                                        <option value="SMA1" <?php if($main->main_kelasskrg == "SMA1"){echo "selected";}?>>SMA1</option>

                                                        <option value="SMA2" <?php if($main->main_kelasskrg == "SMA2"){echo "selected";}?>>SMA2</option>

                                                        <option value="SMA3" <?php if($main->main_kelasskrg == "SMA3"){echo "selected";}?>>SMA3</option>                                                 

                                                        

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
											// then i get data back from database ..
											$a = explode(';',$main->main_sibling);
						
											for ($i=0;$i<=5;$i++){

												echo "

                                            <tr>

                                                <td>$i</td>
";
//<th><input type=\"text\" class=\"form-control\" id=\"nasub".$i."\" name=\"nasub".$i."\" value=\"".$a[$i]."\"></th>												
//	";

	$b = explode(',',$a[$i]);

		for($x=0;$x<=1;$x++){

	echo"
 
 <th><input type=\"text\" class=\"form-control\" id=\"grsub".$i."\" name=\"grsub".$i."\" value=\"".$b[$x]."\"></th>
  "; }
  echo "</tr>";
									}
									// are u guys understand ??? only god and me know how its work...

                                    	?>

                                        </tbody>

                                    </table>

                            

                                </div>

                            </div>                                             

                            

                                             

                                        </div>         

      

                                      </section>

                                    <!-- Step 4 -->

         

                                    

                                    

                                    

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

            

         

            

            

  <?php $this->load->view('footer'); ?>
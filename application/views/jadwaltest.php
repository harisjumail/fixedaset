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
			
	//		echo $ok;echo "<br>";echo $ok0;echo "<br>";echo $ok1;echo "<br>";echo $ok2;echo "<br>";
			
                if($this->session->flashdata('message'))
                {            
                   echo $this->session->flashdata("message");
										
				  }										
										                         
          ?> 
                            
                          
       <div class="row">
           <!-- start looping -->
           <?php foreach($main as $row) {?>
           <?php if($row->countj<$row->jadwal_jumlah){
			   $bg="card bg-info";}
			   else{$bg="card bg-danger";}?>
                                    <div class="col-lg-4">
                                        <div class="<?php echo $bg;?> text-white">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="stats">
                                                    <h6 class="text-white"><?php echo $row->jadwal_nama?></h6>
                                                        <h6 class="text-white">Kelas : <?php echo $row->grade_nama ?></h6>
   								<h6 class="text-white">Tgl test : <?php echo date("d-m-Y",strtotime($row->jadwal_tanggal));?> <?php echo $row->jadwal_waktu;?></h6>                          <h6 class="text-white">Kapasitas : <?php echo $row->jadwal_jumlah;?></h6>
<h6 class="text-white">Terisi saat ini  : <?php echo $row->countj;?> Siswa </h6>
                                                     
<!--  <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Detail</button> -->


  <div class="d-flex">
     <div>
         <h4 class="card-title"><span class="lstick"></span>                                                        
<a class="btn btn-rounded btn-outline btn-light m-t-10 font-14" href="<?php echo base_url()?>masteradmin/detailjadwal/<?php echo $row->jadwal_id?>" role="button">Detail</a>   </h4>
      </div>
       <div class="ml-auto">
<button class="pull-right btn btn-circle btn-light" data-toggle="modal" data-target="#add-contact<?php echo $row->jadwal_id;?>"><i class="ti-plus"></i></button>
        </div>
   </div>

                      
                                 
          </div>
          
                                       
          
 <div class="stats-icon text-right ml-auto"><i class="fa fa-address-card display-5 op-3 text-dark"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                
        <!-- form hidden -->                           
  <div id="add-contact<?php echo $row->jadwal_id;?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
<form name="form<?php echo $row->jadwal_id;?>" action="<?php echo base_url()?>masteradmin/jadwaltest" method="post">

        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">Masukkan siswa baru</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            <div class="modal-body">
            
    
              <div class="form-group">
              
              
                                     <h5 class="m-t-30">Nama siswa / Nomor Pembayaran</h5>
           <select class="form-control custom-select" name="select<?php echo $row->jadwal_id;?>">
                    <option>Select</option>
                             		<?php foreach($siswa as $row2){?>
 <option value="<?php echo $row2->main_id?>-<?php echo $row2->main_sekolah;?>-<?php  echo $row->jadwal_id;?>"><?php echo $row2->main_nama; echo "[";echo $row2->main_kode;echo "]"; ?></option>
                                   <?php } ?>     
                                   
                                                                 
                                </select>

                      
               </div>
                 
                                             
      
              </div>
      <div class="modal-footer">
    
               <button type="submit" name="simpan" value="<?php echo $row->jadwal_id;?>" class="btn waves-effect waves-light btn-info">Simpan</button>

             <button type="button" name="button"  class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
             
         
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
			</form>                                                    
                                                    
   </div>          

<!-- batas form hidden-->                            
                                
                                
                                
           <?php } ?>
            <!-- end looping-->
        </div>
      





                               

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
       
  
    

   
            
  <?php $this->load->view('footer'); ?>
  
  
 
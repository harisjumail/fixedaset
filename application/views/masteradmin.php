      <?php $this->load->view('header'); ?>
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                
                    <div>
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
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
                if($this->session->flashdata('message'))
                {            
                   echo $this->session->flashdata("message");
										
				  }										
										                         
          ?>      <form method="post" action="<?php echo base_url();?>masteradmin/validate">            
                        <h4 class="card-title">Buka Pendaftaran</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="switch">
                                            <label>OFF
     <input type="hidden" name="buka" value="0" />               
    <input type="checkbox" name="buka" value="1" <?php if($open->sekolah_buka == 1){echo "checked";}else{echo "";} ?> ><span class="lever"></span>ON</label>  
   										 </div>
                                      </div>
                                    </div>
                                    
                             
                                   <div class="row"> 
                       
 <?php foreach($main2 as $row2){ ?>                        
                                   
                                    <div class="col-md-3">
                                        <div class="switch">
   <h4 class="card-title"><?php echo $row2->tingkat_nama;?></h4>           
              <label>OFF
          <input type="hidden" name="tingkat_buka<?php echo "[".$row2->tingkat_id."]";?>" value="0" />                
    <input type="checkbox" name="tingkat_buka<?php echo "[".$row2->tingkat_id."]";?>" value="1" <?php if($row2->tingkat_buka == 1){echo "checked";}else{echo "";} ?> ><span class="lever"></span>ON</label>                                             
                                           
                                        </div>
                                    </div>
                                    
  <?php }?>          
            
            
                                    
                                    
                                    </div>
                             
                            
                                <!-- K1-->    
                                <div class="row demo-swtich">
           
           
                               <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Grade</th>
                                                <th>Aktif</th>
                                                <th>Harga Formulir</th>
                                                <th>Target</th>
                                                 <th>Terjual</th>
                                                  <th>Sisa</th>
                                                <th>Batasan umur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
 <?php foreach($main as $row){ ?>                                         
                                            <tr>
                                                <td><?php echo $row->grade_nama; ?></td>
                                                <td>
                                        <div class="switch">
                                   <label>OFF
 <!--  <input type="hidden" name="gradeid" value="<?php //echo $row->grade_id; ?>" />      -->                  
   <input type="hidden" name="grade_buka<?php echo "[".$row->grade_id."]"; ?>" value="0" />     

<!-- <input type="checkbox" name="grade_buka<?php //echo "[".$row->grade_id."]";?>" value="1" /> -->
                                 
<input type="checkbox" <?php if($row->grade_buka == 1){echo "checked";}?> name="grade_buka<?php echo "[".$row->grade_id."]";?>" 
 
  value="1"> 
   
   
   <span class="lever"></span>ON</label>
                                        </div>                                              
                                                
                                                </td>
 <td> <input type="number" class="form-control" value="<?php echo $row->grade_harga;?>" 
   name="grade_harga<?php echo "[".$row->grade_id."]";?>"> </td>
   
                                                <td>
                                                
 <input type="number" class="form-control" value="<?php echo $row->grade_stok;?>" name="grade_stok<?php echo "[".$row->grade_id."]";?>">                                                
                                                
                                                </td>
                                                
  												 <td>
 <input type="number" class="form-control" value="<?php echo $row->terjual;?>" disabled="disabled">                                            
                                                </td>  
                                                
                                                
  												 <td>
                                                 <?php 
												 $a = $row->grade_stok; $b = $row->terjual;$c = ($a-$b);
												 
												 ?>
 <input type="number" class="form-control" value="<?php echo $c;?>" disabled="disabled">                                            
                                                </td>                                                                                                
                                                
                                                
                                                <td>
<input type="date" class="form-control" id="grade_umur<?php echo "[".$row->grade_id."]";?>" 
name="grade_umur<?php echo "[".$row->grade_id."]";?>" value="<?php echo $row->grade_umur;?>"> 
                                                </td>
                                         
                                            </tr>
  <?php } ?>
                                        </tbody>
                                    </table>
                                </div>           
           
                					              
                                
 
       
                     
                                </div>
                                
     						  <div class="button-group">
                                    <button type="submit" class="btn waves-effect waves-light btn-info">Simpan</button>
                                </div>     
                         </form>                      
                              
                              
                              
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
           <?php $this->load->view('footer'); ?>
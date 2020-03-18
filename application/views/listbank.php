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
                if($this->session->flashdata('message'))
                {            
                   echo $this->session->flashdata("message");
										
				  }										
										                         
          ?> 
                            
                                <div class="table-responsive">
                                
                                
<form name="form1" method="post" action="<?php echo base_url();?>masteradmin/hapusbank"> 
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                        <thead>
                                        
                                      
                                        
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Rekening Bank</th>
                                                
                                    			<th>Pemilik Rekening</th>             
                                                
                                                <th>Nama Bank</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
 <?php $no=1; foreach($main as $row){ ; ?>                                           
                                        
                                            <tr>
                                                <td>
												<?php echo $no; ?>
                                               
                                                </td>
  											  <td><?php echo $row->bank_norek;?></td>                                                
                                               <td><?php echo $row->bank_atasn; ?></td>
                                                
                                                <td><?php echo $row->bank_nama; ?></td>
                                                
                                                  
  <td>
<input type="hidden" name="idbank" value="<?php echo $row->bank_id;?>" />
<button type="submit" name="delbank" value="<?php echo $row->bank_id;?>delbank" 
class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Anda akan menghapus Bank ini?')"><i class="ti-close" aria-hidden="true"></i></button></td>                                                
                                            </tr>
 
                                  
                                     
                                            
                                            
<?php $no = $no+1;} ?>  
      </tbody>                                          
            <tfoot>
                                            <tr>                                   
                                                <td colspan="2">

                                                </td>
                                                </tr>
        </tfoot>  
        </table>  
        
        </form> 
        
 <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Tambah bank</button>
                    
    <form action="<?php echo base_url()?>masteradmin/tambahlistbank" method="post">   
    
                               
  <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">Bank baru</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            <div class="modal-body">
            
    
              <div class="form-group">
              
              
                  <div class="col-md-12 m-b-20">
                  <input type="text" class="form-control" placeholder="Nomor Rekening" name="nrek"> 
                  </div>
              
              
              
                  <div class="col-md-12 m-b-20">
                  <input type="text" class="form-control" placeholder="Pemilik Rekening" name="prek"> 
                      </div>                      
                               
              
                   <div class="col-md-12 m-b-20">
                      <input type="text" class="form-control" placeholder="Nama Bank" name="nbank"> 
                      </div>
                      
               </div>
                 
                                             
      
              </div>
      <div class="modal-footer">
               <button type="submit" class="btn waves-effect waves-light btn-info">Simpan</button>

             <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
             
         
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
              </form>
            
            
  <?php $this->load->view('footer'); ?>
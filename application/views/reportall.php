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

                        <div class="card">
                            <div class="card-body">
                            
                            
  		<div class="col-mt-12">
        
        <form name="" method="post" action="<?php echo base_url()?>admin_area/reportall">
        				 <div class="row">                            
                            
                          
           			        <div class="col-lg-4">    
                                 		<div class="form-group">        
    									<!--	 <label class="control-label">Kelas</label> -->
                                             <select class="form-control custom-select" name="grade">
        								 <option value="">Pilih Kelas</option>
        
                                <?php foreach($main2 as $row2){?>
        
                                    
        
                               <option value="<?php echo $row2->grade_id; ?>"
        
                                
        
                               <?php if($row2->grade_id == $val) { echo "selected";} ?>
                               >
        
                               
        
                               <?php echo $row2->grade_nama; ?> </option>
        
                               
        
                                 <?php }  ?>
                                                    </select> 
                                                    
                                              </div>      
                                             
									</div>                 
                          
                          
       			        <div class="col-lg-3">    
                                 	     
    									
                                            <div class="box bg-primary text-center">
                                                <h2 class="font-light text-white">Rp <?php echo number_format($bayar);?></h2>
                                                  <h6 class="text-white">Total bayar</h6>
                                       
                                              </div>      
                                             
					  	</div>  
                                    
                           
       			        <div class="col-lg-3">    
                                 	     
    									
                                            <div class="box bg-primary text-center">
                                                <h2 class="font-light text-white"><?php echo $jumlahsiswa;?></h2>
                                         		<h6 class="text-white">Calon Siswa</h6>
                                              </div>      
                                             
					  	</div>                                   
                                    
                                                               
      				</div>
                    <div class="row">
                     <div class="col-lg-4"> 
		<button type="submit" name="konfirm" value="konfirm" class="btn btn-primary"><i class="fa fa-check"></i>Submit</button>
                                </div>
                    
                    </div>
</div>                                              
                              
     <?php
                if($this->session->flashdata('message'))
                {            
                   echo $this->session->flashdata("message");
										
				  }										
										                         
          ?>                       
                                                    
                                
                                <div class="table-responsive">
                                
                                
<!-- button -->
<form method="post" action="<?php echo base_url();?>admin_area/check">  

   <div class="table-responsive m-t-40">
                                                              
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><h6><b>Kode</b></h6></th>
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                 
                                                
                                                <th><h6><b>Kelas</b></h6></th>
                                                
                                           
     											        <th><h6><b>Kewarganegaraan</b></h6></th>                                                
                                      
        <th><h6><b>Jenis Kelamin</b></h6></th>        
        <th><h6><b>Tempat Lahir</b></h6></th>      
        
        <th><h6><b>Tanggal Lahir</b></h6></th>    
          <th><h6><b>Agama </b></h6></th>   
          
        <th><h6><b>Alamat </b></h6></th>       
                                                          
                      <th><h6><b>Nama Ayah </b></h6></th>  
                      
                   <th><h6><b>Pekerjaan Ayah</b></h6></th> 
                   
                      <th><h6><b>Nama Perusahaan Ayah </b></h6></th>   
                      
                         <th><h6><b>Alamat Perusahaan Ayah </b></h6></th>      
                         
                            <th><h6><b>No tlpn Rumah Ayah </b></h6></th>    
                            
                     <th><h6><b>No tlpn Kantor Ayah </b></h6></th>             
                          <th><h6><b>No Hp Ayah </b></h6></th>        
                          
                             <th><h6><b>No Email Ayah </b></h6></th>    
                                                      
                                                <th><h6><b>Nama Ibu</b></h6></th>
                                                
                             <th><h6><b>Pekerjaan Ibu </b></h6></th> 
                             
                             
                             
                             
                 <th><h6><b>Nama Perusahaan Ibu </b></h6></th>   
                      
                         <th><h6><b>Alamat Perusahaan Ibu </b></h6></th>      
                         
                            <th><h6><b>No tlpn Rumah Ibu </b></h6></th>    
                            
                     <th><h6><b>No tlpn Kantor Ibu </b></h6></th>             
                          <th><h6><b>No Hp Ibu </b></h6></th>        
                          
                             <th><h6><b>Email Ibu </b></h6></th>                
                                 
                         <th><h6><b>Asal Sekolah</b></h6></th>                     
                                                      
                          <th><h6><b>Alamat Asal Sekolah</b></h6></th>       
                          
                             <th><h6><b>Kelas Saat ini</b></h6></th> 
                             
                                   <th><h6><b>Saudara Kandung di SDH</b></h6></th>   
                                            
                                                <th><h6><b>Status</b></h6></th>
                                          <!--      <th><h6><b>Cara bayar</b></h6></th> -->
                                                <th><h6><b>Tanggal bayar</b></h6></th>
												<th><h6><b>Bank</b></h6></th> 
                                                
                                                <th><h6><b>Nama Pengirim</b></h6></th> 
                                                                                               
                                                <th><h6><b>Jumlah transfer</b></h6></th>
                                                    <th><h6><b>Harga Formulir</b></h6></th>  
                                                                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                           <tr>
                                                <th><h6><b>Kode</b></h6></th>
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                 
                                                
                                                <th><h6><b>Kelas</b></h6></th>
                                                
                                           
     											        <th><h6><b>Kewarganegaraan</b></h6></th>                                                
                                      
        <th><h6><b>Jenis Kelamin</b></h6></th>        
        <th><h6><b>Tempat Lahir</b></h6></th>      
        
        <th><h6><b>Tanggal Lahir</b></h6></th>    
          <th><h6><b>Agama </b></h6></th>   
                                                          
                      <th><h6><b>Nama Ayah </b></h6></th>  
                      
                   <th><h6><b>Pekerjaan Ayah</b></h6></th> 
                   
                      <th><h6><b>Nama Perusahaan Ayah </b></h6></th>   
                      
                         <th><h6><b>Alamat Perusahaan Ayah </b></h6></th>      
                         
                            <th><h6><b>No tlpn Rumah Ayah </b></h6></th>    
                            
                     <th><h6><b>No tlpn Kantor Ayah </b></h6></th>             
                          <th><h6><b>No Hp Ayah </b></h6></th>        
                          
                             <th><h6><b>No Email Ayah </b></h6></th>    
                                                      
                                                <th><h6><b>Nama Ibu</b></h6></th>
                                                
                             <th><h6><b>Pekerjaan Ibu </b></h6></th> 
                             
                 <th><h6><b>Nama Perusahaan Ibu </b></h6></th>   
                      
                         <th><h6><b>Alamat Perusahaan Ibu </b></h6></th>      
                         
                            <th><h6><b>No tlpn Rumah Ibu </b></h6></th>    
                            
                     <th><h6><b>No tlpn Kantor Ibu </b></h6></th>             
                          <th><h6><b>No Hp Ibu </b></h6></th>        
                          
                             <th><h6><b>Email Ibu </b></h6></th>                
                                 
                         <th><h6><b>Asal Sekolah</b></h6></th>                     
                                                      
                          <th><h6><b>Alamat Asal Sekolah</b></h6></th>       
                          
                             <th><h6><b>Kelas Saat ini</b></h6></th> 
                             
                                   <th><h6><b>Saudara Kandung di SDH</b></h6></th>   
                                            
                                                <th><h6><b>Status</b></h6></th>
                                          <!--      <th><h6><b>Cara bayar</b></h6></th> -->
                                                <th><h6><b>Tanggal bayar</b></h6></th>
												<th><h6><b>Bank</b></h6></th>      
                                                
                                			  <th><h6><b>Nama Pengirim</b></h6></th>                                                
                                                                                          
                                                <th><h6><b>Jumlah transfer</b></h6></th>
                                                   <th><h6><b>Harga Formulir</b></h6></th>      
                                                                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        
 <?php foreach($main as $row){ ?>                                        
                                        
                                            <tr>
                                                <td>

 <input type="checkbox" id="basic_checkbox_<?php echo $row->main_id; ?>" name="pick[]" class="filled-in" 
value="<?php echo $row->main_id;?>"/> 
<label for="basic_checkbox_<?php echo $row->main_id;?>"><h6><?php echo $row->main_kode;?></h6></label>                                                
                                                
                                                </td>
                                                <td>
                                                <h6>
 <a href="javascript:void(0)"><?php echo $row->main_nama; ?></a>
                                                </h6></td>
                                                <td><h6><?php echo $row->grade_nama; ?></h6></td>
                                                <td><h6><?php echo $row->main_kewarganegaraan; ?></h6></td>
                                                <td>
                                                
<h6>
                                                
  											 <?php 
											
			echo $row->main_jk; 		
												?>
                                                
                                                </h6>                                                
                                                
                                                </td>
                                                <td>
                                                
												<h6>
												<?php 
												
												echo $row->main_temptlahir;
												
										//		if ($row->main_tglbayar != "0000-00-00"){
										//		echo date("d-m-Y",strtotime($row->main_tglbayar));
										//		}
												?>
                                                
                                                
                                                </h6>                                                
                                                
                                                </td>
                                              <td><h6>
											  <?php 
												if ($row->main_tgllahir != "0000-00-00"){
												echo date("d-m-Y",strtotime($row->main_tgllahir));
												}
											  
											  ?></h6></td>
                                              
  						<td><h6><?php echo $row->main_agama; ?></h6></td>  
                        
		<td><h6><?php echo $row->main_alamat; ?></h6></td>                            
                                                                    
  		<td><h6><?php echo $row->main_namaa; ?></h6></td>      
        
                       <td><h6><?php echo $row->main_pekerjaana; ?></h6></td> 
                       
                       <td><h6><?php echo $row->main_naperusa; ?></h6></td> 
                       
<td><h6><?php echo $row->main_alperusa; ?></h6></td>                        
                       
     <td><h6><?php echo $row->main_notlprmha; ?></h6></td>                                             
 
    <td><h6><?php echo $row->main_notlpkntra; ?></h6></td>    
    
    
     <td><h6><?php echo $row->main_nohpa; ?></h6></td>    
 
     <td><h6><?php echo $row->main_emaila; ?></h6></td>  
     
         <td><h6><?php echo $row->main_namai; ?></h6></td>      
                                              
  <td><h6><?php echo $row->main_pekerjaani; ?></h6></td>   
  
    <td><h6><?php echo $row->main_naperusi; ?></h6></td>  
    
      <td><h6><?php echo $row->main_alperusi; ?></h6></td> 
      
  <td><h6><?php echo $row->main_notlprmhi; ?></h6></td>        
      <td><h6><?php echo $row->main_notlpkntri; ?></h6></td>                                                  
     <td><h6><?php echo $row->main_nohpi; ?></h6></td>   
     
  <td><h6><?php echo $row->main_emaili; ?></h6></td>   
  
      <td><h6><?php echo $row->main_na_as_sekolah; ?></h6></td>     
    
    
      <td><h6><?php echo $row->main_al_as_sekolah; ?></h6></td>   
      
  <td><h6><?php echo $row->main_kelasskrg; ?></h6></td>     
  
    <td><h6><?php echo $row->main_sibling; ?></h6></td>       
       
  <td><h6>
  
  <?php 
  
  
  					if($row->main_confirmu == "0"){
													echo "
                                                <span class='label label-danger'>User belum konfirmasi</span>";
												}
												elseif($row->main_confirmu == "1"){
													echo "
                                                <span class='label label-warning'>Menunggu konfirmasi admin</span>";	
												}
												elseif($row->main_confirmu == "2"){
													echo "
                                                <span class='label label-info'>Admin sudah konfirmasi</span>";	
												}
												?>
  

  
  
  </h6></td>   
         
 <td><h6><?php echo $row->main_tglbayar; ?></h6></td>           
 
  <td><h6><?php echo $row->main_namabank; ?></h6></td> 
 
  <td><h6><?php echo $row->main_namapengirim; ?></h6></td> 
   <td><h6><?php echo $row->main_jmlrealbyr; ?></h6></td>   
   <td><h6><?php echo $row->main_jumlahbyr; ?></h6></td>   
   
                                                                                       
                                            </tr>
   <?php } ?> 
   
                                        </tbody>
                                    </table>
                                </div>
    
               
          
        </form>                                  
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Pendaftar baru</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Nama calon siswa"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Kelas yang didaftar"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload"> </div>
                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
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
          
   
            
  <?php $this->load->view('footer'); ?>
  
  
          <!-- jquery for data tables -->
    <!-- This is data table -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>     
    
      <script src="<?php echo base_url();?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script> 
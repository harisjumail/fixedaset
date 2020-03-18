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
        
        <form name="" method="post" action="<?php echo base_url()?>admin_area/reportjadwal">
        
        
        				 <div class="row">                            
                            
                          
           			        <div class="col-lg-4">    
                            
                                 		<div class="form-group">        
                        <select class="form-control custom-select" name="grade">
        								 <option value="">Pilih Kelas</option>
        
                                <?php foreach($main2 as $row2){?>
        
                                    
        
                               <option value="<?php echo $row2->grade_id;?>"
        
                                
        
                           <?php if($row2->grade_id == $val) { echo "selected";} ?>
                               >
        
                               
        
                               <?php echo $row2->grade_nama; ?> </option>
        
                               
        
                                 <?php }  ?>
                                                    </select> 
                                                    
                                              </div>      
                                             
									</div>   
                                                                            
      			
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
                                
                                
<!-- button <form method="post" action="<?php //echo base_url();?>admin_area/check">   -->

   <div class="table-responsive m-t-40">
                                                              
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                                <th><h6><b>Kelas</b></h6></th>
                                                <th><h6><b>Nama Jadwal</b></h6></th>
     											<th><h6><b>Tgl & Waktu Test</b></h6></th> 
                                                <th><h6><b>Materitest</b></h6></th>             
                             			</tr>           
                                        </thead>
                                        <tfoot>
                                           <tr>
  			
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                                <th><h6><b>Kelas</b></h6></th>
                                                <th><h6><b>Nama Jadwal</b></h6></th>
     											<th><h6><b>Tgl & Waktu Test</b></h6></th>   
                                              	<th><h6><b>Materitest</b></h6></th>                                                     
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        
 <?php foreach($main as $row){ ?>                                        
                                        
                                            <tr>
                                                <td>
  <!--                <input type="checkbox" id="basic_checkbox_<?php //echo $row->transjadwal_id; ?>" name="pick[]" class="filled-in" 
value="<?php //echo $row->transjadwal_id;?>"/> 
<label for="basic_checkbox_<?php //echo $row->transjadwal_id;?>"></label> -->                                       
                   <?php echo $row->main_nama?>                             
         			                             </td>
                                                <td>
                                              
					<?php //echo $row->jadwal_kelas ?>                                              
                                              
                                              </td>
                                                <td><?php echo $row->jadwal_nama;?></td>
                                                <td><?php echo $row->jadwal_tanggal;echo "-";echo $row->jadwal_waktu;?></td>
      			  <td><?php echo $row->jadwal_materitest;?></td>
    
   
                                                                                       
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
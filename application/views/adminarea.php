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
                                <h4 class="card-title">List pendaftaran dan pembayaran</h4>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-dark text-center">
                                                <h1 class="font-light text-white"><?php echo $totalpendaftar; ?></h1>
                                                <h6 class="text-white">Total Pendaftar</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    
                                        <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-danger text-center">
                                                <h1 class="font-light text-white"><?php echo $totalnonconfirm;?></h1>
                                                <h6 class="text-white">Belum Konfirmasi User</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white"><?php echo $totalconfirm;?></h1>
                                                <h6 class="text-white">Sudah Konfirmasi User</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white"><?php //echo $sisaform;
												echo $totalnonconfirma;
												?></h1>
                                                <h6 class="text-white">Sudah Konfirmasi admin</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
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
                            
<!-- akhir button-->                                  
 
   <button type="submit" name="konfirm" value="konfirm" class="btn btn-primary"><i class="fa fa-check"></i> Konfirmasi</button>

  <button type="submit" name="konfirm" value="unkonfirm" class="btn btn-warning" onclick="return confirm('Anda akan membatalkan konfirmasi?')"><i class="fa fa-close"></i> Un-Konfirmasi</button>

  <button  type="submit" name="konfirm" value="masuk" class="btn btn-info"><i class="fa fa-clone"></i> Invoice</button>
 
  <button  type="submit" name="konfirm" value="jadwal" class="btn btn-success"><i class="fa fa-calendar"></i> Jadwal</button>
  
    <button  type="submit" name="konfirm" value="formulir" class="btn btn-dark"><i class="fa fa-list"></i> Formulir</button>
  
 
   <button  type="submit" name="konfirm" value="delete" class="btn btn-danger" onclick="return confirm('Harap dipastikan calon siswa ini sudah dihapus dari jadwal, Anda akan menghapus calon siswa ?')"> Hapus</button> 
 
<!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-contact">Pendaftaran baru</button>
 -->
                        
                                <div class="table-responsive m-t-40">
                                                              
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><h6><b>Kode</b></h6></th>
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                                <th><h6><b>Kelas</b></h6></th>
                                                <th><h6><b>Nama Ibu</b></h6></th>
                                                <th><h6><b>Status</b></h6></th>
                                          <!--      <th><h6><b>Cara bayar</b></h6></th> -->
                                                <th><h6><b>Tanggal bayar</b></h6></th>
												<th><h6><b>Bank</b></h6></th>                                                
                                                <th><h6><b>Jumlah transfer</b></h6></th>                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><h6><b>Kode</b></h6></th>
                                                <th><h6><b>Nama Calon Siswa</b></h6></th>
                                                <th><h6><b>Kelas</b></h6></th>
                                                <th><h6><b>Nama Ibu</b></h6></th>
                                                <th><h6><b>Status</b></h6></th>
                                          <!--      <th><h6><b>Cara bayar</b></h6></th> -->
                                                <th><h6><b>Tanggal bayar</b></h6></th>
												<th><h6><b>Bank</b></h6></th>                                                
                                                <th><h6><b>Jumlah transfer</b></h6></th>                                              
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
                                                <td><h6>
 <a href="<?php echo base_url()?>admin_area/editdata/<?php echo $row->main_id;?>"><?php echo $row->main_nama; ?></a>
                                                </h6></td>
                                                <td><h6><?php echo $row->grade_nama; ?></h6></td>
                                                <td><h6><?php echo $row->main_namai; ?></h6></td>
                                                <td>
                                                
<h6>
                                                
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
                                                
                                                </h6>                                                
                                                
                                                </td>
                                                <td>
                                                
												<h6>
												<?php 
												if ($row->main_tglbayar != "0000-00-00"){
												echo date("d-m-Y",strtotime($row->main_tglbayar));
												}
												?>
                                                
                                                
                                                </h6>                                                
                                                
                                                </td>
                                              <td><h6><?php echo $row->main_namabank;?></h6></td>
 												<td>
 <h6><?php echo number_format($row->main_jumlahbyr);?>(<b><?php echo number_format($row->main_jmlrealbyr);?></b>)</h6>
                                                </td>                                              
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
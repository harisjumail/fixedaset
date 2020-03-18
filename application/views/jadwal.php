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

                                

                                

<form name="form1" method="post" action="<?php echo base_url();?>masteradmin/hapusjadwal"> 

                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">

                                        <thead>

                                        

                                      

                                        

                                            <tr>

                                                <th>No</th>

                                               <th>Nama</th> 

                                                <th>Kelas</th>

                                                

                                    			<th>Tanggal</th>                                                       

                                                

                                                <th>Jumlah</th>

                                          <th>Tempat Test</th>         

                                           <th>Materi Test</th>             

                                            

                                            </tr>

                                        </thead>

                                        <tbody>

                                        

                                        

                                        

                                        

 <?php $no=1; foreach($main as $row){ ; ?>                                           

                                        

                                            <tr>

                                                <td>

												<?php echo $no; ?>

                                                

                                               

                                                

                                               

                                                </td>

  										<td><?php echo $row->jadwal_nama;?>                                  

<button type="button" class="pull-right btn btn-secondary btn-circle" data-toggle="modal" data-target="#editjadwal<?php echo $row->jadwal_id;?>"><i class="fa fa-pencil-square-o"></i></button>                                        

                                        </td>                                                

                                                                                                

                                               <td><?php echo $row->grade_nama; ?></td>

                                                

                                                <td><?php echo $row->jadwal_tanggal."  ".$row->jadwal_waktu; ?></td>

                                                

                                                  <td><?php echo $row->jadwal_jumlah; ?></td>

                                                      <td><?php echo substr($row->jadwal_tempattest,0,10); ?>...</td>

                                                          <td><?php echo substr($row->jadwal_materitest,0,10); ?>...</td>

                                                

                                                  

  <td>

  

  

  

<!-- <input type="hidden" name="idjadwal" value="<?php //echo $row->jadwal_id;?>" /> -->







<button type="submit" value="<?php echo $row->jadwal_id;?>" name="idjadwal" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Anda akan menghapus jadwal ini?')"><i class="ti-close" aria-hidden="true"></i></button>



                                                </td>                                                

                                                

                                                                                            

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

      

      

     

                                                     

 <!-- form hidden edit jadwal-->  

                                         

 <?php foreach($main as $row){ ; ?>  

                          

 <div id="editjadwal<?php echo $row->jadwal_id;?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

 <form name="form<?php echo $row->jadwal_id;?>" action="<?php echo base_url()?>masteradmin/editjadwaltest" method="post">

  

  	       <div class="modal-dialog">

          <div class="modal-content">

            <div class="modal-header">

               <h4 class="modal-title" id="myModalLabel">Edit Jadwal</h4>

   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>

            <div class="modal-body">

            

    

              <div class="form-group">

              

              

              

      <div class="col-md-12 m-b-20">

                  <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $row->jadwal_nama; ?>"> 

                      </div>                

              

              

                  <div class="col-md-12 m-b-20">

        

        

        

        

        				<select class="custom-select form-control" id="grade" name="grade">







 					 <option value="">Pilih Kelas</option>



						<?php foreach($main2 as $row2){?>



                            



                       <option value="<?php echo $row2->grade_id; ?>"



                        



					   <?php if($row2->grade_id == $row->jadwal_kelas) { echo "selected";} ?>

                       >



                       



					   <?php echo $row2->grade_nama; ?> </option>



                       



                         <?php }  ?>



                      </select>     

        

                  </div>

              

              

               

              

              

                  <div class="col-md-12 m-b-20">

 <input type="date" class="form-control" placeholder="tanggal" name="tanggal" value="<?php echo $row->jadwal_tanggal;?>"> 

                      </div>                      

  

  

  

                  <div class="col-md-12 m-b-20">

<input type="time" class="form-control" placeholder="tanggal" name="waktu" value="<?php echo $row->jadwal_waktu;?>" > 

                      </div>    

                      

     <div class="col-md-12 m-b-20">

<?php if($row->jadwal_tanggal2 == "0000-00-00"){$tanggal2 = "";}else{$tanggal2 = $row->jadwal_tanggal2;} ?>
 <input type="date" class="form-control" placeholder="tanggal" name="tanggal2" value="<?php echo $tanggal2;?>"> 

                      </div>                         

         <div class="col-md-12 m-b-20">
<?php if($row->jadwal_waktu2 == "00:00:00"){$waktu2 = "";}else{$waktu2 = $row->jadwal_waktu2;} ?>
<input type="time" class="form-control" placeholder="tanggal" name="waktu2" value="<?php echo $waktu2;?>" > 

                      </div>    

                                                  

              

                   <div class="col-md-12 m-b-20">

<input type="number" class="form-control" placeholder="jumlah maksimal anak" name="jumlah" value="<?php echo $row->jadwal_jumlah;?>"> 

                      </div>

                      

              

           <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="tempat test" name="tempattest" value="<?php echo $row->jadwal_tempattest?>"> 

                      </div>                      

       

       

       <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="materi test" name="materitest" value="<?php echo $row->jadwal_materitest?>">  

                      </div>   

                      

                      

     <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="last word1" name="lastword1" value="<?php echo $row->jadwal_lastword1?>"> 

                      </div>                      

       

       

       <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="last word2" name="lastword2" value="<?php echo $row->jadwal_lastword2?>">  

                      </div>                                               

                      

                      

               </div>

                 

                                             

      

              </div>

      <div class="modal-footer">

  <button type="submit" name="edit" value="<?php echo $row->jadwal_id;?>edit" class="btn waves-effect waves-light btn-info">Simpan</button>



             <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>

             

         

                                                            </div>

                                                        </div>

                                                        <!-- /.modal-content -->

                                                    </div>

                                                    <!-- /.modal-dialog -->

  </form>

  

  

  </div>





<?php } ?>



       



<!-- batas form hidden-->       

     

               

        

 <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Tambah jadwal</button>

                    

    <form action="<?php echo base_url()?>masteradmin/tambahlistjadwal" method="post">   

    

    <!-- form tambah data-->                           

  <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

          <div class="modal-content">

            <div class="modal-header">

               <h4 class="modal-title" id="myModalLabel">Jadwal baru</h4>

   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>

            <div class="modal-body">

            

    

              <div class="form-group">

              

              

              

      <div class="col-md-12 m-b-20">

                  <input type="text" class="form-control" placeholder="nama" name="nama"> 

                      </div>                

              

              

                  <div class="col-md-12 m-b-20">

        

        

        

        

        				<select class="custom-select form-control" id="grade" name="grade">







 					 <option value="">Pilih Kelas</option>



						<?php foreach($main2 as $row){?>



                            



                       <option value="<?php echo $row->grade_id; ?>"



                        



					   <?php //if(set_value('sekolah') == $row->sekolah_id) { echo "selected";} ?>

                       >



                       



					   <?php echo $row->grade_nama; ?> </option>



                       



                         <?php }  ?>



                      </select>     

        

                  </div>

              

              

               

              

              

                  <div class="col-md-12 m-b-20">

                  <input type="date" class="form-control" placeholder="tanggal" name="tanggal"> 

                      </div>    

                      

                      

        <div class="col-md-12 m-b-20">

                  <input type="time" class="form-control" placeholder="tanggal" name="waktu"> 

                      </div>                                            



                  <div class="col-md-12 m-b-20">

                  <input type="date" class="form-control" placeholder="tanggal2" name="tanggal2"> 

                      </div>        

  

                      

               <div class="col-md-12 m-b-20">

                  <input type="time" class="form-control" placeholder="waktu2" name="waktu2"> 

                      </div>                                                    

              

                   <div class="col-md-12 m-b-20">

                      <input type="number" class="form-control" placeholder="jumlah maksimal anak" name="jumlah"> 

                      </div>

                      

           <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="tempat test" name="tempattest"> 

                      </div>                      

       

       

       <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="materi test" name="materitest"> 

                      </div>                      

                             

                  

           <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="last word1" name="lastword1"> 

                      </div>                      

       

       

       <div class="col-md-12 m-b-20">

                      <input type="text" class="form-control" placeholder="last word2" name="lastword2"> 

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

            

<!-- akhir form tambah data-->



   

            

  <?php $this->load->view('footer'); ?>
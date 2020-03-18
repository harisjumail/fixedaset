 <?php $this->load->view('header1'); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               
 
        
    
  <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Status pembayaran</h4>
                                <div class="table-responsive">
                                
                                                            
                               
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#Kode</th>
                                                <th>Nama Calon siswa</th>
                                                <th>Kelas daftar</th>
                                                <th>Tgl daftar</th>
                                                <th>Jumlah bayar</th>
        										<th>Status</th>
												<th>Konfirmasi</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1;?>
                                          <?php foreach($main as $row){ ?> 
                                            <tr>
                                                <td><?php echo $row->main_kode;?></td>
                                                <td><?php echo $row->main_nama;?></td>
                                                <td><?php echo $row->grade_nama;?></td>
                                                <td><?php echo date("d-m-Y", strtotime($row->main_tgldaftar))?></td>
                                                <td><?php echo number_format($row->main_jumlahbyr);?></td>
                                                <td>
                                                
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
                                            
                                                </td>
                                                <td>
<form id="form<?php echo $row->main_id;?>" action="<?php echo base_url();?>private_area/confirm" method="post">
                 <input type="hidden" name="confirm<?php echo $row->main_id;?>" value="<?php echo $row->main_id?>" />
			    <input type="hidden" name="kode<?php echo $row->main_id;?>" value="<?php echo $row->main_kode?>" />
                <input type="hidden" name="sekolah<?php echo $row->main_id;?>" value="<?php echo $row->main_sekolah?>" />                    
                
                
<button type="submit" name="konfirm" class="btn waves-effect waves-light btn-sm btn-info" value="<?php echo $row->main_id?>kirim">Konfirmasi</button>                
  
  
 <button type="submit" name="konfirm" class="btn waves-effect waves-light btn-sm btn-success" 
 value="<?php echo $row->main_id?>lihat">Lihat Invoice</button>                 
                
		<!--			<button type="submit" class="btn waves-effect waves-light btn-info">Konfirmasi</button> -->
                   
                  </form> 
                                                </td>
                                                
                                            </tr>
                                        
                                        <?php $no=$no+1;} ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
      
                     

                    </div>
                </div>
      </div>
	</div>  

 
 </div>     
                        


          
 
          
   <?php $this->load->view('footer'); ?>         
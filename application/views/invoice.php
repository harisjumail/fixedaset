 <?php $this->load->view('header'); ?>

  <!-- ============================================================== -->
  <?php
			
	//		echo $ok;echo "<br>";echo $ok0;echo "<br>";echo $ok1;echo "<br>";echo $ok2;echo "<br>";
			
                if($this->session->flashdata('message'))
                {            
                   echo $this->session->flashdata("message");
										
				  }										
										                         
          ?> 
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="card card-body printableArea">
                            <h5><b>INVOICE</b> <span class="pull-right">#<?php echo $invoice->main_kode;?></span></h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h5> &nbsp;<b class="text-danger">Sekolah Dian Harapan</b></h5>
                                            <p class="text-muted m-l-5"><small><?php echo $invoice->sekolah_alamat;?></small>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h5>To,</h5>
                                            <h5 class="font-bold"><?php echo $invoice->main_nama;?></h5>
                                         
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div style="clear: both;">
   <?php     if($invoice->main_confirmu!="2"){      ?> 
                                    <div class="card">
                      
               <h5><code>ini adalah invoice registrasi pendaftaran Online Sekolah Dian Harapan
                                                   silakan melakukan pembayaran sesuai dengan data di bawah ini  </code></h5>
	
                                 
                                       </div>  
 <?php }?>                                       
                                       <code>          
                                        <table class="table table-hover">
    										  <tr>
                                                    <td>Transfer to</td>
                                                    <td class="text-left"><?php 
												//	foreach($bank as $row){
	//	echo $row->bank_norek; echo " ".$row->bank_nama; echo" ".$row->bank_atasn;echo"<br>";
										//			}
										echo $invoice->main_namabank;	
													?></td>
                                                </tr>  
                                                
                                                <tr>
                                                    <td>Payment Number</td>
                                                    <td class="text-left"></td>
                                                </tr>                                                
                                                                                        
                                                <tr>
                                                    <td>Payment Code</td>
                                                    <td class="text-left"><?php echo $invoice->main_kode;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Receive From</td>
                                                    <td class="text-left"><?php echo $invoice->main_nama;?> </td>
                                                </tr>
                                                
                                          <tr>
                                                    <td>Grade</td>
                                                    <td class="text-left"><?php echo $invoice->grade_nama;?> </td>
                                                </tr>
                                                
 <tr>                                                
                                                
                                                
 <tr>
                                                    <td>Amount in word</td>
                                                    <td class="text-left">  <b> <?php echo $saythewords;?> Rupiah</b> </td>
                                                </tr>                                                 
                                                
 <tr>
                                                    <td>Amount</td>
                                                    <td class="text-left">  <b> Rp <?php echo number_format($invoice->main_jumlahbyr);?> </b> </td>
                                                </tr>                                                 
                                                
                                           
                                                <tr>
                                                    <td>Payment for</td>
                                                    <td class="text-left"> Registration Fee TA.2020/2021 </td>
                                                </tr>
												  
                                                
	 <tr>
                                                    <td>Payment Status</td>
       <td class="text-left"> <?php 
	   if($invoice->main_confirmu=="2"){
		  echo "SUDAH DI KONFIRMASI OLEH ADMIN";}
		  elseif($invoice->main_confirmu=="1"){echo "PEMBAYARAN SUDAH DI KONFIRMASI, MOHON MENUNGGU KONFIRMASI ADMIN";} 
		  else{echo "BELUM KONFIRMASI, SILAHKAN KE MENU KONFIRMASI PEMBAYARAN";}
		  
		   ?> </td>
                                                </tr>                                                                                              
                                                
                                        </table> 
                                        </code>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p><?php echo $invoice->sekolah_bot;?> , <?php echo date('d-m-Y');?></p>
                                        <p> </p>
                                        <hr>
                                        <h4><b>Finance</b> </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                              
    <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                </div>   
      
      
        <?php $this->load->view('footer'); ?>
		
        
  <script src="<?php echo base_url();?>js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>        
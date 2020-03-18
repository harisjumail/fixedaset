 <?php $this->load->view('header1'); ?>



        <div class="row">

                    <div class="col-md-12">

                        <div class="card card-body printableArea">

                            <h3><b>Invoice</b><!-- <span class="pull-right">Kode pembayaran : <?php //echo $kode;?></span> --></h3>

                            <hr>

                            <div class="row">

                                <div class="col-md-12">

                           

                         Dear Bp/Ibu <?php echo $orangtua;?>, <br />

                         Terima kasih sudah melakukan pendaftaran di <?php echo $namasekolah; ?> Harap segera  Lakukan pembayaran pembelian formulir ke Nomor Rekening dibawah ini :

                         <br />

                         <br />

                         

                         <h4>

                                <?php

								

							foreach($bank as $row){   

								 echo $row->bank_nama." ".$row->bank_norek." ".$row->bank_atasn;  echo " <br>";  

							}

								 

								 ?>

                                              

                                 

                              </h4>     

                              

                     <h4>   Kode pembayaran : <?php echo $kode;?>  </h4>    <br />

                                  

                       Mohon simpan kode di atas sebagai nomor konfirmasi pembayaran, <br />
                       Setelah melakukan pembayaran anda masuk lagi ke sistem ini dan masuk pada menu konfirmasi pembayaran.      
                                

                                        

                                    </div>

                          

                                

                                                              

                                

                                

                                <div class="col-md-12">

                                

                                <br />

    					  <div class="pull-left">

                                        <address>

                        Status Pembayaran :       

<?php 



									   if($status == "0"){

													echo "

                                                <span class='label label-danger'>Belum bayar</span>";

												}

												elseif($status == "1"){

													echo "

                                                <span class='label label-warning'>Menunggu konfirmasi admin</span>";	

												}

												elseif($status == "2"){

													echo "

                                                <span class='label label-info'>Lunas</span>";	

												}

?>





                            

                              

                              

                              

                              

                                        </address>

                                    </div>                                

                                

                                    <div class="pull-right m-t-30 text-right">

                                     

                                        <hr>

                                        <h3><b>Total : </b>Rp.<?php echo number_format($jumlahbayar);?></h3>

                                    </div>

                                    <div class="clearfix"></div>

                                    <hr>

                                    <div class="text-right">

                                    

                                   <!-- 

                                        <button class="btn btn-danger" type="submit"> Konfirmasi pembayaran </button>

                                        

                                        -->

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
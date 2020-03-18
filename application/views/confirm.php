

 <?php $this->load->view('header1'); ?>
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
          

                      
<form action="<?php echo base_url();?>private_area/confirmoke" method="post">     
                      
        			 <div class="row">
                               <div class="col-md-6">                               
		 							<div class="form-group">
           <label for="caratransfer">Cara pembayaran <span class="text-danger">*</span></label>
                                                      <h6 class="card-subtitle">Payment Methode : </h6>
                                                    <select class="custom-select form-control" id="catra" name="catra">
                                                        <option value="">Pilih Cara pembayaran</option>
<option value="Bayar Cash" <?php if(set_value('catra')=="Bayar Cash"){echo "selected";}?>>Bayar Cash</option>
<option value="Internet Banking" <?php if(set_value('catra')=="Internet Banking"){echo "selected";}?>>Internet Banking</option>
<option value="Transfer Tunai" <?php if(set_value('catra')=="Transfer Tunai"){echo "selected";}?>>Transfer tunai</option> 
  <option value="Mesin EDC" <?php if(set_value('catra')=="Transfer Tunai"){echo "selected";}?>>Mesin EDC</option> 
                                                    </select>
 <span class="text-danger"><?php echo form_error('catra'); ?></span>                                                      
                                       </div>
                                       </div>
                                       
                                       
                       <div class="col-md-6">                               
		 							<div class="form-group">
                                                    <label for="trabank">Transfer ke bank <span class="text-danger">*</span></label>
                                                      <h6 class="card-subtitle">Transfer to Bank : </h6>
      											  <select class="custom-select form-control" id="trabank" name="trabank">
                                                        <option value="">Pilih Bank</option>
                                                        
                                                        
  <?php foreach($bank as $rowb){?>                                                         
                                                         
<option value="<?php echo $rowb->bank_nama."-".$rowb->bank_norek;?>"
<?php if (set_value('trabank')== $rowb->bank_nama."".$rowb->bank_norek){echo "selected";}?>>
<?php echo $rowb->bank_nama."-".$rowb->bank_norek."-".$rowb->bank_atasn;?></option>
<?php } ?>                                                          
         </select>
                                                    
 <span class="text-danger"><?php echo form_error('trabank'); ?></span>                                                      
                                                    
                                       </div>                               
       					    </div>
           
        			  </div>        
                      
                      <div class="row">
                      			<div class="col-md-6">
                                <div class="form-group">


                 <label for="alamat perusahaan">Nama pengirim <span class="text-danger">*</span></label>
                 
				<h6 class="card-subtitle">Name : </h6>                 
                 
                <input type="text" class="form-control" id="napeng" name="napeng" value="<?php echo set_value('napeng');?>">
  <span class="text-danger"><?php echo form_error('napeng'); ?></span>  
  
  

  
     
                               </div>
                                </div>
                                
                                
                      			<div class="col-md-6">
                                
                                
                                
					<div class="form-group">


                 <label for="alamat perusahaan">Jumlah transfer <span class="text-danger">*</span></label>
                 
				<h6 class="card-subtitle">Ammount : </h6>      
          
                 
                <input type="text" class="form-control" id="jutransc" name="jutransc" value="<?php echo set_value('jutransc');?>">

                       <input type="hidden" id="myid" name="myid" value ="<?php echo $invoice->main_id;?>" />
                       	 <input type="hidden" id="mypay" name="mypay" value="<?php echo $invoice->main_jumlahbyr; ?>"        
                                 <span class="text-danger"><?php echo form_error('jutransc'); ?></span>  
                               </div>                                
                                
                             
                                </div>                                
                                
                      </div>   
                      
		<div class="row">
        
                                            <div class="col-md-6">
                                                <div class="form-group">
                    <label for="tglbayar">Tanggal bayar <span class="text-danger">*</span></label>
                    
                    <h6 class="card-subtitle">Date of transfer : </h6>
                    
                    
<input type="date" class="form-control" id="tglbayar" name="tglbayar" value="<?php echo set_value('tglbayar');?>"> 
                     
                         <span class="text-danger"><?php echo form_error('tglbayar'); ?></span>  
                                                                 </div>
                                                            </div>        
   
   
   
     			<div class="col-md-6">
                                <div class="form-group">
				
				 <input type="hidden" value="<?php echo $invoice->sekolah_email;?>" name="emails" />
                 <label for="alamat ammount">Kode pembayaran</label>
				 <h6 class="card-subtitle">Payment code : </h6>   
                 <label for="alamat ammount2"><h1><?php echo $invoice->main_kode;?></h1></label>
       			 <input type="hidden" class="form-control" id="kodreg" name="kodreg" value="<?php echo $invoice->main_kode;?>">           
                                
                               </div>
                                </div> 

        
        </div>                      
      
 
 	<div class="button-box">
              <button type="submit" class="btn waves-effect waves-light btn-info" 
              value="<?php echo $invoice->main_id?>kirim" name="submit">Kirim</button> 
				                                  
             </div>
 
 
      
                     

                    </div>
                </div>
      </div>
	</div>  

         </form> 
 </div>     
                        




	<script type="text/javascript">
		
		var rupiah = document.getElementById('jutransc');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value);
		});

		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? + rupiah : '');
		}
	</script>



          
 
          
   <?php $this->load->view('footer'); ?>         
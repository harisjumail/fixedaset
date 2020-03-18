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
                  
                                                          
                                     <div class="col-md-12">

                                  <div class="table-responsive" style="clear: both;">
        
        
        
        
        
                                      <table>
                                      <tr>
                                      <td >                
                                        <img src="<?php echo base_url();?>assets/images/formulirheadtex.png"  />
                                       </td>
                                      <td class="align-bottom" ><font size="+2">
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<b><u><?php echo $main->sekolah_nama?></u> <?php echo $main->tingkat_nama;?></b></font>
                                   	</td>
                                    </tr>
                                    </table>
                                     <br />
                                   
                                    <table class="table table-bordered table-hover ">
                                    <thead>
                                    <th colspan="3" bgcolor="#000066">
                                     
                                <h6 class="text-white"><small><b>FORMULIR PENDAFTARAN / REGISTRATION FORM</b></small></h6>
                                 
                                   </th>
                                      </thead>
                                               <tbody>
                                                <tr>
                                                    <td class="text-center" rowspan="5" width="20%">
                                                    



       <div class="align-self-center"> 
       <img src="<?php echo base_url()?>assets/images/users/default.png" class="img-circle" width="100">
       
                               
                        </div>                                                    
                                                    
                                                    
                                                    </td>
                                                    <td width="30%"><small>(Diisi oleh bagian pendaftaran / <code>office use only</code>)</small></td>
                                                    <td class="text-left"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><small>No. Formulir /<code> Form No. </code>: </small></td>
                                                    <td width="40%">
<small><b><em><?php echo $main->main_noformulir;?> </em></b></small>                                                    
                                                    
                                                    </td>
                                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><small>No. Induk Siswa / <code>Student No. </code> :</small></td>
                                                    <td></td>
                                          
                                                </tr>
                                                
             									  <tr>
                                                    <td class="text-left"><small>Tgl.Pendaftaran /<code> Registration Date </code>:</small>
                                                    
                                                    
                                                    </td>
                                                    <td>
<small><b><em><?php echo date("d-m-Y",strtotime($main->main_tgldaftar))?> </em></b></small>                                                    
                                                    
                                                    </td>
                                          
                                                </tr>   
                                                
                                                  <tr>
                                                    <td class="text-left"><small>Mendaftar untuk / <code>Applying for </code>:</small></td>
                                                    <td></td>
                                          
                                                </tr> 
                                                
                                             </tbody>
                                             </table>
                           
                            <table class="table table-bordered table-hover">
                            	<thead>
                                <th colspan="5" bgcolor="#000066">               
                         	
                                <h6 class="m-b-0 text-white"><small><b>DATA SISWA / STUDENT DATA</b></small></h6>
                           
                               </th>
                               </thead> 
                               
                            <tbody>
  							 <tr>
 <td colspan="2" class="text-left" ><small>Nama Depan / <code>First Name: </code>  </small><br /></td>
  <td colspan="2" class="text-left" ><small>Nama Tengah / <code> Middle Name: </code></small> <br /></td>
  <td colspan="1" class="text-left" ><small>Nama Belakang / <code>Family Name:</code> </small><br /></td>
                                                </tr>                                                 
                                                
                                                <tr>
<td colspan="5"><small>Nama Sesuai dengan Akte Lahir/<code>Name Stated on Birth Certificate:</code> <br />

	<b><em><?php echo $main->main_nama;?></em></b>
  </small>  </td>
                                                </tr>     
                                                
                                                <tr>
                      <td colspan="5"><small>Jenis Kelamin / <code>Gender:</code><b><em> <?php echo $main->main_jk;?></em> </b></small></td>
                                                </tr>                                                  
                                                            
                                                <tr>
                        <td colspan="5"><small>Tempat & Tanggal Lahir / <code> Place & Date of Birth: </code> 
						<b><em><?php echo $main->main_temptlahir;?>, <?php echo date("d-m-Y",strtotime($main->main_tgllahir))?> </em></b></small> </td>
                                                </tr>                                                                                         
   
                                                <tr>
                           <td colspan="2" class="text-left"><small>Kewarganegaraan / <code>Nationality:</code> <br />
                          <b><em><?php echo $main->main_kewarganegaraan;?></b></small></em> </td>
                          <td colspan="2" class="text-left"><small>Bahasa Ibu / <code>Mother Tongue: </code></small><br /> </td>  
                           <td colspan="1" class="text-left"><small>Agama / <code>Religion:</code> <br />
                          <b><em> <?php echo $main->main_agama;?> </em></b>
                           
                           </small>
                           
                            </td>                                
                                                </tr>
   
												 <tr>
                          <td colspan="3"><small>Alamat Surat Menyurat / <code> Mailing Address: </code><br />
                         <em> <?php echo $main->main_alamat;?></em>
                           </small> </td>
                          
                                 <td colspan="2" class="text-left"><small>Email: <br /> <br /> 
                               <em>  <?php echo $main->email;?></em>
                                 
                                 </small></td>
                                 
                          
                                                </tr>   
                                                
                                                
								 <tr>
                          <td colspan="3"><small>Nomor Telepon / <code> Phone Number:  </code> <b>
						<em>  <?php echo $main->main_notlprmha;?></b> </em></small> </td>
                          
                       <td colspan="2" class="text-left"><small>HP / <code> Mobile: </code>   </small></td>
                                 
                          
                                                </tr>
                                                
                                                
								 <tr>
                          <td colspan="3"><small>Sekolah Asal / <code> Current School: </code> 
                          <b><em><?php echo $main->main_na_as_sekolah;?></b></em></small>  </td>
                          
                       <td colspan="2" class="text-left"><small>Kelas / <code> Current Grade : </code>
                       <b><em><?php echo $main->main_kelasskrg;?></em></b>
                       
                        </small></td>
                        		  </tr>                                                                                                                                          				 <tr>
                          <td colspan="5"><small>Alamat Sekolah Asal / <code> Current School Address: </code> 
                         <b><em> <?php echo $main->main_al_as_sekolah;?> </em></b>
                          
                          </small>  </td>
                        </tr>
                        
                         <tr>
                          <td colspan="3"><small>Mendaftar Untuk Kelas / <code> Applying For Grade: </code> 
                         <b> <em><?php echo $main->grade_nama;?></em></b>
                          
                          </small>  </td>
                          
                          <td colspan="2" class="text-center"><small>Tahun Ajaran / <code> Academic Year: </code> </small> </td>
                         </tr>
                                           
                                                
                                            </tbody>
                                        </table>
                                        
                                   <table class="table table-bordered table-hover">
                                   <thead>      
                                       <th colspan="5" bgcolor="#000066">        
                         	
                                <h6 class="m-b-0 text-white"><small><b>DATA ORANG TUA / PARENTS DATA</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
 <td ></td>
  <td width="30%"><small>AYAH / <code>Fathers: </code></small><br /></td>
  <td width="30%"><small>IBU / <code>Mothers:</code> </small><br /></td>
                                                </tr>                                                 
                                                
                                                <tr>
<td><small>Nama /<code>Name:</code></small></td>
<td> <small><b><em><?php echo $main->main_namaa;?></em></b></small> </td>
<td><small><b><em><?php echo $main->main_namai;?></em></b></small>  </td>
                                                </tr>     
                                             
                                                            
                                                <tr>
                        <td><small>Tempat & Tanggal Lahir / <code> Place & Date of Birth: </code> </small> </td>
                        
                        <td> </td>
                        <td> </td>                        
                        
                                                </tr>                                                                                         
   
                                                <tr>
                           <td class="text-left"><small>Kewarganegaraan / <code>Nationality: </code> </small> </td>
                           
                           
                             <td></td>
                            <td></td>
                           	</tr>
                                
                                
							 <tr>
                          <td><small>Alamat Surat Menyurat / <code> Mailing Address: </code> </small> </td>
                          
                                 <td></td>
                            <td></td>
                                 
                          
                                                </tr>                                 
                             
						<tr>
                          <td><small>No. HP / <code> Mobile Number:  </code>  </small> </td>
                          
                            <td></td>
                            <td></td>                             
                          
                            </tr>                              
                             
                                    
							 <tr>
                       
                              <td class="text-left"><small>Surel / <code>Email: </code></small></td>
                                 
                             <td><small><b><em><?php echo $main->main_emaila;?></em></b></small> </td>
                            <td><small><b><em><?php echo $main->main_emaili;?></em></b></small> </td>
                            
		 				             </tr>              
                            
                            
       						 <tr>
                     
                           <td class="text-left"><small>Fax / <code>Fax:</code></small> </td>                                 <td></td>
                            <td></td>
                             </tr>                                                     
                                    
                                    
                                    <tr>
                     
                           <td class="text-left"><small>Agama / <code>Religion:</code></small> </td>                                 <td></td>
                            <td></td>
                                   </tr>
  
                                                
								 <tr>
                          <td><small>Pendidikan / <code> Education: </code> </small>  </td>
                             <td></td>
                            <td></td>
                        		  </tr>                                                                                                                                          				 <tr>
                          <td><small>Pekerjaan & Jabatan / <code> Occupation & Position: </code> </small>  </td>
                             <td><small><b><em><?php echo $main->main_pekerjaana;?></em></b></small> </td>
                            <td><small><b><em><?php echo $main->main_pekerjaani;?></em></b></small> </td>
                        </tr>
                        
                         <tr>
                          <td><small>Penghasilan Bulanan/ <code> Monthly Income: </code> </small>  </td>
                          
     						 <td></td>
                            <td></td>
                         </tr>
    
                         <tr>
<td><small>Nama,Alamat & No.Telp Perusahaan/ <code> Company Name,Address, & Phone No: </code> </small>  </td>
                          
     						 <td>
<small><em>
<?php echo $main->main_naperusa;?>,
<?php echo $main->main_alperusa;?>,
<?php echo $main->main_notlpkntra;?>,
</em></small>                              
                             
                             </td>
                            <td>

<small><em>
<?php echo $main->main_naperusi;?>,
<?php echo $main->main_alperusi;?>,
<?php echo $main->main_notlpkntri;?>,
</em></small>                             
                            
                            </td>
                         </tr>    
               
                                            </tbody>
                                        </table>                                        
                                        
   
                              <table class="table table-bordered table-hover">
                              <thead>
                               <th colspan="5" bgcolor="#000066">           
                         
                                <h6 class="m-b-0 text-white"><small><b>DATA SAUDARA KANDUNG / DATA OF SIBLINGS</b></small></h6>
                             
                               </th>
                               </thead>
                                
                            <tbody>
  							                                                 
                    <?php  for($i=1;$i<=5;$i++){?>                            
                   <tr>
<td><small><?php echo $i; ?>.</small></td>
<td> <small>Tanggal Lahir / <code>Date of Birth: </code> </small></td>
<td> <small>Sekolah / <code>School: </code> </small>
</td>
                 </tr>     
                  
             <?php } ?>
    
                                            </tbody>
                                        </table> 
   
   
                                        
                                   <table class="table table-bordered table-hover">
                                   <thead>      
                                       <th colspan="5" bgcolor="#000066">        
                         	
                                <h6 class="m-b-0 text-white"><small><b>ANGKET UNTUK ORANG TUA / QUERIONNAIRE</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
 <td colspan="2" ><small>Darimana Anda mengetahui tentang Sekolah Dian Harapan / How did you learn about Sekolah Dian Harapan?</small></td>
                                                </tr>                                                 
                                                
                  <tr>
				<td width="50%"><small>1.Referensi/<code>Referral:</code></small></td>
                 <td><small>5.Situs/<code>Website:</code></small> </td>
             	  </tr>     
                  
                  <tr>
				<td width="50%"><small>2.Orang Tua Siswa/<code>SDH Parents:</code></small></td>
                 <td><small>6.Majalah/<code>Magazine:</code></small> </td>
             	  </tr>        
                  
                  <tr>
				<td width="50%"><small>3.Koran/<code>Newspaper:</code></small></td>
                 <td><small>7.Spanduk di/<code>Banner at:</code></small> </td>
             	  </tr>    
                  
                <tr>
				<td width="50%"><small>4.Televisi/<code>Television:</code></small></td>
                 <td><small>8.Poster di/<code>Poster at:</code></small> </td>
             	  </tr>  
                  
        		 <tr>
				<td colspan="2"><small>9.Lain-lain/<code>Others:</code></small></td>
             	  </tr>    
                  
      			 <tr>
				<td colspan="2"><small>Mohon sebutkan alasan Bapak/ibu mendaftarkan di SDH / Kindly state your reasons for applying to SDH:</code></small></td>
             	  </tr>    
                  
				 <tr>
				<td colspan="2">
                
                </td>
             	  </tr>         
				 <tr>
				<td colspan="2"></td>
             	  </tr>                                                                                                 
  
                                            </tbody>
                                        </table> 
   
  
  

                             
                                   <table class="table table-bordered table-hover">
                                   <thead>      
                                       <th colspan="5" bgcolor="#000066">        
                         	
<h6 class="m-b-0 text-white"><small><b>PERSETUJUAN ORANG TUA / PARENTS PERMISSION</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
 <td colspan="2" ><small>Sekolah Dian Harapan menerbitkan majalah sekolah, memasang spanduk, poster, iklan dan megadakan berbagai kegiatan untuk memperkenalkan Sekolah Dian Harapan.Apakah Bapak.Ibu memberikan persetujuan jika anak Bapak/Ibu difoto atau berbagai pengalaman sebagai siswa Sekolah Dian Harapan untuk keperluan tersebut?
 <br />
 <code>
 We produce school magazines, banners, posters, advertisements, and hold many activities to promote our school.Do you give your permission for your sonn or daughter to be photographed or to share their experiences as a Sekolah Dian Harapan student for the above purposes?
 </code>
 </small>

 </td>
 </tr>
 <tr>
 <td> 
 <small>

  1.Ya/<code>Yes</code>

 2.Tidak/<code>No</code>
 </small>

 </td>
   </tr> 
   
   
   
                                                   
                      
                        
                                            </tbody>
                                        </table>  
   
 
 
 
                             
          <table class="table table-bordered table-hover">
                    <thead>      
                      <th colspan="5" bgcolor="#000066">        
                         	
<h6 class="m-b-0 text-white"><small><b>VISI DAN MISI / VISION AND MISSION</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
					 <td colspan="2" >
						VISI DAN MISI SEKOLAH DIAN HARAPAN <br />
                      <small>  
                        VISI : <code>Pengetahuan Sejati iman di dalam Kristus Karakter ilahi. </code> <br />
                        
                        MISI : <code>Menyatakan keutamaan Kristus dan terlibat dalam pemulihan yang bersifat menebus segala seusatu di dalam Dia melalui pendidikan holistis.</code>
                        </small>
 					</td>
                    <td>
                    VISION AND MISSION STATEMENT OF SEKOLAH DIAN HARAPAN <br />
                    
                   <small> VISION : <code>True Knowledge, Fatih in Christ, Godly Character</code> <br />
                    MISSION : <code>Proclaiming the preeminence of Christ and engaging in the redemptive restoration of all things in Him though holistic education</code> </small>
                    
                    </td>
                    
 					</tr>
 	 				  </tbody>
                </table>  
   
   
   
         <table class="table table-bordered table-hover">
                    <thead>      
                      <th colspan="5" bgcolor="#000066">        
                         	
<h6 class="m-b-0 text-white"><small><b>IMPLEMENTASI DAN PRAKTEK / IMPLEMENTATION AND PRACTICE</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
					 <td colspan="2" >
				<small>	Komunitas sekolah Dian Harapan Memuliakan Tuhan dan mengingkatkan kualitas dari komunitas sekolah melalui : <br /> <code>Sekolah Dian Harapan Community seeks to honor God and improve the quality of the school community through</code></small>
 					</td>
                    
 					</tr>
                    <tr>
                    <td width="50%">
                    <small>
   					 HORMAT kepada
                   <li>Tuhan</li>
                   <li>Sesama(Orang tua, Guru, Staf, Rekan)</li>
      				<li>Diri sendiri(Pikiran dan tubuh sebagai bait Allah)</li>
            		<li>Kesucian hidup</li>   
                    <br />
    				 TANGGUNG JAWAB kepada
                   <li>Tuhan</li>
                   <li>Sekolah(Peraturan, Prosedur dan Kebijakan yang berhubungan dengan lingkungan sekolah)</li>
               		<br />
                    
   					KESIAPAN
                   <li>Berpartisipasi secara positif dalam setiap kegiatan, tugas dan acara sekolah.</li>
                   <li>Tepat waktu</li>                   
                                       
                    </small>
                    </td>
                    <td width="50%">
                    
                    <small>
                    <code>
   					 RESPECT 
                   <li>God</li>
                   <li>Others(Parents, Teachers, Staf, Peers)</li>
      				<li>Self(Mind and body as the Temple of God)</li>
            		<li>Sancity of Life</li>   
                    <br />
    				 RESPONSIBILTY
                   <li>To God</li>
                   <li>To School(Rules, Procedures, Policies related to the school environment)</li>
               		<br />
                    
   					READINESS
                   <li>Positive participation in all activities, assignments and events.</li>
                   <li>Punctuality.</li>                   
                      </code>                 
                    </small>                    
                    
                    
                    </td>
                    </tr>
 	 				  </tbody>
                </table>     
   
   

         <table class="table table-bordered table-hover">
                    <thead>      
                      <th colspan="5" bgcolor="#000066">        
                         	
<h6 class="m-b-0 text-white"><small><b>PERNYATAAN ORANG TUA / PARENT'S STATEMENT</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  							 <tr>
					 <td colspan="3" >
				<small>
                Dengan menandatangani forumulir ini, maka :
                <li>1.Kami sebagai orang tua, akan bekerja sama dengan sekolah untuk menjalankan bagian kami sebagai pendidik utama anak kami dan mendukung sekolah untuk menjalankan pendidikan Kristen bagi anak kami.</li>
                <li>2.Kami menyatakan bahwa informasi yang kami tulis di formulir ini adalah benar, dan kami bersedia menganggung segala akibatnya apabila informasi yang kami berikan ini tidak benar.</li>
                <li>3.Kami telah membaca, mengerti dan menyetujui segala sesuatu yang tertulis di formulir ini.</li>
                
                </small>
                
 					</td>
                    
 					</tr>
                    <tr>
                    <td>
                    <small><code>
                    By signing this form, then :
                    <li>1.We, as parents, will work together with the school to do our part as prime educators to our child and support the school to implement Christian Education for our child.</li>
                    <li>2.We state that all information we have provided is true, and shall accept responsiblty if the information we have supplied is not accureate.</li>
                    <li>3.We have read, understood and agreed to all clauses stated on this form.</li>
                   	</code>
               
                    
  				 <div class="col-md-12">
                                     <div class="pull-right m-t-30 text-right">
                                        <hr />Tanda Tangan Orangtua / <code>Signature of Parents</code>
										<br /><br /><br /><br /><br /><br />		
                                        Nama / <code>Name</code>
                                     </div>
                              		
                                   
                                  
                                </div>                    
                   </small>
                    </td>
                    </tr>
                    
            
 	 				  </tbody>
                </table>        
   
   
   
        <table class="table table-bordered table-hover">
                    <thead>      
                      <th colspan="5" bgcolor="#000066">        
                         	
<h6 class="m-b-0 text-white"><small><b>PERATURAN SEKOLAH / SCHOOL POLICY</b></small></h6>
                            
                               </th>
                               	</thead>
                            <tbody>
  						
 <tr>
    <td><small>I</small></td>
    <td><small>DANA PEMBANGUNAN DAN PENGEMBANGAN</small></td>
    <td><small><code>I.</code></small></td>
    <td><small><code>ADMISSION FEE</code></small></td>
  </tr>
  <tr>
    <td><small>1.</small></td>
    <td><small>DPP berlaku untuk 1 (satu) siswa.</small></td>
    <td><small><code>1.</code></small></td>
    <td><small><code>The DPP is valid for one student.</code></small></td>
  </tr>
  <tr>
    <td><small>2.</small></td>
    <td><small>DPP harus dibayarkan ke rekening Yayasan Pendidikan Pelita Harapan</small></td>
    <td><small><code>2.</code></small></td>
    <td><small><code>The DPP to be paid to the account of Yayasan Pendidikan Pelita Harapan.</code></small></td>
  </tr>
  <tr>
    <td><small>3.</small></td>
    <td><small>Pembayaran DPP tidak dapat dikembalikan atau dialihkan dalam bentuk lain maupun kepada siswa lain/saudara sekandung dengan alasan apapun. DPP dapat diambil sisanya apabila siswa dinyatakan meninggal dunia.Dalam hal tersebut DPP akan disusutkan sesuai tahun ajaran, tetap diperhitungkan 1(satu) tahun penggunaan pada tahun ajaran tersebut.</small></td>
    <td><small><code>3.</td>
    <td><small><code>The DPP is neither refundable nor transferable for any reason to antoher student including siblings.The DPP is refundable only if the student passes away*.The DPP be depreciated one full year at the beginning of the school year.(*the despreciated portion only).</td>
  </tr>   
  
  <tr>
    <td><small>4.</small></td>
    <td><small>Pembayaran DPP tidak menjamin calon siswa diterima di SDH, kecuali persyaratan dan peraturan sekolah, serta peraturan pemerintah yang berlaku dipenuhi.</small></td>
    <td><small><code>4.</td>
    <td><small><code>Payment of the DPP does not guarantee the acceptance of student at SDH unless all admission requirements and procedures have been fulfilled.</td>
  </tr>    
  
 <tr>
    <td><small>II</small></td>
    <td><small>SUMBANGAN PENYELENGGARAAN PENDIDIKAN (SPP)</small></td>
    <td><small><code>II.</code></small></td>
    <td><small><code>SCHOOL FEE (SPP)</code></small></td>
  </tr>
  <tr>
    <td><small>1.</small></td>
    <td><small>SPP harus dibayarakan ke rekening yayasan Pendidikan Pelita Harapan.</small></td>
    <td><small><code>1.</code></small></td>
    <td><small><code>The SPP has to be paid the account of Yayasan Pendidikan Pelita Harapan.</code></small></td>
  </tr>
  <tr>
    <td><small>2.</small></td>
    <td><small>SPP yang telah dibayarkan tidak dapat ditarik kembali apabila siswa mengundurkan diri dari sekolah dan tidak dapat dialihkan dalam bentuk lain maupun kepada siswa lain / saudara kandung, dengan alasan apapun.</small></td>
    <td><small><code>2.</code></small></td>
    <td><small><code>The paid SPP is neither refundable nor transferable to antoher student including direct member of the family for any reason.</code></small></td>
  </tr>
  <tr>
    <td><small>3.</small></td>
    <td><small>SPP dapat berubah pada setiap awal tahun ajaran.</small></td>
    <td><small><code>3.</code></small></td>
    <td><small><code>The Price of SPP is subject to change at the beginning of each school year.</code></small></td>
  </tr>              
  
    <tr>
    <td><small>4.</small></td>
    <td><small>Pembayaran terkahir SPP bulanan paling lambat tanggal 10 setiap bulannya.Apabila melewati tanggal tersebut, maka akan dikenakan denda sesuai aturan berlaku.</small></td>
    <td><small><code>4.</code></td>
    <td><small><code>The SPP payment is due by the 10th of every month. if this due date is missed, a late fee will be charged according to the school regulation.</code></small></td>
  </tr> 
              
    <tr>
    <td><small>5.</small></td>
    <td><small>Apabila tidak ada pembayaran SPP selama 2(dua) bulan berturut-turut maka SDH berhak untuk tidak mengijinkan siswa mengikuti Kegiatan Belajar Mengajar (KBM).</small></td>
    <td><small><code>5.</code></small></td>
    <td><small><code>If there is no SPP payment made for 2(two) months consecutively, SDH reserves the right to prohibit student to join the Learning and Teaching Process</code></small>.</td>
  </tr> 
  
  
  
 <tr>
    <td><small>III</small></td>
    <td><small>PERATURAN SEKOLAH </small></td>
    <td><small><code>III.</code></small></td>
    <td><small><code>SCHOOL RULES & REGULATION</code></small></td>
  </tr>
  <tr>
    <td><small>1.</small></td>
    <td><small>SDH merupakan sekolah dengan fondasi Kristen Alkitabiah.</small></td>
    <td><small><code>1.</code></small></td>
    <td><small><code>SDH is a school with a Biblical Christian Foundation.</code></small></td>
  </tr>
  <tr>
    <td><small>2.</small></td>
    <td><small>Siswa SDH harus menaati semua peraturan sekolah baik yang tertulis maupun yang tidak tertulis</small></td>
    <td><small><code>2.</code></small></td>
    <td><small><code>All SDH students must abide by the rules and regulations of the school, written and unwritten</code></small></td>
  </tr>
  <tr>
    <td><small>3.</small></td>
    <td><small>SDH mempunyai hak untuk memberikan langkah-langkah disiplin yang dipandang tepat dan perlu untuk sikap-sikap yang diyakini tidak sesuai dengan budaya dan ekspektasi sekolah.</small></td>
    <td><small><code>3.</code></small></td>
    <td><small><code>SDH reserves the right to apply disciplinary actions that are deemed necessary and applicable to correct behaviors that do not correspond with the school's culture and expectations.</code></small></td>
  </tr>              
  
    <tr>
    <td><small>4.</small></td>
    <td><small>
    SDH mempunyai hak untuk mengeluarkan siswa yang :
    <li>tidak mematuhi peraturan sekolah / melakukan pelanggaran tata tertib sekolah.</li>
    <li>memberikan dokumen dan informasi yang ternyata palsu / tidak benar.</li>
    <li>tidak dapat melengkapi persyaratan dokumen yang diwajibkan</li>
    </small></td>
    <td><small><code>4.</code></td>
    <td><small><code>
    SDH reserves the right to terminate the enrollment of a student if :
    <li>he/she does not abide by rules and regulations of the school</li>
    <li>submits any falsified documents and/or information to he school</li>
    <li>documentation required to be submitted is not complete</li>
    </code></small></td>
  </tr> 
              
    <tr>
    <td><small>5.</small></td>
    <td><small>SDH berhak untuk melakukan perubahan peraturan bila diperlukan.</small></td>
    <td><small><code>5.</code></small></td>
    <td><small><code>SDH reserves the right to make changes to the rules and regulations when necessary</code></small>.</td>
  </tr>   
  
  	<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>
       <small><b>TANDA TANGAN ORANGTUA / SIGNATURE OF PARENTS </b>
    <br />
   
    <br />
    
     <small><em>materai 6000</em></small>
    <br /><br />
    
    <hr />
    Nama / Name
    </small>
    </td>
    </tr>

             
              
 	 				  	</tbody>
                </table>        
   
   
                                       
                                        
                                    </div>
                                </div>           
                            
                            
                            
                        </div> <!-- print area-->
                       
                       
                     <div class="col-md-12">
                                                                     
                                    <hr>
                                    <div class="text-right">
                              
    <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div> <!-- col md 12-->                       
                       
                        
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
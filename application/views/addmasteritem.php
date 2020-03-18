      <?php $this->load->view('header'); ?>

      <!-- page title star -->

      <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Master Item</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Master</li>
                            <li class="breadcrumb-item active">Master Item</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>

<!-- page title end -->

<!-- form input start -->
<form name="form1" method="post" action="<?php echo base_url();?>admin_area/mastermitact1"> 
<div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                          
                            <div class="card-body">
                            <?php

if($this->session->flashdata('message'))

    {            

   echo $this->session->flashdata("message");
           
    }								

 
 ?> 
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">                                     
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Item Code</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="itkode" value ="<?php 
                                                        if($cek == "ok"){
                                                            echo $main2->mi_kode;
                                                            }
                                                        ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Item Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="itname" value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mi_namaitem ;
                                                            }
                                                        ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Brand</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="itbrand" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mi_brand ;
                                                            }
                                                        ?>"
                                                        class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">
                                                    Colour</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="itco">

                                                        <?php 
                                                        if($cek == "ok"){
                                                             $b =  $main2->mi_color;
                                                         ?>
                                                            <option value = "" <?php if($b==""){echo "selected";} ?> >-</option>
                                                            <option value = "Red" <?php if($b=="Red"){echo "selected";} ?>>Red</option>
                                                            <option value = "Yellow" <?php if($b=="Yellow"){echo "selected";} ?>>Yellow</option>
                                                            <option value = "Blue" <?php if($b=="Blue"){echo "selected";} ?>>Blue</option>
                                                            <option value = "Orange" <?php if($b=="Orange"){echo "selected";} ?>>Orange</option>
                                                         <?php           

                                                            }

                                                         else{
                                                             ?>
                                        
                                                            <option value = "">-</option>
                                                            <option value = "Red">Red</option>
                                                            <option value = "Yellow">Yellow</option>
                                                            <option value = "Blue">Blue</option>
                                                            <option value = "Orange">orange</option>                                                          
                                                        <?php 
                                                         }   
                                                        ?>           

                                                                                                                      
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Size</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="itsize" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mi_size ;
                                                            }
                                                        ?>"
                                                        
                                                        class="form-control" >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">

                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">


                                                    FA Code</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="itfacode">
                                                         <option value ="">-</option>           
                                                        <?php 
                                                        if($cek == "ok"){
                                                         //    $b =  $main2->mastercat_methode;

                                                         foreach ($facode as $facode2) {
                                                         ?>
                                                            <option value = "<?php echo $facode2->mastercat_id?>"
                                                            <?php 
                                                            if($facode2->mastercat_id == $main2->mi_fa){
                                                              
                                                                echo " selected" ;

                                                            } ?>
                                                             >
                                                            <?php echo $facode2->mastercat_kode; ?></option>
                                                         
                                                         <?php           
                                                    
                                                            }
                                                        }

                                                         else{

                                                            foreach ($facode as $facode2) {        
                                                             ?>
                                                           <option value = "<?php echo $facode2->mastercat_id?>" ><?php echo $facode2->mastercat_nama?></option>
                                                                                                                     

                                                        <?php 
                                                            }
                                                         }   
                                                        ?>           

                                                                                                                      
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                          </div>    



                                          
                                                            
                                            <div class="row"> 


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">
                                                    FA Type</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="ittype">

                                                        <?php 
                                                        if($cek == "ok"){
                                                             $b =  $main2->mi_fatype;
                                                         ?>
                                                            <option value = "" <?php if($b==""){echo "selected";} ?> >-</option>
                                                            <option value = "1" <?php if($b==1){echo "selected";} ?>>Fixed Asset</option>
                                                            <option value = "2" <?php if($b==2){echo "selected";} ?>>Barang Modal</option>
                                                         <?php           

                                                            }

                                                         else{
                                                             ?>      
                                                            <option value = "">-</option>
                                                            <option value = "1">Fixed Asset</option>
                                                            <option value = "2">Barang Modal</option>                                                                                                            
                                                            <?php 
                                                         }   
                                                        ?>                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3"></label>
                                                    <div class="col-md-9">

                                                    <?php 
                                                        if($cek == "ok"){

                                                     ?>
         <button type="submit" name="tombol" value = "<?php echo $main2->mi_id?>edi" class="btn btn-success">Submit</button>
                                                     <?php       
                                                         }
                                                      else{   
                                                    ?>

   <button type="submit" name="tombol" value = "simpan" class="btn btn-primary">Submit</button>                                
                                                    <?php
                                                    } 
                                                    ?>

    <button type="submit" name="tombol" value="baru" class="btn btn-inverse"> New </button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                  
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           
<!-- form input end-->

        </form>
                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                            

        <div class="table-responsive">

                                

                                

<form name="form1" method="post" action="<?php echo base_url();?>Admin_area/editmasteritem"> 

                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">

                                        <thead>

                                        

                                            <tr>

                                                <th>No</th>

                                               <th>Kode Item</th> 

                                                <th>Nama Item</th>

                                                <th>Brand</th>

                                                <th>Colour</th>

                                                <th>Size</th>

                                                <th>Fa Kode</th> 

                                    			<th>Fa type</th>     

                                            </tr>

                                        </thead>

                                        <tbody>
                

 <?php $no=1; foreach($main as $row){ ; ?>                                           

                                        

                                            <tr>

                                                <td>

											<b><small>	<?php echo $no; ?></small></b>

 

                                                </td>

  										<td>
                                          <b><small> <?php echo $row->mi_kode ?>   </small></b> 
                                        </td>                                          

                                                                                                

                                           <td> <b><small><?php echo $row->mi_namaitem ?> </small></b> </td>

                                           <td> <b><small><?php echo $row->mi_brand ?> </small></b> </td>

                                           <td> <b><small><?php echo $row->mi_color ?> </small></b> </td>

                                           <td> <b><small><?php echo $row->mi_size ?> </small></b> </td>

                                           <td> <b><small><?php echo $row->mastercat_kode ?> </small></b> </td>

                                           <td><b><small><?php 
                                           if($row->mi_fatype == 1){
                                          
                                            echo "Fixed Asset"; 
                                          
                                             }
                                           elseif($row->mi_fatype == 2){

                                            echo "Barang Modal";     

                                             }

                                           ?></small></b> </td>
                                         

  <td>


<!-- <input type="hidden" name="idjadwal" value="<?php //echo $row->jadwal_id;?>" /> -->


<button type="submit" value="<?php echo $row->mi_id;?>del" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Anda akan menghapus item ini?')"><i class="ti-trash" aria-hidden="true"></i></button>
<button type="submit" value="<?php echo $row->mi_id;?>edi" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit" ><i class="ti-pencil" aria-hidden="true"></i></button>

<!-- <button type="button" class="pull-right btn btn-secondary btn-circle" data-toggle="modal" data-target="#editjadwal<?php //echo $row->jadwal_id;?>"><i class="fa fa-pencil-square-o"></i></button>  -->

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

        <?= $pagination; ?>

        </div>

</div>

</div>

</div>

</div>

</div>



    </form> 

   
  <?php $this->load->view('footer'); ?>
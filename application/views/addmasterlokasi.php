      <?php $this->load->view('header'); ?>

      <!-- page title star -->

      <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Master Lokasi</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Master</li>
                            <li class="breadcrumb-item active">Master Lokasi</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>

<!-- page title end -->

<!-- form input start -->
<form name="form1" method="post" action="<?php echo base_url();?>admin_area/masterlokact1"> 
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
                                                    <label class="control-label text-right col-md-3">
                                                    Departemen</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="departemen">
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

                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">
                                                    Sub-Departemen</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="subdep">
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
                                                    <label class="control-label text-right col-md-3">Lokasi</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="lokasi" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mi_size ;
                                                            }
                                                        ?>"
                                                        
                                                        class="form-control" >
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

                                

                                

<form name="form1" method="post" action="<?php echo base_url();?>Admin_area/editmasterlokasi"> 

                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">

                                        <thead>

                                        

                                            <tr>

                                                <th>No</th>

                                               <th>Departemen</th> 

                                                <th>Subdepartemen</th>

                                                <th>Lokasi</th>
   

                                            </tr>

                                        </thead>

                                        <tbody>
                

 <?php $no=1; foreach($main as $row){ ; ?>                                          

                                        

                                            <tr>

                                                <td>

											<b><small>	<?php echo $no; ?></small></b>

 

                                                </td>

  										<td>
                                          <b><small> <?php echo $row->masterlok_dep ?>   </small></b> 
                                        </td>                                        

                                                                                                

                                           <td> <b><small><?php echo $row->masterlok_sub ?> </small></b> </td>

                                           <td> <b><small><?php echo $row->masterlok_lokasi ?> </small></b> </td>


                                 
                                         

  <td>


<!-- <input type="hidden" name="idjadwal" value="<?php //echo $row->jadwal_id;?>" /> -->


<button type="submit" value="<?php echo $row->masterlok_id;?>del" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Anda akan menghapus item ini?')"><i class="ti-trash" aria-hidden="true"></i></button>
<button type="submit" value="<?php echo $row->masterlok_id;?>edi" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit" ><i class="ti-pencil" aria-hidden="true"></i></button>

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
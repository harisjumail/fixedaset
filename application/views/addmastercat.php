      <?php $this->load->view('header'); ?>

      <!-- page title star -->

      <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Master Kategory</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Master</li>
                            <li class="breadcrumb-item active">Master Kategory</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>

<!-- page title end -->

<!-- form input start -->
<form name="form1" method="post" action="<?php echo base_url();?>admin_area/mastercatact1"> 
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
                                                    <label class="control-label text-right col-md-3">FA Kode</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="fakode" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                            echo $main2->mastercat_kode ;
                                                            }
                                                        else{
                                                           // echo "bro";
                                                            echo set_value('fakode');
                                                        }    
                                                        ?>" 
                                                        class="form-control">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">FA Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="faname" value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mastercat_nama ;
                                                            }
                                                        else{

                                                          echo set_value('faname');  
                                                        }    

                                                        ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">FA No</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="fano" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mastercat_fano ;
                                                            }
                                                         else{
                                                         echo set_value('fano');       

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
                                                    Dep. Methode</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control custom-select" name="famethode">

                                                        <?php 
                                                        if($cek == "ok"){
                                                             $b =  $main2->mastercat_methode;
                                                         ?>
                                                            <option value = "" <?php if($b==""){echo "selected";} ?> >-</option>
                                                            <option value = "1" <?php if($b==1){echo "selected";} ?>>Strihgt Line Methode</option>
                                                            <option value = "2" <?php if($b==2){echo "selected";} ?>>Saldo Menurun</option>
                                                            <option value = "3" <?php if($b==3){echo "selected";} ?>>Decreasing Change Methode</option>
                                                            <option value = "4" <?php if($b==4){echo "selected";} ?>>Sum Of Year Digit Methode</option>
                                                         <?php           

                                                            }

                                                         else{
                                                             ?>
                                        
                                                            <option value = "" <?php echo set_select('famethode', '', TRUE); ?>>-</option>
                                                            <option value = "1" <?php echo set_select('famethode', '1'); ?>>Strihgt Line Methode</option>
                                                            <option value = "2" <?php echo set_select('famethode', '2'); ?>>Saldo Menurun</option>
                                                            <option value = "3" <?php echo set_select('famethode', '3'); ?>> Decreasing Change Methode</option>
                                                            <option value = "4" <?php echo set_select('famethode', '4'); ?>>Sum Of Year Digit Methode</option>                                                             

                                                        <?php 
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
                                                    <label class="control-label text-right col-md-3">Usefull Life</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="fause" 
                                                        
                                                        value ="<?php 
                                                        if($cek == "ok"){
                                                        echo $main2->mastercat_year ;
                                                            }
                                                         else{
                                                          echo set_value();      

                                                         }   
                                                        ?>"
                                                        
                                                        class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                         </div>

                                


                                 
                                    </div>
                                  
                                 
                                
                            </div>
                        </div>
                    </div>
                </div>
           
<!-- form input end-->


<div class="row"> <!--  mulai card 2--> 

<div class="col-12">

    <div class="card">

        <div class="card-body">
        <p class="text-muted m-b-30 font-13"> Acquisition Cost : </p>            
        <div class = "row">

                                        
<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa No </label>
       <div class="col-md-9">

<input type="text" name="faccno" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coano1 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa Name </label>
       <div class="col-md-9">

<input type="text" name="accona" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coana1 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


</div> 

        </div>  
    </div>  
</div>  

</div> 

<!-- end card2-->


<div class="row"> <!--  mulai card 3--> 

<div class="col-12">

    <div class="card">

        <div class="card-body">
        <p class="text-muted m-b-30 font-13"> Acm Dep/Amort : </p>

            
        <div class = "row">

                                        
<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa No </label>
       <div class="col-md-9">

<input type="text" name="decono" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coano2 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa Name </label>
       <div class="col-md-9">

<input type="text" name="decona" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coana2 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


</div> 

        </div>  
    </div>  
</div>  

</div> 

<!-- end card 3-->

<div class="row"> <!--  mulai card 4--> 

<div class="col-12">

    <div class="card">

        <div class="card-body">
        <p class="text-muted m-b-30 font-13"> Dep / Amort Exp - Production : </p>

            
        <div class = "row">

                                        
<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa No </label>
       <div class="col-md-9">

<input type="text" name="excono" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coano3;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa Name </label>
       <div class="col-md-9">

<input type="text" name="excona" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coana3;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


</div> 

        </div>  
    </div>  
</div>  

</div> 

<!-- end card 4-->

<!--  mulai card 5--> 
<div class="row"> 

<div class="col-12">

    <div class="card">

        <div class="card-body">
        <p class="text-muted m-b-30 font-13"> Dep / Amort Exp - Selling : </p>

            
        <div class = "row">

                                        
<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa No </label>
       <div class="col-md-9">

<input type="text" name="amcono" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coano4 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa Name </label>
       <div class="col-md-9">

<input type="text" name="amcono" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coana4;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


</div> 

        </div>  
    </div>  
</div>  

</div> 

<!-- end card 5-->


<!--  mulai card 6--> 
<div class="row"> 

<div class="col-12">

    <div class="card">

        <div class="card-body">
        <p class="text-muted m-b-30 font-13"> Dep / Amort Exp - Gen & Adm : </p>

            
        <div class = "row">

                                        
<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa No </label>
       <div class="col-md-9">

<input type="text" name="gecono" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coano5;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


<div class ="col-md-6">
  <div class="form-group row">
       <label class="control-label text-right col-md-3">Coa Name </label>
       <div class="col-md-9">

<input type="text" name="gecona" value ="<?php 
  if($cek == "ok"){
   echo $main2->mastercat_coana5 ;
    }
   ?>" class="form-control">
       </div>
   </div>

</div>


</div> 

        </div>  
    </div>  
</div>  

</div> 

<!-- end card 6-->


<div class="row"> <!--  mulai card 7--> 

<div class="col-12">

    <div class="card">

        <div class="card-body">

        <div class ="row">              
             <!--/span-->
            <div class="col-md-12">
                <div class="form-group row">
                    
                       <div class="col-md-12">

                         <?php 
                           if($cek == "ok"){

                         ?>
         <button type="submit" name="tombol" value = "<?php echo $main2->mastercat_id?>edi" class="btn btn-success">Submit</button>
                                                     <?php       
                                                         }
                                                      else{   
                                                    ?>

   <button type="submit" name="tombol" value = "simpan" class="btn btn-primary">Submit</button>                                
                                                    <?php
                                                    } 
                                                    ?>
   <button type="submit" name="tombol" value="baru" class="btn btn-inverse">New</button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

        </div>  
    </div>  
</div>  

</div> 

<!-- end card 5-->


        </form>





                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                            

        <div class="table-responsive">                      

                                

<form name="form1" method="post" action="<?php echo base_url();?>Admin_area/editmastercat"> 

                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">

                                        <thead>

                                        

                                            <tr>

                                                <th>No</th>

                                               <th>Fa kode</th> 

                                                <th>Name</th>

                                                

                                    			<th>Item type <small>(Fixed Asset/Brng Modal)</small></th>                                                       

                                                

                                                <th>Fa No</th>

                                          <th>Depr Methode</th>         

                                           <th>Usefull Life <small>(year)</small></th>             

                                            

                                            </tr>

                                        </thead>

                                        <tbody>

                                        

                                        

                                        

                                        

 <?php $no=1; foreach($main as $row){ ; ?>                                           

                                        

                                            <tr>

                                                <td>
                                                <b><small>
												<?php echo $no; ?></small></b>



                                                </td>

  										<td>
                                         <b><small> <?php echo $row->mastercat_kode ?>                                  

                                         </small></b>

                                        </td>                                                

                                                                                                

                                           <td><b><small><?php echo $row->mastercat_nama ?></small></b></td>

                                           <td><b><small><?php echo $row->mastercat_type ?></small></b></td>

                                           <td><b><small><?php echo $row->mastercat_fano ?></small></b></td>

                                           <td><b><small><?php echo $row->mastercat_methode ?></small></b></td>

                                           <td><b><small><?php echo $row->mastercat_year ?></small></b></td>
                                         

  <td>


<!-- <input type="hidden" name="idjadwal" value="<?php //echo $row->jadwal_id;?>" /> -->


<button type="submit" value="<?php echo $row->mastercat_id;?>del" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Anda akan menghapus item ini?')"><i class="ti-trash" aria-hidden="true"></i></button>
<button type="submit" value="<?php echo $row->mastercat_id;?>edi" name="tombol" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit" ><i class="ti-pencil" aria-hidden="true"></i></button>

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
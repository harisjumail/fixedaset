<?php $this->load->view('header'); ?>

<!-- page title star -->

<div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h3 class="text-themecolor">Procurment Request</h3>
              </div>
              <div class="col-md-7 align-self-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item">PR</li>
                      <li class="breadcrumb-item active">Input</li>
                  </ol>
              </div>
              <div class="">
                  <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
              </div>
          </div>

<!-- page title end -->

<!-- form input start -->
<form name="form1" method="post" action="<?php echo base_url();?>prc/submitdata"> 

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
                              <div class="form-body">                                     
                                  <!--/row-->
                               
                                  <div class="row">

                                  <div class="col-md-6">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3">
                                             <b> Request # </b></label>
                                              <div class="col-md-9">
                                              <?php if($first == "yes") { ?>
     <input type = "text" class="form-control" name ="reqno" value="<?php echo $id; ?>">
                                              <?php }elseif($first=="no"){ ?>
     <input type = "text" class="form-control" name ="reqno" value="<?php echo set_value('reqno'); ?>">       
                                              <?php }  ?>
                                                    
                                              </div>
                                          </div>
                                      </div>
                                      <!--/span-->

                                      
                                      <div class="col-md-6">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3">
                                              <b>Aprrove By 1</b></label>
                                              <div class="col-md-9">
                                                    <select class="form-control custom-select" name="app1">
                                                  
                                                      <option value = "" <?php echo set_select('app1', '', TRUE); ?> >-</option>
                                                      <option value = "1" <?php echo set_select('app1', '1'); ?> >Admin 1</option>
                                                      <option value = "2" <?php echo set_select('app1', '2'); ?> >Admin 2</option>                                                 
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
                                              <label class="control-label text-right col-md-3"><b>Request date</b></label>
                                              <div class="col-md-9">
                                                  <input type="date" name="reqdate" class="form-control" value ="<?php echo set_value('reqdate')?>" >
                                              </div>
                                          </div>
                                      </div>

                                      <!--/span-->

                                      <div class="col-md-6">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><b>Aprrove by 2</b></label>
                                              <div class="col-md-9">
                                                  <select class = "form-control custom-select" name="app2">                                                   

                                                  <option value = "" <?php echo set_select('app2', '', TRUE); ?> >-</option>
                                                      <option value = "1" <?php echo set_select('app2', '1'); ?> >Admin 1</option>
                                                      <option value = "2" <?php echo set_select('app2', '2'); ?> >Admin 2</option>   
                                                  
                                                  </select>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <!--/row-->
                                <hr>
                                  <!--/row-->
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Item Code</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="text" placeholder="Item Code" name="idcode" id="idcode">
                              
                                              </div>
                                          </div>
                                      </div>

                                      <!--/span-->

                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Detail Item</i></label>
                                              <div class="col-md-9">
                                              
                                    <input class="form-control" type="text" placeholder="Detail item" name="ditem" id="ditem">
                                              
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>QTY PR</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="number" placeholder="QTY PR" name="qpr" id="qpr">
                              
                                              </div>
                                          </div>
                                      </div>



                                  </div>
                                  <!--/row-->

                                  <!--/row-->
                                  <div class="row">
                                   


                                  <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Unit</i></label>
                                              <div class="col-md-9">
                                
                                    <select class="form-control" name="unit" id="unit"> 
                                                <option value="0" >Unit</option>
                                                <option value="1" >Unit 1</option>
                                                <option value="2" >Unit 2</option>
                                    </select>
                                   
                              
                                              </div>
                                          </div>
                                      </div>

                                      
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>QTY Stock</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="number" placeholder="QTY Stock" name="qstock" id="qstock" value="20">
                              
                                              </div>
                                          </div>
                                      </div>

                                      
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>DEPT STOCK</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="number" placeholder="Dept Stock" name="dstock" id="dstock" value="20">
                              
                                              </div>
                                          </div>
                                      </div>


                                  </div>
                                  <!--/row-->

                                  <!--/row-->
                                  <div class="row">
                                   


                                  <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>PR Methode</i></label>
                                              <div class="col-md-9">
                                
                                    <select class="form-control" name="prmeth" id ="prmeth">
                                                <option value="0" >Pr Methode</option>
                                                <option value="1" >Pembelian</option>
                                                <option value="2" >Mutasi</option>
                                    </select>
                                   
                              
                                              </div>
                                          </div>
                                      </div>

                                      
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Status</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="text" placeholder="Status" name="status" id="status">
                              
                                              </div>
                                          </div>
                                      </div>

                                      
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Currency</i></label>
                                              <div class="col-md-9">

                                         <select class ="form-control" name= "currency" id="currency">
                                               <option value = "0">Currency</option>    
                                               <option value = "IDR">IDR</option>       
                                               <option value = "DOLLARUS">US</option>                                                    
                                               <option value = "DOLLARHKG">HKG</option>  

                                         </select>   
                              
                                              </div>
                                          </div>
                                      </div>


                                  </div>
                                  <!--/row-->


                        <dic class = "row">

                                      
                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Price</i></label>
                                              <div class="col-md-9">
                                
                                    <input class="form-control" type="number" placeholder="Price" name="price" id="price">
                              
                                              </div>
                                          </div>
                                      </div>




                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Supplier</i></label>
                                              <div class="col-md-9">
                                
                                    <select class="form-control" name="supplier" id="supplier">
                                                <option value="0" >Supplier</option>
                                                <option value="1" >sup1</option>
                                                <option value="2" >sup2</option>
                                    </select>
                                   
                              
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-4">
                                          <div class="form-group row">
                                              <label class="control-label text-right col-md-3"><i>Picture</i></label>
                                              <div class="col-md-9">
                                
<input type="file" id="input-img" name="img" class="dropify" data-default-file="../assets/plugins/dropify/src/images/test-image-1.jpg" />
                              
                                              </div>
                                          </div>
                                      </div>






                                </div>

                        
                                      
                         


                         <div class="row">
                        
                         <div class="col-md-12">

<button type="submit" class="btn btn-primary" name="tombol" value="sementara">Save</button>
<button type ="submit" class="btn btn-primary" name="tombol" value="postall" onclick="return confirm('You are sure?')" >Submit</button>
<button type ="submit" class="btn btn-dark"  name="tombol"value="newpr" >New Procurement Request</button>
<button type ="submit" class="btn btn-danger" name="tombol" value="delpr" onclick="return confirm('You are sure?')">Delete Row</button>

     </div>
                   
                                 </div> <!-- div row-->


                              </div> <!-- div form body-->     


                      </div>
                  </div>
              </div>
          </div>
     
<!-- form input end-->


          <div class="row">

              <div class="col-12">

                  <div class="card">

                      <div class="card-body">

                      

  <div class="table-responsive">


      <table class="table" id="data_table">
        <thead>
            <tr>
                <th><small><b>Item Code</b></small></th>
                <th><small><b>Nama item</b></small></th>
                <th><small><b>Brand</b></small></th>
                <th><small><b>Size</b></small></th>
                <th><small><b>Detail Item</b></small></th>
                <th><small><b>Qty PR</b></small></th>
                <th><small><b>Unit</b></small></th>
                <th><small><b>QTy Stock</b></small></th>
                <th><small><b>Dept Stock</b></small></th>                
                <th><small><b>Jenis PR</b></small></th>
                <th><small><b>Status</b></small></th>
                <th><small><b>Currency</b></small></th>       
                <th><small><b>Price</b></small></th>
                <th><small><b>Supplier</b></small></th>     
                <th><small><b>Image</b></small></th>   

            </tr>
        </thead>
        <tbody>
        <?php foreach($main as $row){ ?>
            <tr>
                <td>
               <!--  <input type ="hidden" name= "id" value = "<?php //echo $row->tr_id;?>"> -->
                <input type="checkbox" name="pick[]" class="basic_checkbox_1" id="basic_checkbox_<?php echo $row->tr_id ?>" 
                value="<?php echo $row->tr_id;?>"> 
                <label for="basic_checkbox_<?php echo $row->tr_id ?>"><small><?php echo $row->tr_kode ?></small></label></td>
                <td><small>Meja 2 X 5</small></td>
                <td><small>Invorma</small></td>
                <td><small>Szie</small></td>
                <td><small><?php echo $row->tr_detail ?></small></td>
                <td><small><?php echo $row->tr_qty ?></small></td>
                <td><small><?php echo $row->tr_unit ?></small></td>
                <td><small><?php echo $row->tr_qtystock ?></small></td>
                <td><small><?php echo $row->tr_deptstrock ?></small></td>
                <td><small><?php echo $row->tr_jenis ?></small></td>                                
                <td><small><?php echo $row->tr_status ?></small></td>
                <td><small><?php echo $row->tr_curr ?></small></td>
                <td><small><?php echo $row->tr_price ?></small></td>
                <td><small><?php echo $row->tr_supp ?></small></td>
                <td><small><?php echo $row->tr_supp ?></small></td>
            </tr>

        <?php } ?>
        </tbody>
    </table>


 

  </div>

  
</div>

</div>

</div>

</div>

</div>
</form>





<?php $this->load->view('footer'); ?>
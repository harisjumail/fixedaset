    <!-- This page CSS -->
    <!-- chartist CSS -->
 
 <?php $this->load->view('header3'); ?>



  <!-- ============================================================== -->

         <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
       

              <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="card">
                        
                            <div class="card-body">
                 
                 
                <form action="<?php echo base_url()?>superadmin_area/filter" method="post">            
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Penjualan  Formulir</h3>
                                    </div>
                                         <div class="ml-auto">
                                        <select class="custom-select b-0" name="sekolah" id="sekolah">
                                            <option value="">Pilih Sekolah</option>
    <?php foreach ($sekolah as $row1){?>
  <option value="<?php echo $row1->sekolah_id ?>" <?php if(set_value('sekolah')==($row1->sekolah_id)){ echo " selected";}?>><?php echo $row1->sekolah_nama;?></option>
                                            
                             <?php } ?>
                                        </select>
                                 
                                        
                                         <select class="custom-select b-0" name="tahun" id="tahun">
                                            <option value="2019" selected="selected">Pilih Tahun/Bulan</option>
                                                                                       
         <option value="2019-07" <?php if(set_value('tahun')=="2019-07"){echo "selected";}?>>Juli 2019</option>
         <option value="2019-08" <?php if(set_value('tahun')=="2019-08"){echo "selected";}?>>Agustus 2019</option>
         <option value="2019-09" <?php if(set_value('tahun')=="2019-09"){echo "selected";}?>>September 2019</option>
        <option value="2019-10" <?php if(set_value('tahun')=="2019-10"){echo "selected";}?>>Oktober 2019</option>
        <option value="2019-11" <?php if(set_value('tahun')=="2019-11"){echo "selected";}?>>November 2019</option>
        <option value="2019-12" <?php if(set_value('tahun')=="2019-12"){echo "selected";}?>>Desember 2019</option>
                                        </select>
                                        
  <button type="submit" name="tampil" value="view" class="btn waves-effect waves-light btn-info">Tampil</button>
                                        
                                        
                                    </div>
                                </div>
                             </form>   
                                
                                
                            </div> <!-- card body-->
                            
                            <?php if($switch == "default"){?>
                            <div class="bg-theme stats-bar">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <div class="p-20 active">
                                            <h6 class="text-white">Penjualan</h6>
                                            <h3 class="text-white m-b-0"><?php echo $totalpendaftar;?></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">Bulan ini </h6>
                                            <h3 class="text-white m-b-0"><?php echo $totalpendaftarbulan;?></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">Minggu ini</h6>
                                            <h3 class="text-white m-b-0"><?php echo $totalpendaftarminggu;?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- bg theme stat bar -->
                            
                         
                            <div class="card-body">
                                <div id="sales-overview2" class="p-relative" style="height:360px;"></div>
                            </div>
                           <?php }
						    elseif($switch == "filter1"){?> 
                        
                        
                            <div class="bg-theme stats-bar">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <div class="p-20 active">
                                            <h6 class="text-white">Penjualan</h6>
                                            <h3 class="text-white m-b-0"><?php echo $totalpendaftar;?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- bg theme stat bar -->
                            
                         <?php //echo "filter1"; ?>
                            <div class="card-body">
                                <div id="sales-overview3" class="p-relative" style="height:360px;"></div>
                            </div>                        
                            
                                                     
                            <?php }
							 elseif($switch == "filter2"){?> 
                             
                             
                            <div class="bg-theme stats-bar">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <div class="p-20 active">
                                            <h6 class="text-white">Penjualan</h6>
                                            <h3 class="text-white m-b-0"><?php echo $totalpendaftar;?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- bg theme stat bar -->
                            
                         
                            <div class="card-body">
                                <div id="sales-overview2" class="p-relative" style="height:360px;"></div>
                            </div>                        
                                    
        
                             
                             
							<?php }?>
                            
                    

                    
                        
                                                    
                        </div> <!-- card -->
                        
                        
                        
                    </div> <!-- col -->
                    
                       	<!-- statistic pie per tingkat -->
                         <div class="col-lg-3 col-md-12">
                         <div class="card">
                         <div class="card-body">
                         	     <h4 class="card-title"><span class="lstick"></span>Per tingkat</h4>
                                 
           			  <div id="sparkline12" class="text-center"></div>                                      
               
               
		           <style>
				   .dot14 {height: 10px;width: 10px; background-color: #55ce63; border-radius: 50%; display: inline-block;}
				   .dot15 {height: 10px;width: 10px; background-color: #FF0000; border-radius: 50%; display: inline-block;}
				   .dot16 {height: 10px;width: 10px; background-color: #000080; border-radius: 50%; display: inline-block;}
				   .dot17 {height: 10px;width: 10px; background-color: #009efb; border-radius: 50%; display: inline-block;}
						   				   				   				   				   
				   </style>                                  
                             
                             			
                             
                             
						  <table class="table vm font-14">                                    
                                    <tr>
                                        <td class="b-0"><h6>TK
										<span class="dot14"></span></h6> </td>
                                        <td class="text-right font-medium b-0">
										
									<?php echo $tk; ?>
                                      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>SD
						<span class="dot15"></span>     </h6>                               
                                        </td>
                                        <td class="text-right font-medium">
										
										<?php echo $sd; ?>
                                       
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>SMP
						<span class="dot16"> </span >       </h6>                                         
                                        
                                        </td>
                                        <td class="text-right font-medium">
										                                    
									<?php echo $smp; ?>
                                        
                                      
                                        
                                        </td>
                                    </tr>
      						 <tr>
                                        <td><h6>SMA
					<span class="dot17"> </span >       </h6>                                         
                                        
                                        </td>
                                        <td class="text-right font-medium">
										                                  
										<?php echo $sma; ?>
                                        
                                        </td>
                                    </tr>                                    
                                    </table>                                 
                         
                         </div>
                         </div>
                         </div>
                       <!-- akhir pie per tingkat -->
                       
                    
                    </div> <!-- row -->
               
               
               
         
		           <style>
				   .dot1 {height: 10px;width: 10px; background-color: #000080; border-radius: 50%; display: inline-block;}
				   .dot2 {height: 10px;width: 10px; background-color: #FFD700; border-radius: 50%; display: inline-block;}
				   .dot3 {height: 10px;width: 10px; background-color: #55ce63; border-radius: 50%; display: inline-block;}
				   .dot4 {height: 10px;width: 10px; background-color: #800080; border-radius: 50%; display: inline-block;}
				   .dot5 {height: 10px;width: 10px; background-color: #FF00FF; border-radius: 50%; display: inline-block;}
				   .dot6 {height: 10px;width: 10px; background-color: #009efb; border-radius: 50%; display: inline-block;}
				   .dot7 {height: 10px;width: 10px; background-color: #008080; border-radius: 50%; display: inline-block;}
				   .dot8 {height: 10px;width: 10px; background-color: #FF0000; border-radius: 50%; display: inline-block;}
				   .dot9 {height: 10px;width: 10px; background-color: #000000; border-radius: 50%; display: inline-block;}
				   .dot10 {height: 10px;width: 10px; background-color: #808080; border-radius: 50%; display: inline-block;}
				   .dot11 {height: 10px;width: 10px; background-color: #C0C0C0; border-radius: 50%; display: inline-block;}
				   .dot12 {height: 10px;width: 10px; background-color: #ccffff; border-radius: 50%; display: inline-block;}
				   .dot13 {height: 10px;width: 10px; background-color: #00FFFF; border-radius: 50%; display: inline-block;}				   				   .dot14 {height: 10px;width: 10px; background-color: #FF8333; border-radius: 50%; display: inline-block;}			   				   				   
				   </style>                
               
               
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- visit charts-->
                    <!-- ============================================================== -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                          
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                          <h4 class="card-title"><span class="lstick"></span>Unit Sekolah</h4>
                         
                         
                         
                       <table class="table vm font-14">  
                          <tr>
                            <td rowspan="5">
                            <div id="sparkline11" class="text-center"></div>    </td>
                            <td><h6>SDH Medan <span class="dot1"></span></h6> </td>
                            <td class="text-right font-medium b-0"><?php //echo $baik; ?></td>
                            <td><h6>SDH Lubuk Linggau <span class="dot2"></span></h6></td>
                             <td class="text-right font-medium"><h6><?php echo $tps[10];?></h6></td>
                             <td><h6>SDH Bangka <span class="dot3"> </span ></h6></td>
                             <td class="text-left font-medium"> <h6><?php echo $tps[3];?></h6></td>
                             
                          </tr>
                          <tr>
                            <td><h6>SDH Palembang <span class="dot4"> </span ></h6></td>
                            <td><?php ?></td>
                            <td><h6>SDH Daan Mogot <span class="dot5"> </span ></h6></td>
                             <td><?php ?></td>
                            <td><h6>SDH Lippo Village<span class="dot6"> </span ></h6> </td> 
                            <td><h6><?php echo $tps[1];?></h6></td>    
                             
                          </tr>
                          <tr>
 							 <td><h6>SDH Bogor<span class="dot7"> </span ></h6></td>
                            <td>&nbsp;</td>
                            <td><h6>SDH Cikarang <span class="dot8"> </span ></h6></td>
                          	<td class="text-left font-medium"><?php echo $tps[7];?></td> 
							<td><h6>SDH Jember <span class="dot9"> </span ></h6></td>                             
                             <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><h6>SDH Makassar<span class="dot10"> </span ></h6></td>
                            <td><h6><?php echo $tps[2];?></h6></td>
                            <td><h6>SDH Holland Village<span class="dot11"> </span ></h6></td>
                         	<td class="text-left font-medium"><?php echo $tps[5];?></td>  
							 <td><h6>SDH Manado Ranotana<span class="dot12"> </span ></h6> </td>                             
                     		 <td class="text-left font-medium"><?php echo $tps[4];?></td>          
                          </tr>
                          <tr>
                            <td><h6>SDH Kupang<span class="dot10"> </span ></h6></td>
                            <td>&nbsp;</td>
                            <td><h6>SMK Meikarta<span class="dot14"> </span ></h6></td>
                			<td class="text-left font-medium"><?php echo $tps[6];?></td>  
							 <td></td>                             
                     		 <td class="text-right font-medium"></td>          
                          </tr>                          
                          
                          
                        </table>                         
 
      
                  			 </div>
                                              
               
                               </div>
                               

                            </div>
                        </div>
                    </div>
                </div>





                    </div>

        
								
      

      

        <?php $this->load->view('footer'); ?>

		
 <script src="<?php echo base_url();?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
 <script src="<?php echo base_url();?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    
                         
                              
                              
   <script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>   
							 <script language="javascript">
                                      
                                      
                                    $(document).ready(function() {
                                       var sparklineLogin = function() { 
									   	    var medan=0;		
										    var lubuk=<?php echo $tps[10]; ?>;	
											var bangka=<?php echo $tps[3]; ?>;
											var palembang=0;		
											var daanmogot=0;
											var lippovillage=<?php echo $tps[1]; ?>;												
										   	var bogor=0;
											var cikarang=<?php echo $tps[7]; ?>;		
											var jember=0;	
											var makassar=<?php echo $tps[2]; ?>;
											var holandvillage=<?php echo $tps[5]; ?>;		
											var manado=<?php echo $tps[4]; ?>;
											var kupang=0;	
											var meikarta=<?php echo $tps[6]; ?>;	
											var tk =<?php echo $tk; ?>;
											var sd=<?php echo $sd; ?>;
											var smp=<?php echo $smp; ?>;
											var sma=<?php echo $sma; ?>;																											
                                           
                                           $('#sparkline11').sparkline([medan, lubuk, bangka, palembang, daanmogot
										     ,lippovillage, bogor, cikarang, jember, makassar, holandvillage
											 , manado, kupang,meikarta], {
                                                type: 'pie',
                                                height: '200',
                                                resize: true,
                                                sliceColors: [
												'#000080', 
												'#FFD700', 
												'#55ce63', 
												'#800080', 
												'#FF00FF', 
												'#009efb', 
												'#008080', 
												'#FF0000', 
												'#000000', 
												'#808080', 
												'#C0C0C0', 
												'#ccffff', 
												'#00FFFF',
												'FF8333']
                                            });
                                         
                                          $('#sparkline12').sparkline([tk,sd,smp,sma], {
                                                type: 'pie',
                                                height: '200',
                                                resize: true,
                                                sliceColors: ['#55ce63','#FF0000','#000080','#009efb']
                                            });		
                                     /**        
                                           $('#sparkline13').sparkline([muda,tua], {
                                                type: 'pie',
                                                height: '200',
                                                resize: true,
                                                sliceColors: ['#009efb','#55ce63']
                                            });												
											
                                           $('#sparkline14').sparkline([d1,d2,d3], {
                                                type: 'pie',
                                                height: '200',
                                                resize: true,
                                                sliceColors: ['#009efb','#55ce63','#FFD700']
                                            });	 **/											
                                            
                                       }  
                                            sparklineLogin();
                                    
                                    });  
                                      </script> 	
	
	
	<script>
/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Sales overview
    // ============================================================== 
     new Chartist.Line('#sales-overview2', {
        labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Des', 'Jan', 'Feb', 'Mar', 'Apr', 'Me', 'Jun', 'Jul']
        , series: [
          {meta:"Jumlah", data: [<?php echo $tpb[8];?>,<?php echo $tpb[9];?>,<?php echo $tpb[10];?>,<?php echo $tpb[11];?>
		  ,<?php echo $tpb[12];?>,<?php echo $tpb[1];?>,<?php echo $tpb[2];?>,<?php echo $tpb[3];?>,<?php echo $tpb[4];?>,
		  <?php echo $tpb[5];?>,<?php echo $tpb[6];?>,<?php echo $tpb[7];?>]}
      ]
    }, {
        low: 0
        , high:500
        , showArea: true
        , divisor: 1
        , lineSmooth:false
        , fullWidth: true
        , showLine: true
        , chartPadding: 30
        , axisX: {
            showLabel: true
            , showGrid: false
            , offset: 50
        }
        , plugins: [
        	Chartist.plugins.tooltip()
      	], 
      	// As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
        	onlyInteger: true
            , showLabel: true
            , scaleMinSpace: 50 
            , showGrid: true
            , offset: 10,
            labelInterpolationFnc: function(value) {
		      return (value / 1) 
		    },

        }
        
    });
	

  
    	// Offset x1 a tiny amount so that the straight stroke gets a bounding box
        // Straight lines don't get a bounding box 
        // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
        chart.on('draw', function(ctx) {  
          if(ctx.type === 'area') {    
            ctx.element.attr({
              x1: ctx.x1 + 0.001
            });
          }
        });

        // Create the gradient definition on created event (always after chart re-render)
        chart.on('created', function(ctx) {
          var defs = ctx.svg.elem('defs');
          defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
          }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
          }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(38, 198, 218, 1)'
          });
        });
});

	
	</script>
    
  
  
	<script>
/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Sales overview
    // ============================================================== 
   new Chartist.Line('#sales-overview3', {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12','13', '14','15', '16', '17', 
		'18', '19', '20', '21', '22','23', '24','25', '26', '27','28', '29', '30', '31']
        , series: [
          {meta:"Jumlah", data: [<?php echo $tpb[1];?>,<?php echo $tpb[2];?>,<?php echo $tpb[3];?>,<?php echo $tpb[4];?>
		  ,<?php echo $tpb[5];?>,<?php echo $tpb[6];?>,<?php echo $tpb[7];?>,<?php echo $tpb[8];?>,<?php echo $tpb[9];?>,
		  <?php echo $tpb[10];?>,<?php echo $tpb[11];?>,<?php echo $tpb[12];?>,<?php echo $tpb[13];?>,<?php echo $tpb[14];?>
		  ,<?php echo $tpb[15];?>,<?php echo $tpb[16];?>,<?php echo $tpb[17];?>,<?php echo $tpb[18];?>,<?php echo $tpb[19];?>
		  ,<?php echo $tpb[20];?>,<?php echo $tpb[21];?>,<?php echo $tpb[22];?>,<?php echo $tpb[23];?>,<?php echo $tpb[24];?>
		  ,<?php echo $tpb[25];?>,<?php echo $tpb[26];?>,<?php echo $tpb[27];?>,<?php echo $tpb[28];?>,<?php echo $tpb[29];?>
		  ,<?php echo $tpb[30];?> ,<?php echo $tpb[31];?>
		  ]}
      ]
    }, {
        low: 0
        , high:300
        , showArea: true
        , divisor: 1
        , lineSmooth:false
        , fullWidth: true
        , showLine: true
        , chartPadding: 50
        , axisX: {
            showLabel: true
            , showGrid: false
            , offset: 50
        }
        , plugins: [
        	Chartist.plugins.tooltip()
      	], 
      	// As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
        	onlyInteger: true
            , showLabel: true
            , scaleMinSpace: 20 
            , showGrid: true
            , offset: 1,
            labelInterpolationFnc: function(value) {
		      return (value / 1) 
		    },

        }
        
    });	
 
	

  
    	// Offset x1 a tiny amount so that the straight stroke gets a bounding box
        // Straight lines don't get a bounding box 
        // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
        chart.on('draw', function(ctx) {  
          if(ctx.type === 'area') {    
            ctx.element.attr({
              x1: ctx.x1 + 0.001
            });
          }
        });

        // Create the gradient definition on created event (always after chart re-render)
        chart.on('created', function(ctx) {
          var defs = ctx.svg.elem('defs');
          defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
          }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
          }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(38, 198, 218, 1)'
          });
        });
});

	
	</script>
      
    

  		
    
<!--     <script src="<?php //echo base_url();?>js/dashboard2.js"></script> -->
      
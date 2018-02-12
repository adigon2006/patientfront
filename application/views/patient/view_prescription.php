<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('view_prescription');?></h1>
<!--									<span class="mainDescription"><?php echo get_phrase('view_payment');?> </span>-->
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
									<ul class="mini-stats pull-right">
										<li>
											<div class="sparkline-1">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all_results('doctor');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('doctor');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-2">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"> <?php echo $this->db->count_all_results('patient');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('patient');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-3">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all_results('nurse');?></strong>
												<p class="text-small no-margin">
												<?php echo get_phrase('nurse');?>
												</p>
											</div>
										</li>
									</ul>
									<!-- end: MINI STATS WITH SPARKLINE -->
								</div>
							</div>
						</section>
						<!-- end: DASHBOARD TITLE -->
            <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								
									<div class="tabbable">
										<ul id="myTab1" class="nav nav-tabs">
                                        
											<li class="active">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('view_prescription');?>
												</a>
											</li>
										
										</ul>
										<div class="tab-content">
                                        
					

                                            

                                        	<div class="tab-pane fade in active" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
							 <tr>
                                    <td><div>#</div></td>
                                    <td><div><?php echo get_phrase('report_type');?></div></td>
                                    <td><div><?php echo get_phrase('document_type');?></div></td>
                                    <td><div><?php echo get_phrase('download');?></div></td>
                                    <td><div><?php echo get_phrase('description');?></div></td>
                                    <td><div><?php echo get_phrase('date');?></div></td>
                                    <td><div><?php echo get_phrase('laboratorist');?></div></td>
                                </tr>
										</thead>
                                      
										<tbody>
                   <?php 
                                $count = 1;
                                $diagnostic_reports	=	$this->db->get_where('diagnosis_report' , array('prescription_id' => $row['prescription_id']))->result_array();
                                foreach($diagnostic_reports as $row2):?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $row2['report_type'];?></td>
                                    <td><?php echo $row2['document_type'];?></td>
                                    <td style="text-align:center;">
                                    	<?php if($row2['document_type'] == 'image'):?>
                                        <div id="thumbs">
  											<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" 
                                            	style="background-image:url(<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>)" title="<?php echo $row2['file_name'];?>">
                                                	</a></div>
 										<?php endif;?>
                                                    
										<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" target="_blank"
                                        	class="btn btn-blue">	<i class="icon-download-alt"></i> <?php echo get_phrase('download');?></a>
                                    </td>
                                    <td><?php echo $row2['description'];?></td>
                                    <td><?php echo date('d M,Y', $row2['timestamp']);?></td>
                                    <td><?php echo $this->crud_model->get_type_name_by_id('laboratorist',$row2['laboratorist_id'],'name');?></td>
                                    
                                </tr>
							<?php 
						endforeach;
						?>
										</tbody>
                                        
									</table>
								</div>
							</div>
						</div>
						<!-- end: DYNAMIC TABLE -->
											</div>
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                 
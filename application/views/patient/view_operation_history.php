<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('OPERATION HISTORY');?></h1>
									<!--<span class="mainDescription"><?php echo get_phrase('overview and statistics')?> </span>-->
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
												<a href="#myTab1_example1" data-toggle="tab">
										<i class="fa fa-wrench"></i> <?php echo get_phrase('operation');?>
												</a>
											</li>
                                             
											<li>
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('birth');?>
												</a>
											</li>
											<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('other');?>
												</a>
											</li>
										</ul>
										<div class="tab-content">
                                        
                                        
					<div class="tab-pane fade in active" id="myTab1_example1"> 
                      
			<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                                	<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                          <?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'operation','patient_id'=>$this->session->userdata('patient_id')))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td align="center">

        					</td>
                        </tr>
										 <?php endforeach;?>
										</tbody>
                                        
									</table>
                                                                    
                                </div>
                                </div>
                                </div>
                                 
								
									
											</div>
                                            
                                        
                          	<div class="tab-pane fade " id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
										<thead>
											<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                        <?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'birth','patient_id'=>$this->session->userdata('patient_id')))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td align="center">

        					</td>
                        </tr>
										 <?php endforeach;?>
										</tbody>
                                        
									</table>
								</div>
							</div>
						</div>
						<!-- end: DYNAMIC TABLE -->
											</div>
											<div class="tab-pane fade" id="myTab1_example3">
										<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                               
                                                   	<table class="table table-striped table-bordered table-hover table-full-width" id="sample_4">
										<thead>
								<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                               <?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'other','patient_id'=>$this->session->userdata('patient_id')))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td align="center">

        					</td>
                        </tr>
										 <?php endforeach;?>
										</tbody>
                                        
									</table>                 
                                                                    
                                                                    
                                </div>
                                </div>
                                </div>
											</div>
                                                                                    
                                                                                    
                                                                                    
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                  
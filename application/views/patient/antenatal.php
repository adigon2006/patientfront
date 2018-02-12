<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('ANTENATAL_REGISTRATION');?></h1>
									<!--<span class="mainDescription"><?php echo get_phrase('overview and statistics')?> </span>-->
								</div>
                                                           
                                                            <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_created').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';   
                                                  }
                                                  else if( $status == 'edited')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_updated').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';     
                                                  }
                                                   else if( $status == 'deleted')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_deleted').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="error" name="toasts" id="typeerror"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';     
                                                  }
                                                   $this->session->unset_userdata('metoast');
                                                                      ?>
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
                                        <?php if(isset($edit_profile)):?>
<!--											<li class="active">
												<a href="#myTab1_example1" data-toggle="tab">
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_department');?>
												</a>
											</li>-->
                                              <?php endif;?>
											<li class="active">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('antenatal_list');?>
												</a>
											</li>
											<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_antenatal_list');?>
												</a>
											</li>
										</ul>
										<div class="tab-content">
                                        
                                        <?php if(isset($edit_profile)):?>
					<div class="tab-pane fade" id="myTab1_example1"> 
                      <?php foreach($edit_profile as $row):?>
			<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
                             
										<?php echo form_open('admin/manage_department/edit/do_update/'.$row['department_id'] , array('role' =>'form'));?>
												<div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('department_name');?> <span class="symbol required"></span>
													</label>
				<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_department'); ?>" value="<?php echo $row['name'];?>" name="name" required="required">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('department_description');?>
													</label>
													<input type="text" name="description" autocomplete="off" class="form-control underline" value="<?php echo $row['description'];?>" placeholder="<?php echo get_phrase('Enter_description');?>">
												</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_department');?></button>
                                                </div>
											<?php echo form_close();?> 
                                           
										</div>
                                </div>
                                </div>
                                </div>
                                 <?php endforeach;?>
								
									
											</div>
                                            <?php endif;?>
                                        
                          	<div class="tab-pane fade in active" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
									<tr>
<!--                    		<th><div>#</div></th>-->
                    		<th><div><?php echo get_phrase('patient_name');?></div></th>
                    		<th><div><?php echo get_phrase('address');?></div></th>
                    		<th><div><?php echo get_phrase('post_code');?></div></th>
                    		<th><div><?php echo get_phrase('client_no');?></div></th>
                    		<th><div><?php echo get_phrase('birth_date');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                         <?php $count = 1;foreach($antenatal as $row):?>
                         <tr>
<!--                            <td><?php echo $count++;?></td>-->
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['address'];?></td>
							<td><?php echo $row['post_code'];?></td>
							<td><?php echo $row['client_number'];?></td>
							<td><?php echo $row['birth_date'];?></td>
							<td align="center">
                            <!--	<a href="<?php echo base_url();?>index.php?patient/manage_patient/edit/<?php echo $row['patient_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?patient/manage_patient/delete/<?php echo $row['patient_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>-->
        					</td>
                        </tr>				 <?php endforeach;?>
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
                                <div class="panel-body">
                                    <?php foreach($edit_profile as $row):?>
										<?php echo form_open('patient/antenatal/create' , array('role' =>'form','id'=>'form'));?>
				<div class="row">
                                         <div class="col-md-6">	
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('name');?>
													</label>
													<input type="text" name="name" autocomplete="off" class="form-control underline" value="<?php echo $row['name'];?>" id="exampleInputPassword1" placeholder="<?php echo get_phrase('name');?>">
												</div>
                                                            </div>
                                    <div class="col-md-6">	
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('address');?>
													</label>
													<input type="text" name="address" autocomplete="off" class="form-control underline" id="exampleInputPassword1" value="<?php echo $row['address'];?>" placeholder="<?php echo get_phrase('address');?>">
												</div>
                                                            </div>
                                         
                                    </div>
                                    <div class="row">
                                         <div class="col-md-6">	
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('phone');?>
													</label>
													<input type="text" name='phone' autocomplete="off" class="form-control underline" id="exampleInputPassword1" value="<?php echo $row['phone'];?>" placeholder="<?php echo get_phrase('phone');?>">
												</div>
                                                            </div>
                                    <div class="col-md-6">	
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('post_code');?>
													</label>
													<input type="text" name='post_code' autocomplete="off" class="form-control underline" id="exampleInputPassword1" placeholder="<?php echo get_phrase('post_code');?>">
												</div>
                                                            </div>
                                         
                                    </div>
                                    <div class="row">
								
                                                            <div class="col-md-6">	
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('birth_date');?>
													</label>
													<input type="text" name="birth_date" autocomplete="off" class="form-control underline format-datepicker" id="exampleInputPassword1" value="<?php echo $row['birth_date'];?>"  placeholder="<?php echo get_phrase('birth_date');?>">
												</div>
                                                            </div>
                                        <div class="col-md-6">		<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('client number');?> <span class="symbol required"></span>
													</label>
                                                                        
                                                <input type="text" autocomplete="off" readonly="readonly" name="clientno" value="<?=$row['client_number'] ?>" class="form-control underline" id="exampleInputPassword1" placeholder="<?php echo get_phrase('client_number');?>" value="<?=$row['client_number'] ?>"/>
											
                                                                    </div>
                                                                </div>
                                                        </div>
                                    
                                                            
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('register for antenatal');?></button>
                                                </div>
											<?php echo form_close();?> 
                                      <?php endforeach;?>
										</div>
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
                        
                  
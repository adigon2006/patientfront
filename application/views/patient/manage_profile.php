<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('PATIENT');?></h1>
									<span class="mainDescription"><?php echo get_phrase('update account')?> </span>
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
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_account_info');?>
												</a>
											</li>
                                              
											<li class="">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-lock"></i> <?php echo get_phrase('change_password');?>
												</a>
											</li>
											
										</ul>
										<div class="tab-content">
                                        
                                        
					<div class="tab-pane fade in active" id="myTab1_example1"> 
                      <?php foreach($edit_profile as $row):?>
			<?php echo form_open('doctor/manage_profile/update_profile_info/' , array('role' =>'form','id'=>'form'));?>
												<fieldset>
														<legend>
															Account Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('name'); ?><span class="symbol required"></span>
																	</label>
																	<input type="text" value="<?php echo $row['name'];?>" placeholder="<?php echo get_phrase('name'); ?>" class="form-control" id="lastname" name="name" required="required">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Email Address <span class="symbol required"></span>
																	</label>
																	<input type="email" placeholder="peter@example.com" value="<?php echo $row['email'];?>" class="form-control" id="email" name="email" required="required">
																</div>
<!--                                                                                                                            <div class="form-group">
																	<label class="control-label">
																		Password <span class="symbol required"></span>
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" id="password" required="required">
																</div>-->
                                                                                                                          <div class="form-group">
																	<label class="control-label">
																		Address <span class="symbol required"></span>
																	</label>
																	<input type="text" value="<?php echo $row['address'];?>" placeholder="Address" class="form-control" id="address" name="address" required="required">
																</div>
																
                                                                                                                                    <div class="form-group">
																	<label class="control-label">
																		Office Address <span class="symbol required"></span>
																	</label>
																	<input type="text" value="<?php echo $row['office_address'];?>" placeholder="Office Address" class="form-control" id="address" name="address2" required="required">
																</div>
																
															</div>
															<div class="col-md-6">
																<div class="form-group">
																		<label>
																			Gender<span class="symbol required"></span>
																		</label>
													<select name="sex" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <option value="Male" <?php if($row['sex'] == "Male"){echo 'selected';} ?>><?php echo get_phrase('Male');?></option>
                                    	<option value="Female" <?php if($row['sex'] == "Female"){echo 'selected';} ?>><?php echo get_phrase('Female');?></option>
                                      
                                        
                                        </select></div>
                                                                                                                            <div class="form-group">
																	<label class="control-label">
																		Phone <span class="symbol required"></span>
																	</label>
																	<input type="text" value="<?php echo $row['phone'];?>"  placeholder="Phone" class="form-control" id="password_again" name="phone" required="required">
																</div>
                                                                                                                            <div class="form-group">
																	<label class="control-label">
																		Client Number <span class="symbol required"></span>
																	</label>
																	<input readonly="readonly" type="text" class="form-control" name="clientno" value="<?php echo $row['client_number'];?>"/>
                                                                                                                                            </div>  
                                                                                                                            
                                                                                                                            				<div class="form-group">
																		<label>
																			Religion<span class="symbol required"></span>
																		</label>
													<select name="religion" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <option value="Christian" <?php if($row['religion']=='Christian')echo 'selected';?>><?php echo get_phrase('Christian');?></option>
                                    	<option value="female" <?php if($row['religion']=='Muslim')echo 'selected';?>><?php echo get_phrase('Muslim');?></option>
                                             	<option value="Others" <?php if($row['religion']=='Others')echo 'selected';?>><?php echo get_phrase('Others');?></option>
                                  
                                        
                                        </select></div>
                                                                  
                                                                                                                            
                                                                                                                           
																
                                                                                                        
<!--																<div class="form-group">
																	<label>
																		Image Upload
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                                                            <div class="fileinput-new thumbnail"><img src="<?php echo base_url(); ?>template/assets/images/default-user.png" alt="">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-edit-image-buttons">
																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
																				<input type="file">
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
																				<i class="fa fa-times"></i> Remove
																			</a>
																		</div>
																	</div>
																</div>-->
															</div>
														</div>
                                                                                               
													</fieldset>
													<fieldset>
														<legend>
															Next of Kin Information
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('name of next of kin');?>
																	</label>
																	<span class="input-icon">
																		<input name="nonok" value="<?php echo $row['nok_name'] ?>" class="form-control" type="text" placeholder="Name of Next of Kin">
																		<i class="fa fa-user"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('relationship');?>
																	</label>
																	<span class="input-icon">
																		<input name="relationship" class="form-control" value="<?php echo $row['relationship'] ?>" type="text" placeholder="<?php echo get_phrase('relationship');?>">
																		<i class="fa fa-exchange"></i> </span>
																</div>
																
															</div>
															<div class="col-md-6">
																
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('phone number');?>
																	</label>
																	<span class="input-icon">
																		<input  name="nokphoneno" class="form-control" type="text" value="<?php echo $row['nok_phone_no'] ?>" placeholder="<?php echo get_phrase('phone number');?>">
																		<i class="fa fa-phone"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('Email');?>
																	</label>
																	<span class="input-icon">
																		<input name="nokemail" class="form-control" type="text" value="<?php echo $row['nok_email'] ?>" placeholder="<?php echo get_phrase('Email');?>">
																		<i class="fa fa-envelope"></i> </span>
																</div>
															</div>
														</div>
													</fieldset>
													<div class="row">
														<div class="col-md-12">
															<div>
																Required Fields
																<hr>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>
																By clicking Update, you are updating your details.
															</p>
														</div>
														<div class="col-md-4">
															<button class="btn btn-primary pull-right" type="submit">
																Update Account  <i class="fa fa-edit"></i>
															</button>
														</div>
													</div>
												</form>
                                 <?php endforeach;?>
								
									
											</div>
                                           
                                        
                          	<div class="tab-pane fad " id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
                                                    <div class="col-md-12">
                                                    <?php 
                    foreach($edit_profile as $row):
                        ?>
                        <?php echo form_open('doctor/manage_profile/change_password' , array('class' => 'form-horizontal validatable'));?>
                        
                                                    
						<div class="form-group">
																	<label class="control-label">
																		Old Password <span class="symbol required"></span>
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" required="required">
																</div>
                                                    <div class="form-group">
																	<label class="control-label">
																		New Password <span class="symbol required"></span>
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="new_password"  required="required">
																</div>
                                                    <div class="form-group">
																	<label class="control-label">
																		Confirm Password <span class="symbol required"></span>
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="confirm_new_password"  required="required">
																</div>
                                                    <div class="form-group">  <button class="btn btn-primary pull-left" type="submit">
																Change Password  <i class="fa fa-edit"></i>
															</button>
                                                    </div>
                                                    <?php echo form_close();?>
						<?php
                    endforeach;
                    ?>
						</div>
						<!-- end: DYNAMIC TABLE -->
                                                </div>
											</div>
										
                                                                                    
                                                                                    
										</div>
									</div>
								
								</div>
							</div>
                                                </div>
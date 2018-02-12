<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM -->
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li class="<?php if($page_name == 'dashboard')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/dashboard">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> <?php echo get_phrase('dashboard');?> </span>
										</div>
									</div>
								</a>
							</li>
							
							
                            
							<li class="<?php if($page_name == 'visit_details')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/visit_details">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-calendar"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('patient visit details');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                        <li class="<?php if($page_name == 'view_appointment')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_appointment">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-clock-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_appointment');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                           <li class="<?php if($page_name == 'view_prescription')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_prescription">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-stethoscope"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_prescription');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                        <li class="<?php if($page_name == 'antenatal')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/antenatal">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-child"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('antenatal_registration');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                         <li class="<?php if($page_name == 'view_doctor')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_doctor">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-user-md"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_doctor');?></span>
										</div>
									</div>
								</a>
								
							</li>
<!--                                                         <li class="<?php if($page_name == 'view_blood_bank')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_blood_bank">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-tint"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_blood_bank');?></span>
										</div>
									</div>
								</a>
								
							</li>-->
                                                         <li class="<?php if($page_name == 'view_admit_history')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_admit_history">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-hdd-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('admit_history');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                          <li class="<?php if($page_name == 'view_operation_history')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_operation_history">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-hospital-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('operation_history');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                         <li class="<?php if($page_name == 'view_invoice')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/view_invoice">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-credit-card"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_invoice');?></span>
										</div>
									</div>
								</a>
								
							</li> 
                                                        <li class="<?php if($page_name == 'payment_history')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/payment_history">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-money"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('payment_history');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            			
						 <li class="<?php if($page_name == 'manage_email')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/manage_email">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('email');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                       
							<li class="<?php if($page_name == 'manage_profile')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?patient/manage_profile">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-lock"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('profile');?></span>
										</div>
									</div>
								</a>
							</li>
                            	<li>
								<a href="<?php echo base_url();?>index.php?login/logout">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-power-off"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Log out</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
						<!-- start: CORE FEATURES -->
						<div class="navbar-title" align="center">
							<span>Need Help</span>
						</div>
						
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						<div class="wrapper">
							<a href="documentation.html" class="button-o">
								<i class="ti-help"></i>
								<span>Documentation</span>
							</a>
						</div>
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->
<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('view_invoice');?></h1>
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
									<i class="fa fa-bars"></i> <?php echo get_phrase('view_invoice');?>
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
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('invoice_id');?></div></th>
                    		<th><div><?php echo get_phrase('amount');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('creation_timestamp');?></div></th>
                    		<th><div><?php echo get_phrase('status');?></div></th>
                    		<th><div><?php echo get_phrase('option');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                  <?php $count = 1;foreach($invoices as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['invoice_id'];?></td>
							<td><?php echo $row['amount'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><span class="label label-<?php if($row['status']=='paid')echo 'btn btn-success';else echo 'btn btn-red';?>"><?php echo $row['status'];?></td>
							<td align="center">
                            	<?php
                                if($row['status'] == 'unpaid'){//echo form_open('patient/view_invoice/make_payment/' );?>
                                        <input type="hidden" name="patientid" id="patientid" value="<?=$row['patient_id']; ?>" />                   
                                     <input type="hidden" name="publickey" id="publickey" value="<?php echo $this->crud_model->get_type_demo_sk_by_id('payment_integration',1,'public_key_test');?>" />                   
                                        <input type="hidden" name="email" id="email" value="<?php echo $this->crud_model->get_type_email_by_id('patient',$row['patient_id'],'email');?>" />                    
                                        <input type="hidden" name="description" class="description" value="<?php echo $row['description'];?>" />
                                        <input type="hidden" name="paymenttype" class="paymenttype" value="<?php echo $row['title'];?>" />
                                       <input type="hidden" name="method" class="method" value="online" /> 
                                       <input type="hidden" name="amount" class="loadamt" value="<?php echo $row['amount'];?>" />
                                	<input type="hidden" name="invoice_id" class="invoiceid" value="<?php echo $row['invoice_id'];?>" />
                                        <input type="hidden" name="timestamp" class="timestamp" value="<?php echo strtotime(date('Y-m-d') . ' ' . date('H:i:s')) ?>" />
                                        
                                	<input type="submit" class="btn btn-primary payonline"	value="Pay Online" />
                                <?php //echo form_close();
                                }
                                else
                                    echo '<span class="label label-btn btn-primary">Completed</span>';
                                ?>
        					</td>
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
                        
                 
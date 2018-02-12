<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('manage_profile');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					<?php 
                    foreach($edit_profile as $row):
                        ?>
                        <?php echo form_open('patient/manage_profile/update_profile_info/' , array('class' => 'form-horizontal validatable'));?>
                                <h4>Personal Information</h4>                     
                        <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Title');?></label>
                                <div class="controls">
                                   <select name="title" class="uniform" style="width:100%;">
                                        <option value="" <?php if($row['title']=='')echo 'selected';?>><?php echo get_phrase('Select One');?></option>
                                    	<option value="Mr" <?php if($row['title']=='Mr')echo 'selected';?>><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs" <?php if($row['title']=='Mrs')echo 'selected';?>><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms" <?php if($row['title']=='Ms')echo 'selected';?>><?php echo get_phrase('Ms');?></option>
                                    	
                                    </select>
                                </div>
                            </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('name');?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="name" value="<?php echo $row['name'];?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('email');?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="email" value="<?php echo $row['email'];?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('home address');?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="address" value="<?php echo $row['address'];?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('office address');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="address2" value="<?php echo $row['office_address'];?>"/>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('client number');?></label>
                                <div class="controls">
                                    <input readonly="readonly" type="text" class="" name="clientno" value="<?php echo $row['client_number'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('religion');?></label>
                                <div class="controls">
                                    <select name="religion" class="uniform" style="width:100%;">
                                    	<option value="Christian" <?php if($row['religion']=='Christian')echo 'selected';?>><?php echo get_phrase('Christian');?></option>
                                    	<option value="female" <?php if($row['religion']=='Muslim')echo 'selected';?>><?php echo get_phrase('Muslim');?></option>
                                             	<option value="Others" <?php if($row['religion']=='Others')echo 'selected';?>><?php echo get_phrase('Others');?></option>
                                    </select>
                                </div>
                            </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('phone');?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
                                    </div>
                                </div>
                                
                                
                                <h4>Next of Kin/Contact Person</h4>
             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name of next of kin');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="nonok" value="<?php echo $row['nok_name'] ?>"/>
                                </div>
                            </div> <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('relationship');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="relationship" value="<?php echo $row['relationship'] ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone number');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokphoneno" value="<?php echo $row['nok_phone_no'] ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Email');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokemail" value="<?php echo $row['nok_email'] ?>"/>
                                </div>
                            </div> <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Home Address');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokhomeaddress" value="<?php echo $row['nok_home_address'] ?>"/>
                                </div>
                            </div>   
                        </div>
                                <div class="form-actions">
                            		<button type="submit" class="btn btn-blue"><?php echo get_phrase('update_profile');?></button>
                        		</div>
                        <?php echo form_close();?>
						<?php
                    endforeach;
                    ?>
                </div>
			</div>
            <!----EDITING FORM ENDS--->
            
		</div>
	</div>
</div>


<!--password-->
<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-lock"></i> 
					<?php echo get_phrase('change_password');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					<?php 
                    foreach($edit_profile as $row):
                        ?>
                        <?php echo form_open('patient/manage_profile/change_password/' , array('class' => 'form-horizontal validatable'));?>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('password');?></label>
                                    <div class="controls">
                                        <input type="password" class="" name="password" value=""/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('new_password');?></label>
                                    <div class="controls">
                                        <input type="password" class="" name="new_password" value=""/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('confirm_new_password');?></label>
                                    <div class="controls">
                                        <input type="password" class="" name="confirm_new_password" value=""/>
                                    </div>
                                </div>
                                <div class="form-actions">
                            		<button type="submit" class="btn btn-blue"><?php echo get_phrase('update_password');?></button>
                        		</div>
                        <?php echo form_close();?>
						<?php
                    endforeach;
                    ?>
                </div>
			</div>
            <!----EDITING FORM ENDS--->
            
		</div>
	</div>
</div>
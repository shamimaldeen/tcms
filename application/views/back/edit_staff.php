<?php
   //date formattting
     function format_date($data)
     {
       $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
       return $formattedweddingdate = $date->format('d-m-Y');
     }
    ?>
<div class="wrapper">
	<div class="container"> 
		<div class="row">
			<!--/.span3-->
			<div class="span10">
				<div class="content">
					<div class="module">
						<div class="module-head">
							<h3> Staff Edit </h3>
						</div>
						<div class="module-body">
		<?php // echo form_open_multipart('studentsarchive/update_student/'.$edit_students_archive[0]->stu_id,array('id'=>'')) ?>
		<?php echo form_open_multipart('staff/update_staff/'.$staffs[0]->staff_id,array('id'=>'')) ?>
					 
								<div class="row-fluid">
									<div class="span4">
										<div class="form-group">
											<label >Full Name </label>
											<input type="text" value="<?php echo $staffs[0]->staff_fullname; ?>" name="staff_fullname" placeholder="" class="span12">
										</div>
									</div>
								 
								
							 	<div class="span3">
										<div class="form-group">
											<label >Designation</label>
											<input type="text" value="<?php echo $staffs[0]->staff_designation; ?>"  name="staff_designation" placeholder="" class="span12">
										</div>
									</div>
									</div>
								<div class="row-fluid">
									<div class="span4">
								<div class="form-group">
									<label >Contact Number</label>
									<input type="number" value="<?php echo $staffs[0]->staff_cnumber; ?>" name="staff_cnumber" placeholder="" class="span12">
										</div>
									</div>
									</div>
								 
									<div class="row-fluid">
									<div class="span4">
										<div class="form-group">
											<label >Joining Date to </label>
											<input type="date" value="<?php echo format_date($staffs[0]->staff_joining_date,"Y-m-d"); ?>" name="staff_joining_date" placeholder="" class="span12">
										</div>
									</div>
									
								</div>
								<div class="row-fluid">
                                  <label>Photo</label>
                                 <input type="file" value="<?php echo $staffs[0]->staff_image; ?>" name="staff_image" placeholder="" class="span12">
                                </div>
								<center>
									<hr>													
									<button type="reset" class="btn-large  btn-warning">Reset</button>
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i>Update</button>
								</center>
							</div>
						</form>
					</div>
				</div><!--/.content-->
			</div><!--/.span9-->
			<div style="margin-top:-20px;" class="span2">
				<div class="sidebar">
								<ul class="widget widget-menu unstyled">
								
								<li>
									<a href="<?php echo base_url(); ?>dashboard">
										<i class="menu-icon icon-dashboard"></i>
										Dashbaord
									</a>
								</li>
								
								<li>
									<a href="<?php echo base_url(); ?>students_archive">
										<i class="menu-icon icon-user"></i>
										Student List
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>current_course">
										<i class="menu-icon icon-folder-open"></i>
										Active Course
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>complited_course">
										<i class="menu-icon icon-list-alt"></i>
										Result
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>attendance_record">
										<i class="menu-icon icon-ok"></i>
										Attendance
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>staff_list">
										<i class="menu-icon icon-user"></i>
										Staffs
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>report">
										<i class="menu-icon icon-print"></i>
										Report
									</a>
								</li>
							</ul><!--/.widget-nav-->
										</div><!--/.sidebar-->
									</div>
								</div>
							</div>
							<!--/.container-->
						</div>
						<!--/.wrapper-->
																																																																																							
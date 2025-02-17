
<div class="wrapper">

  <?php if($this->session->success): ?>
	<p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
	<?php endif; ?>

  <?php if($this->session->error): ?>
	 <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
  <?php endif; ?>
	<div class="container"> 
		<div class="row">
			<!--/.span3-->
			<div class="span10">
				<div class="content">
					 
					<div class="module">
						<div class="module-head">
							<h3> Course Information  </h3>
						</div>
						<div class="module-body">
							 
							<?php  echo form_open_multipart('course/save_course',array('id'=>'')) ?>
								<div class="row-fluid">
									<div class="span5">
										<div class="form-group">
											<label>Course Title</label>
											 		<input type="text" name="course_title" placeholder="" class="span12">
										</div>
									</div>
									<div class="span2">
										<div class="form-group">
											<label>Duration</label>
												<input type="text" name="course_duration" placeholder="" class="span12">
										</div>
									</div>
									<div class="span2">
										<div class="form-group">
											<label>Course Fee</label>
											<input type="number" name="course_fee" placeholder="" class="span12">
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label>Status</label>
											 
											<select  name="course_status" class="span12">
												<option value="active">Active</option>
												<option value="unavailable">Unavailable</option>
												<option value="inactive">Inactive</option>

											</select>
										</div>
									</div>
								</div>
								<hr>
								<div class="row-fluid">
									<div class="control-group">
										<label class="control-label" for="basicinput">Course Details</label>
										<div class="controls">
											<textarea class="span12" name="course_details" id="editor" rows="5"> </textarea>
										</div>
									</div>
								</div>
								<center>
									<hr>													
									<button type="reset" class="btn-large btn-warning">Reset</button>
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Save</button>
								</center>
							</div>
						</form>
					</div>
				</div><!--/.content-->
			</div><!--/.span9-->
			<div style="" class="span2">
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

<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script> 																																   <script src="index.js"></script>					
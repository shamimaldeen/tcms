
<div class="wrapper">
	<div class="container"> 
		<div class="row">
			<!--/.span3-->
			<div class="span10">
				<div class="content">
					<div class="module">
						<div class="module-head">
							<h3> Reports </h3>
						</div>
						<div class="module-body">
							<?php  echo form_open('report/handler',array('id'=>'')) ?>
								<div class="row-fluid">
									<div class="span9">
										<div class="form-group">
											<label>Reports Name</label>
											<select  name="report_name" class="span12">
												<option value="">----</option>
												<option value="Students List (Batch)" > Students List (Batch) </option>
												<option value="Students List (Course)" > Students List (Course) </option>
												<option value="Course List" > Course List </option>
												<option value="New Application" > New Application </option>
												<option value="Batch Wise Result" > Batch Wise Result </option>
												<option value="Attendance (Indv)" > Attendance (Indv) </option>
												<option value="Payment Collection Report" > Payment Collection Report </option>
												<option value="Staffs List" > Staffs List </option>
												<option value="Account Report (Date Wise)" > Account Report (Date Wise) </option>
												<option value="Account Report (Category Wise)" > Account Report (Category Wise) </option>
												<option value="Balance Sheet" > Balance Sheet</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span3">
										<div class="form-group">
											<label >Batch </label>
											<select  name="batch_id" class="span12">
										    <option value="" disabled="" selected="">Select batch</option>
										<?php  foreach($batchs as $batch): ?>
											<option value="<?php echo $batch->batch_id; ?>" ><?php echo $batch->batch_title; ?></option>
											 <?php endforeach; ?>								
											</select>
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label >Course</label>
											<select  name="course_id" class="span12">
											<option value="" disabled="" selected="">Select course</option>
										<?php  foreach($courses as $course): ?>
											<option value="<?php echo $course->course_id; ?>" ><?php echo $course->course_title; ?></option>
											 <?php endforeach; ?>							
											</select>
										</div>
									</div>
								
							 	<div class="span3">
										<div class="form-group">
											<label >Student ID </label>
											<input type="number" name="stu_id" placeholder="" class="span12">
										</div>
									</div>
									</div>
								<div class="row-fluid">
									<div class="span3">
										<div class="form-group">
											<label >Category</label>
											<select  name="acc_cat_id" class="span12">
												<option value="" disabled="" selected="">Select category</option>
										<?php  foreach($categories as $category): ?>
											<option value="<?php echo $category->acc_cat_id; ?>" ><?php echo $category->acc_cat_title; ?></option>
											 <?php endforeach; ?>								
											</select>
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label >Date to </label>
											<input type="date" name="starting_date" placeholder="" class="span12">
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label >Date</label>
											<input type="date" name="ending_date" placeholder="" class="span12">
										</div>
									</div>
								</div>
								<center>
									<hr>													
									<button type="reset" class="btn-large  btn-warning">Reset</button>
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-search"></i> Priview</button>
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
					<a href="dashboard.php">
						<i class="menu-icon icon-dashboard"></i>
						Dashbaord
					</a>
				</li>
				
				<li>
					<a href="students_archive.php">
						<i class="menu-icon icon-user"></i>
						Student List
					</a>
				</li>
				<li>
					<a href="courses_current.php">
						<i class="menu-icon icon-folder-open"></i>
						Active Course
					</a>
				</li>
				<li>
					<a href="result_archive.php">
						<i class="menu-icon icon-list-alt"></i>
						Result
					</a>
				</li>
				<li>
					<a href="attendance_record.php">
						<i class="menu-icon icon-ok"></i>
						Attendance
					</a>
				</li>
				<li>
					<a href="staff_list.php">
						<i class="menu-icon icon-user"></i>
						Staffs
					</a>
				</li>
				<li>
					<a href="reports.php">
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
																																																																																	
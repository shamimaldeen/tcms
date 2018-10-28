
						<div class="wrapper">
							<div class="container"> 
								<div class="row">
									<!--/.span3-->
									<div class="span10">
										<div class="content">
											<div class="module">
												<div class="module-head">
													<h3> Routine Information  </h3>
												</div>
												<div class="module-body">


												<?php  echo form_open_multipart('routine/save_routine',array('id'=>'')) ?>
														<div class="row-fluid">
															<div class="span5">
																<div class="form-group">
																<label>Batch</label>
																<select  name="batch_id" class="span12">
																<option value="" disabled="" selected="">Select batch</option>
																 <?php  foreach($batchs as $batch): ?>
																		<option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_title; ?></option>
																	 <?php endforeach; ?>	
																	</select>
																</div>
															</div>
														</div>


														<div class="row-fluid">
															<div class="control-group">
																<label class="control-label" for="basicinput">Course Details</label>
																<div class="controls">
																	<textarea class="span12" name="routine_details" id="editor" rows="5"> </textarea>
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
						
						<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script> 																																									<script src="index.js"></script>											
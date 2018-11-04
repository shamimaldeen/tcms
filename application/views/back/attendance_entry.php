
						<div class="wrapper">
							<div class="container">  
								<div class="row">
							 		<div class="span2">
									</div><!--/.span3-->
									<div class="module span8">
										<div class="module-head">
											<h3>Attendance Entry > OFFICE Jun 2018 </h3>
										</div>
										<div class="module-body">
										
												<?php echo form_open('attendance/save_attendance',array()) ?>

												<?php foreach($students as $student): ?>
												<div class="row-fluid">
													<div class="span2">
														<div class="form-group">
															<label>Student ID</label>
															<input type="text" name="stu_id[]"  value="<?php echo $student->stu_id; ?>"  class="span12">
														</div>
													</div>
													<div class="span8">
														<div class="form-group " >
															<label>Student Name</label>
															<input type="text" name="stu_name[]"   value="<?php echo $student->stu_name; ?>" class="span12">
														</div>
													</div>
													<div class="span2">
														<div class="form-group">
															<label> <center>Present ?</center></label>
															<input type="checkbox" name="att_status[]" value="present"  class="span12">
															<!-- hidden filed -->
															<input type="hidden" name="batch_id[]" value="<?php echo $batch_id; ?>">
														</div>

													</div>
												</div>
												
												<?php endforeach;?>
												<center>
													<hr>
													<button type="reset" class="btn btn-warning"><i class="menu-icon icon-undo"></i>  Reset</button>
													<button type="submit" class="btn btn-success"><i class="menu-icon icon-save"></i>  Save</button>
												</center>
											</div>
											<div class="span2">
											</div><!--/.span3-->
										</div><!--/.span3-->
									</div>
								</form>
							</div>
						</div>
																																																																																								
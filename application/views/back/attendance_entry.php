
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
											<?php  echo form_open('attendance/select_batch',array('id'=>'')) ?>
												<div class="row-fluid">
													<div class="span2">
														<div class="form-group">
															<label>Student ID</label>
															<input type="text" name="stu_id" value="<?php echo $students[0]->stu_id ;?>" class="span12">
														</div>
													</div>
													<div class="span8">
														<div class="form-group " >
															<label>Student Name</label>
															<input type="text" name="stu_name" value="<?php echo $students[0]->stu_name ;?>"  class="span12">
														</div>
													</div>
													<div class="span2">
														<div class="form-group">
															<label> <center>Present ?</center></label>
															<input type="checkbox" name="att_status" placeholder="" class="span12">
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span2">
														<div class="form-group">
															<input type="text"  value="<?php echo $students[0]->stu_id ;?>" class="span12">
														</div>
													</div>
													<div class="span8">
														<div class="form-group " >
															<input type="text" value="<?php echo $students[0]->stu_name ;?>" class="span12">
														</div>
													</div>
													<div class="span2">
														<div class="form-group">
															<input type="checkbox" placeholder="" class="span12">
														</div>
													</div>
												</div>
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
																																																																																												
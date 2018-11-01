
		<div class="wrapper">
			<div class="container"> 
			
				<div class="row">
					<!--/.span3-->
					<div class="span12">
						<div class="content">
							<div class="module">
								<div class="module-head">
									<h3> Personal Information</h3>
								</div>
								<div class="module-body">  
									<?php  echo form_open_multipart('studentsarchive/update_student/'.$edit_students_archive[0]
->stu_id,array('id'=>'')) ?>
										<div class="row-fluid">
										 
											<div class="span4">
												<div class="form-group">
													<label> <div class="span12">
														<div class="form-group">
															<label> Marital Status *
																
															</label>
															<select name="stu_marital" tabindex="1" data-placeholder="Select here.." class="span12">
															<option value="Married" <?php if($edit_students_archive[0]
->stu_marital =='Married'): ?> selected="" <?php endif; ?>>Married</option>
                                                            <option value="Unmarried" <?php if($edit_students_archive[0]
->stu_marital =='Unmarried'): ?> selected="" <?php endif; ?>>Unmarried</option>

															</select>
														</div>
													</div>
													
													</div>
												</div>
											 
												<div class="span4">
													<div class="form-group">
														<label> Occupation *</label>
														
														<input value="<?php echo $edit_students_archive[0]
->stu_occupation; ?>" type="text" class="span12" name="stu_occupation" />
													</div>
												</div>
												<div class="span4">
													<div class="form-group">
														<label>Photograph</label>
														<input value="<?php echo $edit_students_archive[0]
->stu_image; ?>" type="file" class="span12" name="stu_image" />
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="module">
										<div class="module-head">
											<h3>Guardian and Contact Information </h3>
										</div>
										<div class="module-body">
											<div class="row-fluid">
											
												<div class="span4">
													<label> Guardian 's Name *
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_guardian; ?>" type="text" name="stu_guardian" id="cvill" class="span12" />
												</label>
											</div>
											<div class="span4">
												<div class="form-group">
													<label>Relation with *
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_relation; ?>" type="text" name="stu_relation" id="cupo" class="span12" />
												</div>
											</div>	
										 	
										
											<div class="span4">
												<div class="form-group">
													<label>Guardian' Mobile No *
														
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_guardian_mobile; ?>" type="text" name="stu_guardian_mobile" id="cupo" class="span12" />
												</div>
											</div>
											</div>
											<div class="row-fluid">
											<div class="span4">
												<div class="form-group">
													<label>Mobile No:
														*
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_mobile; ?>" type="text" name="stu_mobile" id="cpost" class="span12" />
												</div>
												
											</div>
											<div class="span8">
												<div class="form-group">
													<label>E-Mail Address:
														*
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_email; ?>" type="email" name="stu_email" class="span12" />
												</div>
											</div>
										</div>
										
										<div class="row-fluid">
											
											<div class="span12">
												<div class="form-group">
													<label>Present Address *
													</label>
													<input value="<?php echo $edit_students_archive[0]
->stu_present_address; ?>" type="text" name="stu_present_address" class="span12" placeholder="" />
												</div>
											</div>
										 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				 
				<div class="module">
					<div class="module-head">
						<h3> Highest Educational Qualification</h3>
					</div>
					<div class="module-body">
						<div class="row-fluid">
							<div class="span4">
								<div class="form-group">
									<label>Examination *
									</label>
									<input value="<?php echo $edit_students_archive[0]
->stu_examination; ?>" type="text" name="stu_examination" id="ccorpname" class="span12" />
								</div>
							</div>
							<div class="span3">
								<div class="form-group">
									<label>Board *
									</label>
									<input value="<?php echo $edit_students_archive[0]
->stu_board; ?>" type="text" name="stu_board" id="dno" class="span12" />
								</div>
							</div>
							<div class="span2">
								<div class="form-group">
									<label>Group *
									</label>
									<select name="stu_group" tabindex="1" data-placeholder="Select here.." class="span12">
										<option value="Science" <?php if($edit_students_archive[0]
->stu_group =='Science'): ?> selected="" <?php endif; ?>>Science</option>
										<option value="Arts" <?php if($edit_students_archive[0]
->stu_group =='Arts'): ?> selected="" <?php endif; ?>>Arts</option>
										<option value="Commerce" <?php if($edit_students_archive[0]
->stu_group =='Commerce'): ?> selected="" <?php endif; ?>>Commerce</option>
										<option value="Technical" <?php if($edit_students_archive[0]
->stu_group =='Technical'): ?> selected="" <?php endif; ?>>Technical</option>
									</select>
								</label>
							</div>
							</div> 			

							<div class="span2">
							<div class="form-group">
								<label>Passing Year *
								</label>
								<input value="<?php echo $edit_students_archive[0]
->stu_pass_year; ?>" type="text" name="stu_pass_year" id="khotian" class="span12" />
							</label>
						</div>
						</div> 			<div class="span1">
								<div class="form-group">
									<label>result *
									</label>
									<input value="<?php echo $edit_students_archive[0]
->stu_result; ?>" type="text" name="stu_result" id="dno" class="span12" />

								</div>
							</div> 
			</div>
		</div> 
	</div> 
	<center>
		<div class="form-group">
			<input type="submit" name="savepreapply" class="btn-large btn-success" value="Update"/>
		</center>
	</div>
</form>
</div>
</div> 
</div> 
</div> 

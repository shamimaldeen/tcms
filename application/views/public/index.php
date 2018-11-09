
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Training Center Management System</title>
		<link type="text/css" href="<?php echo base_url(); ?>asset/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/public/css/theme.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/public/images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<i class="icon-reorder shaded"></i>
					</a>
					<a class="brand"  > 
						Training Center Management System
					</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
						<ul class="nav pull-right">
							<li >
								<a href="<?php echo base_url(); ?>student" >   Login</a>
							</li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
		<div class="wrapper">
			<div class="container"> 
				 <?php if($this->session->success): ?>
						        <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
						     <?php endif; ?>

						     <?php if($this->session->error): ?>
						        <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
						     <?php endif; ?>
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>New Application</strong>  
				</div>
				<div class="row">
					<!--/.span3-->
					<div class="span12">
						<div class="content">
							<div class="module">
								<div class="module-head">
									<h3> Personal Information</h3>
								</div>
								<div class="module-body">
									<?php  echo form_open_multipart('publiccontroller/save_student',array('id'=>'')) ?>
										<div class="row-fluid">
											<div class="span4">
												<div class="form-group">
													<label> Students Name *
													</label>
													<input type="text" class="span12" name="stu_name" />
												</div>
											</div>
											
											
											<div class="span2">
												<div class="form-group">
													<label> Date of birth *
													</label>
													<input type="date" class="span12" name="stu_dob" />
												</div>
											</div>
											
											<div class="span2">
												<div class="form-group">
													<label> Sex * 
													</label>
													<select name="stu_sex" tabindex="1" data-placeholder="Select here.." class="span12">
														<option value="">....</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														
													</select>
												</div>
											</div>
											
											<div class="span2">
												<div class="form-group">
													<label> Religion *
													</label>
													<select name="stu_religion" tabindex="1" data-placeholder="Select here.." class="span12">
														<option value="">....</option>
														<option value="Islam">Islam</option>
														<option value="Hindu">Hindu</option>
														<option value="Buddist">Buddist</option>
														<option value="Christian">Christian</option>
														
													</select>
												</div>
											</div>
											<div class="span2">
												<div class="form-group">
													<label> <div class="span12">
														<div class="form-group">
															<label> Marital Status *
																
															</label>
															<select name="stu_marital" tabindex="1" data-placeholder="Select here.." class="span12">
															<option value="">....</option>
															<option value="Married">Married</option>
															<option value="Unmarried">Unmarried</option>
																
															</select>
														</div>
													</div>
													
													</div>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span4">
													<div class="form-group">
														<label> National ID/Birth Certificate No. *
														</label>
														<input type="text" class="span12" name="stu_nid" />
													</div>
												</div>
												<div class="span2">
													<div class="form-group">
														<label> Occupation *</label>
														
														<input type="text" class="span12" name="stu_occupation" />
													</div>
												</div>
												<div class="span4">
													<div class="form-group">
														<label>Photograph</label>
														<input type="file" class="span12" name="stu_image" />
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
												<div class="span3">
													<label>Father's Name *
													</label>
													<input type="text" name="stu_father" id="chome" class="span12" />
												</div>
												<div class="span3">
													<label>Mother's Name *
													</label>
													<input type="text" name="stu_mother" id="cps" class="span12" />
												</div>
												<div class="span3">
													<label> Guardian 's Name *
													</label>
													<input type="text" name="stu_guardian" id="cvill" class="span12" />
												</label>
											</div>
											<div class="span3">
												<div class="form-group">
													<label>Relation with *
													</label>
													<input type="text" name="stu_relation" id="cupo" class="span12" />
												</div>
											</div>	
										</div>	
										<div class="row-fluid">
											<div class="span3">
												<div class="form-group">
													<label>Guardian' Mobile No *
														
													</label>
													<input type="text" name="stu_guardian_mobile" id="cupo" class="span12" />
												</div>
											</div>
											<div class="span3">
												<div class="form-group">
													<label>Mobile No:
														*
													</label>
													<input type="text" name="stu_mobile" id="cpost" class="span12" />
												</div>
												
											</div>
											<div class="span6">
												<div class="form-group">
													<label>E-Mail Address:
														*
													</label>
													<input type="email" name="stu_email" class="span12" />
												</div>
											</div>
										</div>
										
										<div class="row-fluid">
											
											<div class="span6">
												<div class="form-group">
													<label>Present Address *
													</label>
													<input type="text" name="stu_present_address" class="span12" placeholder="" />
												</div>
											</div>
											<div class="span6">
												<div class="form-group">
													<label>Permanent Address *
													</label>
													<input type="text" name="stu_permanent_address" class="span12" />
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
							<h3>Experience on Computer</h3>
						</div>
						<div class="module-body">
							<div class="row-fluid">
								<div class="span2">
									<div class="form-group">
										<label>Have your Experience on Computer?
										*</label>
										<input type="radio" name="stu_have_experience" value="Yes"> Yes<br>
										<input type="radio" name="stu_have_experience" value="no"> No<br>
									</div>
								</div>
								<div class="span3">
									<div class="form-group">
										<label>Board/Org/Institute *
										</label>
										<input type="text" name="stu_institute" id="cps" class="span12" />
									</div>
								</div>
								<div class="span2">
									<div class="form-group">
										<label>Session *
										</label>
										<input type="text" name="stu_session" id="cvill" class="span12" />
									</label>
								</div>
							</div>
							<div class="span3">
								<div class="form-group">
									<label>Trade/Course name *
									</label>
									<input type="text" name="stu_trade" id="cdist" class="span12" />
								</div>
							</div>
							<div class="span2">
								<div class="form-group">
									<label>Roll/Reg *
									</label>
									<input type="text" name="stu_roll" id="cpost" class="span12" />
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
									<input type="text" name="stu_examination" id="ccorpname" class="span12" />
								</div>
							</div>
							<div class="span3">
								<div class="form-group">
									<label>Board *
									</label>
									<input type="text" name="stu_board" id="dno" class="span12" />
								</div>
							</div>
							<div class="span2">
								<div class="form-group">
									<label>Group *
									</label>
									<select name="stu_group" tabindex="1" data-placeholder="Select here.." class="span12">
										<option value="">....</option>
										<option value="Science">Science</option>
										<option value="Arts">Arts</option>
										<option value="Commerce">Commerce</option>
										<option value="Technical">Technical</option>
										
									</select>
								</label>
							</div>
							</div> 			<div class="span2">
							<div class="form-group">
								<label>Passing Year *
							</label>
								<input type="text" name="stu_pass_year" id="khotian" class="span12" />
							</label>

						</div>
						</div> 			<div class="span1">
						<div class="form-group">
							<label>Result *
							</label>
							<input type="text" name="stu_result" id="" class="span12" />
						</label>
					</div>
				</div> 
			</div>
		</div> 
	</div> 
	<center>
		<div class="form-group">
			<input type="submit" name="savepreapply" class="btn-large btn-success" value="Submit Your Application"/>
		</center>
	</div>
</form>
</div>
</div> 
</div> 
</div> 
<div class="footer">
	<div class="container">
		<b class="copyright">&copy; 2018</b> Technical Support by exploreit.com.bd
	</div>
</div>	
</body></html>	

<script src="<?php echo base_url(); ?>asset/public/scripts/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/public/scripts/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url(); ?>asset/public/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/public/scripts/datatables/jquery.dataTables.js"></script>
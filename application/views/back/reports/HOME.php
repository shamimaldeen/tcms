<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Training Center Management System</title>
		<link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="../css/theme.css" rel="stylesheet">
		<link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<i class="icon-reorder shaded"></i>
					</a>
					<a class="brand" href="index.php"> 
						Training Center Management System
					</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
						<?php include( '../top_menu.php'); ?>
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
													<form action="print_invoice_list.php" method="get">
														<div class="row-fluid">
															<div class="span9">
																<div class="form-group">
																	<label>Reports Name</label>
																	<select  name="" class="span12">
																		<option value="">----</option>
																		<option> Students List (Batch) </option>
																		<option> Students List (Course) </option>
																		<option> Course List </option>
																		<option> New Application </option>
																		<option> Batch Wise Result </option>
																		<option> Attendance (Indv) </option>
																		<option> Payment Collection Report </option>
																		<option> Staffs List </option>
																		<option> Account Report (Date Wise) </option>
																		<option> Account Report (Category Wise) </option>
																		<option> Balance Sheet</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row-fluid">
															<div class="span3">
																<div class="form-group">
																	<label >Batch </label>
																	<select  name="" class="span12">
																		<option value="">----</option>								
																	</select>
																</div>
															</div>
															<div class="span3">
																<div class="form-group">
																	<label >Course</label>
																	<select  name="" class="span12">
																		<option value="">----</option>								
																	</select>
																</div>
															</div>
														
													 	<div class="span3">
																<div class="form-group">
																	<label >Student ID </label>
																	<input type="number" placeholder="" class="span12">
																</div>
															</div>
															</div>
														<div class="row-fluid">
															<div class="span3">
																<div class="form-group">
																	<label >Category</label>
																	<select  name="" class="span12">
																		<option value="">----</option>								
																	</select>
																</div>
															</div>
															<div class="span3">
																<div class="form-group">
																	<label >Date to </label>
																	<input type="date" placeholder="" class="span12">
																</div>
															</div>
															<div class="span3">
																<div class="form-group">
																	<label >Date</label>
																	<input type="date" placeholder="" class="span12">
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
									<div style="margin-top:-20px;" class="span2">
										<div class="sidebar">
											<?php include( '../sidebar.php'); ?>
										</div><!--/.sidebar-->
									</div>
								</div>
							</div>
							<!--/.container-->
						</div>
						<!--/.wrapper-->
					<?php include( '../footer.php'); ?>																																																																																			
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Training Center Management System</title>
		<link type="text/css" href="<?php echo base_url(); ?>asset/student/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/student/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/student/css/theme.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url(); ?>asset/student/images/icons/css/font-awesome.css" rel="stylesheet">
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
						
						<ul class="nav pull-right">
			
							
							<li><a href="<?php echo base_url(); ?>public">
								Create New Account
							</a></li>
							
							
							<li><a href="#">
								Forgot Password
							</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
		
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="module module-login span4 offset4">
						<!-- <form action="dashboard.php" class="form-vertical"> -->
							<?php echo form_open('student/login',array('class'=>'form-vertical')) ?>
							<div class="module-head">

							<?php if($this->session->success): ?>
						        <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
						     <?php endif; ?>

						     <?php if($this->session->error): ?>
						        <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
						     <?php endif; ?>

								<h3>Student Login</h3>

							</div>
							<div class="module-body">
								<div class="control-group">
									<div class="controls row-fluid">
										<input class="span12" type="text" name="email" id="inputEmail" placeholder="Username">
									</div>
								</div>
								<div class="control-group">
									<div class="controls row-fluid">
										<input class="span12" type="password" name="password" id="inputPassword" placeholder="Password">
									</div>
								</div>
							</div>
							<div class="module-foot">
								<div class="control-group">
									<div class="controls clearfix">
										<button type="submit" class="btn btn-primary pull-right">Login</button>
										<label class="checkbox">
											<input type="checkbox"> Remember
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/.wrapper-->
		
				
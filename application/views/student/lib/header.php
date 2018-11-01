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
		<style type="text/css">
			.nav-tabs {
			border-bottom: 2px solid #DDD;
			border-bottom: 2px solid #FFC107;
    padding: 4px;
    font-size: 16px;
			}
			.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
			border-width: 0;
			}
			.nav-tabs > li > a {
			border: none;
			color: #666;
			}
			.nav-tabs > li.active > a, .nav-tabs > li > a:hover {
			border: none;
			color: #4285F4 !important;
			background: transparent;
			}
			.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after {
			transform: scale(1);
			}
			.tab-pane {
			padding: 15px 0;
			}
			.tab-content {
			padding: 20px;
			padding-top: 0px;
			margin-top: -10px;
			}
			.card {
			background: #FFF none repeat scroll 0% 0%;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.05);
			margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <i class="icon-reorder shaded"></i> </a> <a class="brand" href="<?php echo base_url(); ?>student/dashboard"> Training Center Management System</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">

	              <li><a href="<?php echo base_url(); ?>student/dashboard" > <i class="menu-icon icon-dashboard"></i>  Dashboard</a></li>
	          <li class="nav-user dropdown">
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<img src="<?php echo base_url(); ?>asset/student/images/user.png" class="nav-avatar" />
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			<li><a href="<?php echo base_url(); ?>asset/student/profile_update.php"> <i class="menu-icon icon-edit"></i>  Profile </a></li>
			<li class="divider"></li>
			<li><a href="<?php echo base_url(); ?>/student/logout"><i class="menu-icon icon-signout"></i>   Logout </a></li>
		</ul>
	</li>
</ul>
</div><!-- /.nav-collapse -->
</div>
</div><!-- /navbar-inner -->
</div><!-- /navbar -->
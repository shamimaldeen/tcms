<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Matrisaya Training Center</title>
		<link type="text/css" href="<?php echo base_url();?>asset/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>asset/front/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>asset/front/css/theme.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>asset/front/images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<i class="icon-reorder shaded"></i>
					</a>
					<a class="brand" href="<?php echo base_url(); ?>/webmaster"> 
						Training Center Management System
					</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
						<ul class="nav pull-right">
	<li><a href="<?php echo base_url(); ?>/admin" > <i class="menu-icon icon-user"></i>  Admin</a></li>
	
	
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="menu-icon icon-globe"></i> Web<b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="<?php echo base_url(); ?>" target="_blank"> <i class="menu-icon icon-globe"></i>  Web View</a></li>
			<li><a href="<?php echo base_url(); ?>webmaster" > <i class="menu-icon icon-globe"></i>  Page Archive</a></li>
			<li><a href="<?php echo base_url(); ?>webmaster/site"> <i class="menu-icon icon-globe"></i>  Website Profile</a></li>
		</ul>
	</li>
	
	<li class="nav-user dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<img src="<?php echo base_url(); ?>uploads/front/site/<?php echo $this->session->site_logo;?>" class="nav-avatar" />
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			
			<li><a href="<?php echo base_url(); ?>admin/logout"><i class="menu-icon icon-signout"></i>   Logout </a></li>
		</ul>
	</li>
</ul>
</div><!-- /.nav-collapse -->
</div>
</div><!-- /navbar-inner -->
</div><!-- /navbar -->
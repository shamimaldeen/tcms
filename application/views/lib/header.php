<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>
         Dashboard | Human Resource Management System
      </title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- favicon -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/favicon.PNG">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="http://localhost/pos_git/assets/bower_components/select2/dist/css/select2.min.css">
      <!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"> 
         -->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Google Font -->
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
      <header class="main-header">
         <!-- Logo -->
         <a href="<?php echo base_url(); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><i class="fa fa-ist"></i></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>H</b> Man</span>
         </a>
         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <span style="font-size: 20px;">04:51AM/19-10-2018</span>
                     </a>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->
                  <!-- Tasks: style can be found in dropdown.less -->
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img src="<?php echo base_url(); ?>uploads/important/logo.jpg" class="user-image" alt="User Image">
                     <span class="hidden-xs">Admin</span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="profile.php?id=1" class="btn btn-default btn-flat">Profile</a>
                           </div>
                           <div class="pull-right">
                              <a href="logout.php?action=logout" class="btn btn-default btn-flat">Sign out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
               </ul>
            </div>
         </nav>
      </header>
      <!-- Left side column. contains the logo and sideba -->
      <aside class="main-sidebar">
         <!-- sidebar: style can be found in sidebar.less -->
         <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
               <div class="pull-left image">
                  <img src="<?php echo base_url(); ?>uploads/important/logo.jpg" class="img-circle" alt="User Image">
               </div>
               <div class="pull-left info">
                  <p>Administrator</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Department</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_department"><i class="fa fa-plus"></i>Add Department</a></li>
                     <li><a href="<?php echo base_url();?>department_list"><i class="fa fa-list"></i>Department List(<?php echo $this->session->total_department; ?>) </a></li>
                  </ul>
               </li>

                <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Notice Board</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_notice"><i class="fa fa-plus"></i>Add Notice</a></li>
                     <li><a href="<?php echo base_url();?>notice_list"><i class="fa fa-list"></i>Notice List<?php //echo $this->session->total_department; ?></a></li>
                  </ul>
               </li>

               

               <li class="treeview">
                  <a href="#">
                  <i class="fa fa-car"></i> <span>Designation</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_designation"><i class="fa fa-plus"></i>Add Designation </a></li>
                     <li><a href="<?php echo base_url();?>designation_list"><i class="fa fa-list"></i>Designation List</a></li>
                  </ul>
               </li>

                   <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Training</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_training"><i class="fa fa-plus"></i>Add Training</a></li>
                     <li><a href="<?php echo base_url();?>training_list"><i class="fa fa-list"></i>Training List<?php //echo $this->session->total_department; ?></a></li>
                  </ul>
               </li>

               

                 <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Stock_category</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_stock_category"><i class="fa fa-plus"></i>Add Stock_category</a></li>
                     <li><a href="<?php echo base_url();?>stock_category_list"><i class="fa fa-list"></i>Stock_category List<?php //echo $this->session->total_department; ?></a></li>
                  </ul>
               </li>

               <li class="treeview">
                  <a href="#">
                     <i class="fa fa-handshake-o"></i> <span>Employee</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_employee"><i class="fa fa-plus"></i>Add Employee</a></li>
                     <li><a href="<?php echo base_url();?>employee_list"><i class="fa fa-list"></i>Employee List</a></li>
                  </ul>
                   
               </li>

                   <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Client</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_client"><i class="fa fa-plus"></i>Add Client</a></li>
                     <li><a href="<?php echo base_url();?>client_list"><i class="fa fa-list"></i>Client List<?php //echo $this->session->total_department; ?></a></li>
                  </ul>
               </li>

                  <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i> <span>Project</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url();?>add_project"><i class="fa fa-plus"></i>Add Project</a></li>
                     <li><a href="<?php echo base_url();?>stock_category_list"><i class="fa fa-list"></i>Project List<?php //echo $this->session->total_department; ?></a></li>
                  </ul>
               </li>






              
               
            </ul>
         </section>
         <!-- /.sidebar -->
      </aside>
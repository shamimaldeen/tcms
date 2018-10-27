<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Training Center Management System</title>
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
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
						
						<div class="wrapper">
							<div class="container"> 
								<div class="row">
									<div class="span10">
										<div class="content">
											
											<div class="module">
												<div class="module-head">
													
													
													<div class="module-option clearfix">
														<div class="pull-left">
															<h3>Category List</h3>
														</div>
														<div class="pull-right">
															
															 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="menu-icon icon-plus"></i> Add New </button> 
															
														</div>
													</div>
												</div>
												<div class="module-body table">
													<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
														<thead>
															<tr>
																<th nowrap width="3%" >#</th>
																<th  nowrap> Category</th>
																
																
																
																<th nowrap width="1%"> - </th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd gradeX">
																<td nowrap>01</td>
																<td nowrap>Bank</td>
																
																
																<td nowrap>  <a href="#.php" class="btn btn-danger"><i class="menu-icon icon-trash"></i> </a></td>
															</tr>
														</tbody>
														<tfoot>
														</tfoot>
													</table>
												</div>
											</div><!--/.module-->
										</div><!--/.content-->
									</div><!--/.span9-->
									<div style="margin-top:-20px;" class="span2">
										<div class="sidebar">
											
										</div><!--/.sidebar-->
									</div>
								</div>
							</div>
							<!--/.container-->
						</div>
						<!--/.wrapper-->
						
				
					
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add New Transaction </h4>
									</div>

									 <?php if($this->session->success): ?>
								        <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
								     <?php endif; ?>

								     <?php if($this->session->error): ?>
								        <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
								     <?php endif; ?>
									<div class="modal-body">
							 <?php  echo form_open('accountcategory/save_account_category',array('id'=>'')) ?>
											<div class="row-fluid">
											 
													<div class="row-fluid">
												<div class="span12">
													<div class="form-group">
														<label>Category</label>
														<input type="text" name="acc_cat_title" placeholder="Category name" class="span12">
													</div>
												</div>
											</div>
											</div>
									 
										 
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<center>
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Save</button>
								</center>
							</div>
						</div>
					</div>
				</div>		
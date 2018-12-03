
		<div class="wrapper">
			<div class="container"> 

		<?php if($this->session->success): ?>
	<p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
	<?php endif; ?>

  <?php if($this->session->error): ?>
	 <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
  <?php endif; ?>
				<div class="row">
					<div class="span12">
						<div class="content">
							<div class="module">
								<div class="module-head">
									<div class="module-option clearfix">
										<div class="pull-left">
											<h3>Page Archive</h3>
										</div>
										<div class="pull-right">
											<a href="<?php echo base_url();?>front/admin_back/page_create" class="btn btn-primary"><i class="menu-icon icon-plus"></i>  Add New Page</a>
										</div>
									</div>
								</div>
								<div class="module-body table">
									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
										<thead>
											<tr>
												<th nowrap  >PAGE ID</th>
												<th nowrap  >PAGE TITLE</th>
												<th nowrap >PAGE TYPE</th>
												<th nowrap >DATE</th>
												<th width="1%" nowrap >   </th>
											</tr>
										</thead>
										<tbody>

								<?php $i = 1; foreach($pages as $page){?>
											<tr class="odd gradeX">
												<td nowrap><?php echo $page->page_id; ?></td>
												<td nowrap><?php echo $page->page_title; ?></td>
												<td nowrap><?php echo $page->page_type; ?></td>
												<td nowrap><?php echo $page->page_added_date; ?></td>
												<td nowrap class="center">
													<a href="<?php echo base_url();?>front/admin_back/edit_page_create/<?php echo $page->page_id; ?>" class="btn btn-success"><i class="menu-icon icon-edit"></i>  </a>

                                         <?php if($page->page_id == 42 || $page->page_id == 58 ||$page->page_id == 59 || $page->page_id == 60 ){ ?>
													
                                           <?php }else{ ?>

                                           	<a href="<?php echo base_url();?>front/admin_back/delete_page_create/<?php echo $page->page_id; ?>" class="btn btn-danger" onclick="return(confirm('Are you sure to delete?'))"><i class="menu-icon icon-trash"></i>  </a>

                                           <?php }?>

												</td>
											</tr>

											<?php $i++;} ?>
										</tbody>
										<tfoot>
										</tfoot>
									</table>
								</div>
							</div><!--/.module-->
						</div><!--/.content-->
					</div><!--/.span9-->
				</div>
			</div>
			<!--/.container-->
		</div>
		<!--/.wrapper-->




		<!-- Modal 
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				Modal content
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title">Add Client</h4>
					</div>
					<div class="modal-body">
						<form action="print_report.php" method="get">
							<div class="row-fluid">
								<div class="span8">
									<div class="form-group">
										<label>Client Name</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
								<div class="span4">
									<div class="form-group">
										<label>Contact Person</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span4">
									<div class="form-group">
										<label>Contact No.</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
								<div class="span4">
									<div class="form-group">
										<label>Mobile 1</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
								<div class="span4">
									<div class="form-group">
										<label>Mobile 2</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label>Email Address</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
								<div class="span6">
									<div class="form-group">
										<label>Web</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Address</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span8">
									<div class="form-group">
										<label>Ref</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
								<div class="span4">
									<div class="form-group">
										<label>Added Date</label>
										<input type="date" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Logo</label>
										<input type="file" placeholder="" class="span12">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<center>
						<button type="reset" class="btn btn-warning">Reset</button>
						<button type="submit" class="btn btn-success"><i class="menu-icon icon-save"></i> Save</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	-->
																																																																																																																					
<div class="wrapper">
							<div class="container">

								 <?php if($this->session->success): ?>
							        <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
							     <?php endif; ?>

							     <?php if($this->session->error): ?>
							        <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
							     <?php endif; ?>

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
									<div style="" class="span2">
										<div class="sidebar">
											
								
							<ul class="widget widget-menu unstyled">
								
								<li>
									<a href="<?php echo base_url(); ?>dashboard">
										<i class="menu-icon icon-dashboard"></i>
										Dashbaord
									</a>
								</li>
								
								<li>
									<a href="<?php echo base_url(); ?>students_archive">
										<i class="menu-icon icon-user"></i>
										Student List
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>current_course">
										<i class="menu-icon icon-folder-open"></i>
										Active Course
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>complited_course">
										<i class="menu-icon icon-list-alt"></i>
										Result
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>attendance_record">
										<i class="menu-icon icon-ok"></i>
										Attendance
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>staff_list">
										<i class="menu-icon icon-user"></i>
										Staffs
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>report">
										<i class="menu-icon icon-print"></i>
										Report
									</a>
								</li>
							</ul><!--/.widget-nav-->




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
									<div class="modal-body">
					<?php  echo form_open_multipart('accountcategory/save_account_category',array('id'=>'')) ?>
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
								
							</div>
							<div class="modal-footer">
								<center>
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Save</button>
								</center>
							</div>
							</form>
						</div>
					</div>
				</div>		
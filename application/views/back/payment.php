
						<div class="wrapper">
							<div class="container"> 
								<div class="row">
									<div class="span12">
										<div class="content">
											<div class="module">
												<div class="module-head">
													<div class="module-option clearfix">
														<div class="pull-left">
															<h3>Payments Records</h3>
														</div>
														<div class="pull-right">
															<a href="<?php echo base_url(); ?>payment_pending" class="btn btn-warning"><i class="menu-icon icon-refresh"></i>  PENDING PAYMENT</a>
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="menu-icon icon-plus"></i> PAYMENT RECEIVE </button>
														</div>
													</div></div>
													<div class="module-body table">
														<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
															<thead>
																<tr>
																	<th nowrap  >Trans ID.</th>
																	<th  nowrap> Student ID</th>
																	<th nowrap  >Student Name</th>
																	<th nowrap  > Fees</th>
																	<th nowrap  > Methood</th>
																	<th nowrap  >Received Date</th>
																	<th nowrap width="1%"> - </th>
																</tr>
															</thead>
															<tbody>
																<tr class="odd gradeX">
																	<td nowrap>01</td>
																	<td nowrap>546645</td>
																	<td nowrap>Md. Abdullah AL Mamun</td>
																	<td nowrap>1500</td>
																	<td nowrap>Bkash</td>
																	<td nowrap>12-12-2018</td>
																	<td nowrap><a href="#.php" class="btn-small btn-danger"><i class="menu-icon icon-trash"></i> </a></td>
																</tr>
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
					
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"> PAYMENT RECEIVE</h4>
									</div>
									<div class="modal-body">
										<form action="print_report.php" method="get">
											<div class="row-fluid">
												<div class="span3">
													<div class="form-group">
														<label>Student ID</label>
														<input type="number" placeholder="" class="span12">
													</div>
												</div>
												<div class="span3">
													<div class="form-group">
														<label>Fees</label>
														<input type="number" placeholder="" class="span12">
													</div>
												</div>
												<div class="span6">
													<div class="form-group">
														<label>Received Date</label>
														<input type="date" placeholder="" class="span12">
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<center>
										<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Done</button>
									</center>
								</div>
							</div>
						</div>
					</div>					
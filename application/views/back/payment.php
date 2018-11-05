
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
															<?php  foreach($apayments as $apayment) {?>

																<tr class="odd gradeX">
																	<td nowrap><?php echo $apayment->apay_tra_id;?></td>
																	<td nowrap><?php  echo $apayment->stu_id;?></td>
																	<td nowrap><?php echo $apayment->stu_name;?></td>
																	<td nowrap><?php echo $apayment->apay_fee;?></td>
																	<td nowrap><?php echo $apayment->apay_method;?></td>
																	<td nowrap><?php echo $apayment->apay_date;?></td>
																	<td nowrap>
																		<a href="<?php echo base_url(); ?>payment/payment_delete/<?php echo $apayment->apay_id; ?>" class="btn-small btn-danger"  onclick="return(confirm('Are you sure to delete?'))">

																			<i class="menu-icon icon-trash"></i>
																		 </a>
																	</td>
																</tr>
														<?php  } ?>	
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
										<?php  echo form_open('payment/save_receive',array('id'=>'')) ?>
											<div class="row-fluid">
												<div class="span3">
													<div class="form-group">
														<label>Student ID</label>
														<input type="number" name="stu_id" placeholder="" class="span12">
													</div>
												</div>
												<div class="span3">
													<div class="form-group">
														<label>Fees</label>
														<input type="number" name="apay_fee" placeholder="" class="span12">
													</div>
												</div>
												<div class="span3">
													<div class="form-group">
														<label>Transaction Id</label>
														<input type="text" name="apay_tra_id" placeholder="" class="span12">
													</div>
												</div>
											<div class="span3">
									       <label> Methods</label>
									        <select  name="apay_method"  class="span12">
										  <option value=""> Select  </option>
										  <option value="Bkash"> Bkash  </option>
										   <option value="Rocket"> Rocket  </option>
										   <option value="SureCash"> SureCash  </option>
									     </select>
								           </div>
												<div class="span6">
													<div class="form-group">
														<label>Received Date</label>
														<input type="date" name="apay_date" placeholder="" class="span12">
													</div>
												</div>
											</div>
										</div>
									
								</div>
								<div class="modal-footer">
									<center>
										<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Done</button>
									</center>
								</div>
								</form>
							</div>
						</div>
					</div>					
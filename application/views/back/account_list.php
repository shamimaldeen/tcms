 <?php

       //date formattting
         function format_date($data)
         {
           $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
           return $formattedweddingdate = $date->format('d-m-Y');
         }
        ?>
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
															<h3>Account</h3>
														</div>
														<div class="pull-right">
															<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class="menu-icon icon-plus"></i> Add New </button> 
															<a href="<?php echo base_url(); ?>account_category_list" class="btn btn-primary"><i class="menu-icon icon-plus"></i>  Category</a>
														</div>
													</div>
												</div>
												<div class="module-body table">
													<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
														<thead>
															<tr>
																<th nowrap  >Trans #</th>
																<th nowrap  >Date #</th>
																<th  nowrap> Category</th>
																<th  nowrap> Description</th>
																<th  nowrap> Cash In</th>
																<th  nowrap> Cash Out</th>
															 
																<th nowrap width="1%"> - </th>
															</tr>
														</thead>
													<tbody>

												<?php $i = 1; foreach($accounts as $account) {?>
														<tr class="odd gradeX">
															<td nowrap><?php echo $i; ?></td>
															<td nowrap><?php echo format_date($account->account_date); ?></td>
															<td nowrap><?php echo $account->acc_cat_title; ?></td>
															<td nowrap><?php echo $account->account_description; ?></td>
															<td nowrap><?php echo $account->account_cash_in; ?></td>
															<td nowrap><?php echo $account->account_cash_out; ?></td>
												 <td nowrap> 

													 <a href="#.php" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"><i class="menu-icon icon-edit"></i>
													  </a>

													<a href="<?php echo base_url();?>delete_account/<?php echo $account->account_id; ?>" class="btn btn-danger"><i class="menu-icon icon-trash" onclick="return confirm('are you sure to delete?')"></i> 
													</a>
												  </td>
											</tr>

									<!---edit  modal start-->
									<!-- Modal -->
									<div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Add New Transaction </h4>
												</div>
												<div class="modal-body">
												<?php  echo form_open_multipart('account/update_account/'.$account->account_id,array('id'=>'')) ?>
														<div class="row-fluid">
															<div class="span12">
																<div class="form-group">
																	<label>Category</label>
																	<select  name="acc_cat_title" class="span12">
																	 <option value="" disabled="" selected="">Select Category</option>	
														    <?php  foreach($categories as $category): ?>
			                                                    <option value="<?php echo $category->acc_cat_id; ?>"><?php echo $category->acc_cat_title; ?></option>

			                                               <?php endforeach; ?>						
																		
																		
																	</select>
																</div>
															</div>
																<div class="row-fluid">
															<div class="span12">
																<div class="form-group">
																	<label>Description</label>
																	<input type="text" value="<?php echo $account->account_description;?>" name="account_description" placeholder="Description here" class="span12">
																</div>
															</div>
														</div>
														</div>
														<div class="row-fluid">
															<div class="span6">
																<div class="form-group">
																	<label>Cash In</label>
																	<input type="date" value="<?php echo $account->account_cash_in;?>" name="account_cash_in" placeholder="" class="span12">
																</div>
															</div>
															<div class="span6">
																<div class="form-group">
																	<label>Cash Out</label>
																	<input type="date" value="<?php echo $account->account_cash_out;?>" name="account_cash_out" placeholder="" class="span12">
																</div>
															</div>
														</div>
													 
													</div>
												</div>
											
										</div>
										<div class="modal-footer">
											<center>
												<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i>Update</button>
											</center>
										</div>
										</form>
									</div>
								</div>
							</div>		

					<!---edit  modal end-->		
					     	      <?php $i++; } ?>
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
										<h4 class="modal-title">Add New Transaction </h4>
									</div>
									<div class="modal-body">
										<?php  echo form_open_multipart('account/save_account',array('id'=>'')) ?>
											<div class="row-fluid">
												<div class="span12">
													<div class="form-group">
														<label>Category</label>
														<select  name="acc_cat_id" class="span12">
														 <option value="" disabled="" selected="">Select Category</option>	
													    <?php  foreach($categories as $category): ?>
		                                                    <option value="<?php echo $category->acc_cat_id; ?>"><?php echo $category->acc_cat_title; ?></option>

		                                               <?php endforeach; ?>						
															
															
														</select>
													</div>
												</div>
													<div class="row-fluid">
												<div class="span12">
													<div class="form-group">
														<label>Description</label>
														<input type="text" name="account_description" placeholder="Description here" class="span12">
													</div>
												</div>
											</div>
											</div>

											<div class="row-fluid">
												<div class="span12">
													<div class="form-group">
														<label>Transaction Date</label>
														<input type="date" name="account_date" placeholder="" class="span12">
													</div>
												</div>
												
											</div>

											<div class="row-fluid">
												<div class="span6">
													<div class="form-group">
														<label>Cash In</label>
														<input type="number" name="account_cash_in" placeholder="" class="span12">
													</div>
												</div>
												<div class="span6">
													<div class="form-group">
														<label>Cash Out</label>
														<input type="number" name="account_cash_out" placeholder="" class="span12">
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
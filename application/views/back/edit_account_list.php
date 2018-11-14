
						<div class="wrapper">
							<div class="container"> 
								<div class="row">
									<!--/.span3-->
									<div class="span10">
										<div class="content">
											<div class="module">
												<div class="module-head">
													<h3> Accounting Edit </h3>
												</div>
												<div class="module-body">
											<?php echo form_open('account/update_account/'.$accounts[0]->account_id,array()) ?>
											 
														<div class="row-fluid">
															<div class="span3">
																<div class="form-group">
																	<label >Category </label>
																	<select  name="acc_cat_id" class="span12">
															<option value=""  disabled="" selected="" >Select Category </option>
							                <?php  foreach($categories as $category): ?>
									  <option value="<?php echo $category->acc_cat_id; ?>" <?php if($category->acc_cat_id == $accounts[0]->account_id): ?> <?php endif; ?>><?php echo $category->acc_cat_title; ?></option>
								              <?php endforeach; ?>
                       		            </select>
										</div>
											</div>
														 
														
										 	<div class="span6">
													<div class="form-group">
														<label >Drescription</label>
														<input type="text" value="<?php echo $accounts[0]->account_description; ?>" name="account_description" placeholder="" class="span12">
													</div>
												</div>
												</div>
											<div class="row-fluid">
												<div class="span3">
													<div class="form-group">
														<label >Cash In</label>
														<input type="number" value="<?php echo $accounts[0]->account_cash_in; ?>" name="account_cash_in" placeholder="" class="span12">
													</div>
												</div>
												<div class="span3">
													<div class="form-group">
														<label >Cash Out</label>
														<input type="number" value="<?php echo $accounts[0]->account_cash_out; ?>"  name="account_cash_out" placeholder="" class="span12">
													</div>
												</div>
												</div>
												<div class="row-fluid">
												<div class="span3">
													<div class="form-group">
														<label >Date to </label>
														<input type="date" value="<?php echo $accounts[0]->account_date; ?>" name="account_date" placeholder="" class="span12">
													</div>
												</div>
												
											</div>
											<center>
												<hr>													
												<button type="reset" class="btn-large  btn-warning">Reset</button>
												<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Update</button>
											</center>
										</div>
									</form>
								</div>
							</div><!--/.content-->
						</div><!--/.span9-->
						<div style="margin-top:-20px;" class="span2">
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
																																																																																				
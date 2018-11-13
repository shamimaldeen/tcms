
						<div class="wrapper">
							<div class="container">
								<?php if($this->session->success): ?>
								 <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
								 <?php endif; ?>

								<?php if($this->session->error): ?>
								 <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
								<?php endif; ?>
								<div class="row">
									<div class="module module-login span4 offset4">
										<?php  echo form_open('student/save_payment',array('id'=>'')) ?>
											<div class="module-head">
												<h3>Payment</h3>
											</div>
											<div class="module-body">
												<div class="controls row-fluid">
													<label> Paid Amount</label>
													<input type="number" class="span" name="pay_paidamount" />
												</div>
												<div class="controls row-fluid">
													<label> Methods</label>
													<select  name="pay_method" class="span12">
														<option value=""> Select  </option>
														<option value="Bkash"> Bkash  </option>
														<option value="Rocket"> Rocket  </option>
														<option value="SureCash"> SureCash  </option>
													</select>
												</div>
									<div class="controls row-fluid">
										<label> Trensaction ID</label>
										<input type="text" class="span12" name="pay_tra_id" />
									</div>
											</div>
											<div class="module-foot">
												<div class="control-group">
													<div class="controls clearfix">
														<center>
															<button type="submit" class="btn-large btn-warning pull-center">Done</button>
														</center>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!--/.wrapper-->
																			

						<div class="wrapper">
							<div class="container">
								<div class="row">
									<div class="module module-login span4 offset4">
										<?php  echo form_open('attendance/select_batch',array('id'=>'')) ?>
											<div class="module-head">
												<h3>Attendance Entry</h3>
											</div>
											<div class="module-body">
												<div class="controls row-fluid">
													<select  name="batch_id" class="span12">
														<option value=""> Select Batch </option>
														 <?php  foreach($batchs as $batch): ?>
																		<option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_title; ?></option>
																	 <?php endforeach; ?>	
													</select>
												</div>
											</div>
											<div class="module-foot">
												<div class="control-group">
													<div class="controls clearfix">
														<center>
															<button type="submit" class="btn-large btn-warning pull-center">Next</button>
														</center>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!--/.wrapper-->
									
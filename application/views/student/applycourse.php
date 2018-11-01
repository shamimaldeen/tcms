
	<style>
	.module-login {
	margin-bottom: 60px;
	margin-top: 60px; 
	}
	</style>

		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="module module-login span4 offset4">
						<?php  echo form_open('studentcourse/save_course',array('id'=>'')) ?>
							<div class="module-head">
								<h3>Payment</h3>
							</div>
							<div class="module-body">
								<div class="controls row-fluid">
									<label> Paid Amount</label>
									<input type="number" class="span12" name="pay_paidamount" />
								</div>
								<div class="controls row-fluid">
									<label> Methods</label>
									<select  name="pay_method"  class="span12">
										<option value=""> Select  </option>
										<option value="Bkash"> Bkash  </option>
										<option value="Rocket"> Rocket  </option>
										<option value="SureCash"> SureCash  </option>
									</select>
								</div>
								<div class="controls row-fluid">
									<label> Trensaction ID</label>
									<input type="text" name="pay_tra_id"  class="span12" />
									<input type="hidden" class="span12" name="course_id" value="<?php echo $course_id; ?>" />
								</div>
							</div>
							<div class="module-foot">
								<div class="control-group">
									<div class="controls clearfix">
										<center>
											<button type="submit" class="btn-large btn-warning pull-center"><i class="menu-icon icon-ok-circle"></i> Submit</button>
										</center>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/.wrapper-->
																
<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="module module-login span4 offset4">
						<!-- <form class="form-vertical"> -->
           <?php echo form_open('batch/send_sms_to_all_batch_students',array('class'=>'')) ?>
							<div class="module-head">
								<h3>SMS Alart</h3>
							</div>
							<div class="module-body">
							 
									<div class="controls row-fluid">
										<select  name="batch_id" class="span12">
											<option value="" disabled="" selected="">Select batch</option>
											 <?php  foreach($batchs as $batch): ?>
											<option value="<?php echo $batch->batch_id; ?>" ><?php echo $batch->batch_title; ?></option>
											 <?php endforeach; ?>	
										</select>
									</div>
						 
							 
									<div class="controls row-fluid">
									<label> Enter Message Text</label>
								<textarea class="span12" name="message_body"  id="editor" rows="4"> </textarea>
									</div>
								 
							</div>
							<div class="module-foot">
								<div class="control-group">
									<div class="controls clearfix">
									<center>
										<button type="submit" class="btn-large btn-warning pull-center">Send</button>
										 </center>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/.wrapper-->
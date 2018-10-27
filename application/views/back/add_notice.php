
			<div class="container">
				<div class="row">
				<div class="span3">
				</div>
					<div class="module  span6">
						
			<?php if($this->session->success): ?>
		            <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
		         <?php endif; ?>

		         <?php if($this->session->error): ?>
		            <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
		      <?php endif; ?>
						  <?php  echo form_open_multipart('notice/save_notice',array('id'=>'')) ?>
							<div class="module-head">
								<h3>Notice</h3>
							</div>
							<div class="module-body">
							 
							 
									<div class="controls row-fluid">
									<label> Enter Notice Here</label>
								<textarea class="span12" name="notice_description" id="editor" rows="4"> </textarea>
									</div>
								 
							</div>
							<div class="module-foot">
								<div class="control-group">
									<div class="controls clearfix">
									<center>
										<button type="submit" class="btn-large btn-warning pull-center">Save</button>
										 </center>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		
		
		
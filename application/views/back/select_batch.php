<?php 
	//echo "<pre>";
	//print_r($capply_id); die;
?>
	<div class="wrapper">
		<div class="container"> 
			<div class="row">
				<!--/.span3-->
				<div class="span10">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3> Course Confirmation </h3>
							</div>
							<div class="module-body">
								<?php  echo form_open('course/save_courseapply',array('id'=>'')) ?>
									<div class="row-fluid">
										<div class="span5">
											<div class="form-group">
												<label>Batch Select</label>
												<select  name="batch_id" class="span12">
													<option value="">---</option>

													 <?php  foreach($batchs as $batch): ?>
													  <option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_title; ?></option>


													 <?php endforeach; ?>	

												</select>
												 <input type="hidden" name="capply_id" value="<?php echo $capply_id; ?>" >
												<input type="hidden" name="pay_id" value="<?php echo $pay_id; ?>" >
											</div>
										</div>
									</div>
								
									<center>
										<hr>													
									
										<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Approved</button>
									</center>
								</div>
							</form>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
				<div style="" class="span2">
					
				</div>
			</div>
		</div>
	<!--/.container-->
	</div>
	<!--/.wrapper-->
	
	<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script> 																																						<script src="index.js"></script>											
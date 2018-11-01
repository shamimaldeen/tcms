
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
			<?php echo form_open('student/save_inquiry',array('id'=>'')) ?>
				<div class="module-head">
					<h3>Inquiry</h3>
				</div>
				<div class="module-body">
				 
					 
				 
						<div class="controls row-fluid">
						<label>  Enter You Inquiry Here</label>
					<textarea name="inquiry_details" class="span12"  id="editor" rows="4"> </textarea>
						</div>
					 
				</div>
				<div class="module-foot">
					<div class="control-group">
						<div class="controls clearfix">
						<center>
							<button type="submit" class="btn-large btn-warning pull-center">Submit</button>
							 </center>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div><!--/.wrapper-->

		
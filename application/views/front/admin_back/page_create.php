
		<div class="wrapper">
			<div class="container"> 
				<div class="row">
					<!--/.span3-->
					<div class="span9">
						<div class="content">
							<br>
							<div class="module">
								<div class="module-head">
									<h3> CREATE PAGE</h3>
								</div>
								<div class="module-body">
									
							 <?php  echo form_open_multipart('adminback/save_page_create',array('id'=>'')) ?>
										<div class="row-fluid">
											<div class="span8">
												<div class="form-group">
													<label>PAGE TITLE</label>
													<input type="text"  name="page_title" placeholder="" class="span12">
												</div>
											</div>
											
											
										</div>
										
										<div class="row-fluid">
											<div class="control-group">
												<label class="control-label" for="basicinput">DRESCRIPTION</label>
												<div  class="controls">
													<textarea  name="page_description" class="span12"  id="editor" rows="3"> </textarea>
												</div>
											</div>
										</div>
										
										
									</div>
								
							</div>
						</div><!--/.content-->
					</div><!--/.span9-->
					<div class="span3">
						<div class="sidebar">
							<div class="row-fluid">
								
								<div class="span12">
									<div class="form-group">
										<label>PAGE TYPE</label>
										<select  name="page_type" class="span12">
											<option value="" >----</option>
											<option value="Genarel Page">Genarel Page</option>
											<option value="Testimonial">Testimonial</option>
											<option value="Slider">Slider</option>
											<option value="News">News</option>
											<option value="Blog">Blog</option>
											<option value="Photos">Photos</option>
											<option value="About Us">About Us</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row-fluid">
								
								<div class="span12">
									<div class="form-group">
										<label>Testemonial Designation</label>
										<input type="text"  name="page_testemonial_desig" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Slider Button Link</label>
										<input type="text"  name="page_slider_button_link" placeholder="" class="span12">
										
									</div>
								</div>
								
								
							</div>
									<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Photo</label>
										<input type="file"  name="page_image" placeholder="" class="span12">
										
									</div>
								</div>
								
								
							</div>
								<div class="row-fluid">
								<div class="span12">
							
							<center>
								<hr>													
											<button type="reset" class="btn-large btn-warning">Reset</button>
											<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i>Save</button>
										</center>
							
							</div><!--/.sidebar-->
						</div>
						</div>
						</div>
				</div>
			</div>
			<!--/.container-->
			</form>
		</div>
		<!--/.wrapper-->
		
		
  <script src='http://cdn.tinymce.com/4/tinymce.min.js'></script> 
 <script src="<?php echo base_url();?>asset/front/index.js"></script>															
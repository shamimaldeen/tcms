
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
									
							 <?php  echo form_open_multipart('adminback/update_page_create/'.$edit_page[0]->page_id,array('id'=>'')) ?>
										<div class="row-fluid">
											<div class="span8">
												<div class="form-group">
													<label>PAGE TITLE</label>
													<input type="text" value="<?php echo $edit_page[0]->page_title;?>" name="page_title" placeholder="" class="span12">
												</div>
											</div>
											
											
										</div>
										
										<div class="row-fluid">
											<div class="control-group">
												<label class="control-label" for="basicinput">DRESCRIPTION</label>
												<div class="controls">
													<textarea  name="page_description" class="span12"  id="editor" rows="3"><?php echo $edit_page[0]->page_description;?> </textarea>
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
											
											<option value="Genarel Page" <?php if($edit_page[0]->page_type =='Genarel Page'):?> selected="" <?php endif; ?>>Genarel Page</option>

											<option value="Testimonial" <?php if($edit_page[0]->page_type =='Testimonial'):?> selected="" <?php endif; ?>>Testimonial</option>

											<option value="Slider" <?php if($edit_page[0]->page_type =='Slider'):?> selected="" <?php endif; ?>>Slider</option>

											<option value="News"<?php if($edit_page[0]->page_type =='News'):?> selected="" <?php endif; ?>>News</option>
											<option value="Blog"<?php if($edit_page[0]->page_type =='Blog'):?> selected="" <?php endif; ?>>Blog</option>
											<option value="Photos"<?php if($edit_page[0]->page_type =='Photos'):?> selected="" <?php endif; ?>">Photos</option>
											
										</select>
									</div>
								</div>
							</div>
							
							<div class="row-fluid">
								
								<div class="span12">
									<div class="form-group">
										<label>Testemonial Designation</label>
										<input type="text" value="<?php echo $edit_page[0]->page_testemonial_desig;?>" name="page_testemonial_desig" placeholder="" class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Slider Button Link</label>
										<input type="text" value="<?php echo $edit_page[0]->page_slider_button_link;?>" name="page_slider_button_link" placeholder="" class="span12">
										
									</div>
								</div>
								
								
							</div>
									<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Photo</label>
										<input type="file" value="<?php echo $edit_page[0]->page_image;?>" name="page_image" placeholder="" class="span12">
										
									</div>
								</div>
								
								
							</div>
								<div class="row-fluid">
								<div class="span12">
							
							<center>
								<hr>													
											<button type="reset" class="btn-large btn-warning">Reset</button>
											<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i>Update</button>
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
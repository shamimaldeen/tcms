
<div class="wrapper">
<div class="container"> 
	<div class="row">
		<!--/.span3-->
		<div class="span8">
			<div class="content">
				<div class="module">
					<div class="module-head">
						<h3> Site Details</h3>
					</div>
					<div class="module-body">
					 <?php  echo form_open_multipart('adminback/update_site',array('id'=>'')) ?>
							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label for="">Site Title</label>
										<input type="text" name="site_title" value="<?php echo $sites[0]->site_title; ?>"  class="span12">
									</div>
								</div>
								<div class="span6">
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" name="site_address" value="<?php echo $sites[0]->site_address; ?>"  class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" name="email" value="<?php echo $sites[0]->email; ?>"  class="span12">
									</div>
								</div>
								<div class="span3">
									<div class="form-group">
										<label for="">Mobile</label>
										<input type="text" name="mobile" value="<?php echo $sites[0]->mobile; ?>"  class="span12"  >
									</div>
								</div>
								<div class="span3">
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" name="phone" value="<?php echo $sites[0]->phone; ?>"  class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label for="">Web Address</label>
										<input type="text" name="web_address" value="<?php echo $sites[0]->web_address; ?>"  class="span12">
									</div>
								</div>
								<div class="span6">
									<div class="form-group">
										<label for="">Facebook Page Link</label>
										<input type="text" name="facebook" value="<?php echo $sites[0]->facebook; ?>"  class="span12">
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label for="">Twitter Link</label>
										<input type="text" name="twitter" value="<?php echo $sites[0]->twitter; ?>"  class="span12">
									</div>
								</div>
								<div class="span6">
									<div class="form-group">
										<label for="">Youtube Link</label>
										<input type="text" name="youtube" value="<?php echo $sites[0]->youtube; ?>"  class="span12">
									</div>
								</div>
							</div>
							<hr>
							<center>
								<input type="submit" class="btn-large btn-success" value="Update" >
								<input type="hidden" name="updateprofile" >
							</center>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="span4">
			<div class="module">
			 <?php  echo form_open_multipart('adminback/update_site_map',array('id'=>'')) ?>
				<div class="module-head">
					<h3> Map Code</h3>
				</div>
				<div class="content">
					<div class="row-fluid">
						<div class="span12">
							<div class="form-group">
								<textarea name="map_code" class="span12"  id="editor" rows="3"> <?php echo $sites[0]->map_code; ?> </textarea>
							</div><!--/.sidebar-->
						</div><!--/.sidebar-->
					</div><!--/.sidebar-->
				</div><!--/.sidebar-->
			</div><!--/.sidebar-->
			<div class="module">
				<div class="module-head">
					<h3> Site Logo</h3>
				</div>
				<div class="content">
					<center>

						<img src="" alt="" width="200px" height="200px;">
							<input type="file" value="<?php echo $sites[0]->site_logo; ?>" name="site_logo"><br/>
							<!--<input type="hidden" name="uploadfile" ><br/>-->
							<input type="submit" value="Upload" class="btn-large btn-primary">

						</form>
						<center>
							<br>
						</div><!--/.sidebar-->
						</div><!--/.sidebar-->
						</div>
					</div>
				</div>
			</div>
			<!--/.wrapper-->
																																						
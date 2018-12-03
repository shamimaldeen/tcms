
<div class="wrapper">
	<div class="container"> 
		<div class="row">
			<!--/.span3-->
			<div class="span8">
				<div class="content">
					<div class="module">
						<div class="module-head">
							<h3> প্রোফাইল আপডেট</h3>
						</div>
						<div class="module-body">
							<form action="" method="post">
								<div class="row-fluid">
									<div class="span6">
										<div class="form-group">
											<label for="">নাম</label>
											<input type="text" name="name" class="span12">
										</div>
									</div>
									<div class="span6">
										<div class="form-group">
											<label for="">প্রতিষ্ঠোনের নাম</label>
											<input type="text" name="company_name"  class="span12">
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<div class="form-group">
											<label for="">ঠিকানা</label>
											<input type="text" name="address"   class="span12">
										</div>
									</div>
									<div class="span6">
										<div class="form-group">
											<label for="">ইমেইল</label>
											<input type="text" name="email"   class="span12">
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<div class="form-group">
											<label for="">ইউজারনেম</label>
											<input type="text"   class="span12" readonly="">
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label for="">পাসওয়ার্ড</label>
											<input type="password" name="password" class="span12">
										</div>
									</div>
									<div class="span3">
										<div class="form-group">
											<label for="">ধরণ</label>
											<input type="text" name="status"  class="span12" readonly="">
										</div>
									</div>
								</div>
								<hr>
								<center>
									<input type="submit" class="btn btn-success" value="আপডেট" >
									<input type="hidden" name="updateprofile" >
								</center>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="span4">
				<div class="module">
					<div class="content">
						<center>
							<img src="" alt="" width="200px" height="200px;">
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<input type="file" name="image"><br/>
								<input type="hidden" name="uploadfile" ><br/>
								<input type="submit" value="আপলোড" class="btn btn-success">
							</form>
							<center>
								<br>
							</div><!--/.sidebar-->
						</div><!--/.sidebar-->
					</div>
				</div>
			</div>
		</div>
	                                       										
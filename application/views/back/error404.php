<div class="wrapper">
					<div class="container">
						<h3 class="alert alert-danger">Error! 404; Page Not Found</h3>
						 <?php if($this->session->success): ?>
					        <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
					     <?php endif; ?>

					     <?php if($this->session->error): ?>
					        <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
					     <?php endif; ?>

						<div class="row">
							<!--/.span3-->
							<div class="span12">
								<div class="content">
									<div class="btn-controls">
										<div class="btn-box-row row-fluid">
											<div class="span9">
												<div class="row-fluid">
													<div class="span12">
														<a href="students_archive.php" class="btn-box medium span2"><i class="icon-user"></i><b>Students List</b>
															<a href="course_list.php" class="btn-box medium span2"><i class="icon-file"></i><b>Course Details</b>
															</a>
															</a><a href="course_applications.php" class="btn-box medium span2"><i class="icon-edit"></i><b> Applications</b>
														</a>
														</a><a href="courses_current.php" class="btn-box medium span2"><i class="icon-folder-open"></i><b>Active Course</b>
													</a>
													<a href="result_archive.php" class="btn-box medium span2"><i class="icon-list-alt"></i><b>Result</b>
													</a>
													<a href="certificates_archive.php" class="btn-box medium span2"><i class="icon-certificate"></i><b>Certificate</b>
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span12">
													</a><a href="attendance_record.php" class="btn-box medium span2"><i class="icon-ok"></i><b>Attendance</b>
												</a>
												<a href="routine_list.php" class="btn-box medium span2"><i class="icon-calendar"></i><b>Routine</b>
												</a>
												</a><a href="payment_records.php" class="btn-box medium span2"><i class="icon-ok-circle"></i><b>Payment</b>
											</a>
											</a><a href="dues.php" class="btn-box medium span2"><i class="icon-list"></i><b>Dues</b>
										</a>
										<a href="staff_list.php" class="btn-box medium span2"><i class="icon-user"></i><b>Staffs</b>
											<a href="account.php" class="btn-box medium span2"><i class="icon-book"></i><b>Account</b>
											</a>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span12">
											<a href="batch_list.php" class="btn-box medium span2"><i class="icon-asterisk"></i><b>Batch List</b>
											</a>
											<a href="notice.php" class="btn-box medium span2"><i class="icon-bullhorn"></i><b>Notice Board</b>
											</a>
											<a href="inquiry.php" class="btn-box medium span2"><i class="icon-question-sign"></i><b>Inquiry </b>
											</a>
											</a><a href="sms_alart.php" class="btn-box medium span2"><i class="icon-envelope"></i><b>SMS Alert </b>
										</a>
										<a href="reports" class="btn-box medium span2"><i class="icon-print"></i><b>Print Report</b>
										</a>
										<a href="settings.php" class="btn-box medium span2"><i class="icon-cog"></i><b>Settings</b>
										</a>
									</a> 
								</div>
							</div>
						</div>
						<ul class="widget widget-usage unstyled span3">
							<li>
								<p><strong><i class="icon-random"></i>  Statistic</strong> </p>
							</li>
							<li>
								Current Students: <strong>(120)</strong>
							</li>
							<li>
								Pending Course Application: <strong>(07)</strong>
							</li>
							<li>
								Pending Payment Request: <strong style="color:red;">(3)</strong>
							</li>
							<li>
								Total Course Completed: <strong>(850)</strong>
							</li>
						</ul>
						<ul class="widget widget-usage unstyled span3">
							<li>
								<p>
									<strong>Course Completetion </strong> <span class="pull-right medium muted">75%</span>
								</p>
								<div class="progress danger">
									<div class="bar bar-success" style="width: 45%;">
									</div>
								</div>
							</li>
						</ul>
						<ul class="widget widget-usage unstyled span3">
							<li>
								<p>
									<strong><i class="icon-comment"></i> Developer Notice</strong> 
								</p>
							</li>
							<li>
								System is now rUnder Construction. SMS balance is 0. Please recharge your balance.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--/.content-->
		</div>
		<!--/.span9-->
	</div>
</div>
<!--/.container-->
	</div>
	<!--/.wrapper-->
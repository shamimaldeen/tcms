
	<div class="wrapper">
		<div class="container"> 
			<div class="row">
				<div class="span12">
					<div class="content">
						
						<div class="module">
							<div class="module-head">
								
								
								<div class="module-option clearfix">
									<div class="pull-left">
										<h3>Course List</h3>
									</div>
								 
								</div>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th nowrap  >Course ID</th>
											<th  nowrap> Course Title</th>
											<th nowrap  >Duration</th>
											<th nowrap  >Course Fee</th>
									 
											
											
											<th nowrap width="1%"> - </th>
										</tr>
									</thead>
									<tbody>
										<?php  foreach($courses as $course){?>
										<tr class="odd gradeX">
										<td nowrap><?php echo $course->course_id ;?></td>
										<td nowrap><?php echo $course->course_title ;?></td>
										<td nowrap><?php echo $course->course_duration ;?></td>
										<td nowrap><?php echo $course->course_fee ;?></td>
									 
										
										<td nowrap>  </a> <a href="<?php echo base_url(); ?>student/applycourse_details/<?php echo $course->course_id ;?>" class="btn btn-warning"> Details </a></td>
									</tr>
								<?php } ?>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
			
			</div>
		</div>
		<!--/.container-->
	</div>
	<!--/.wrapper-->
	
																																																																																											
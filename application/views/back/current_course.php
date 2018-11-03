
		<div class="wrapper">
			<div class="container"> 
				<div class="row">
					<div class="span12">
						<div class="content">
							
							<div class="module">
								<div class="module-head">
									
									<h3>Current Courses</h3>
									
								</div>
								<div class="module-body table">
									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
										<thead>
											<tr>
													<tr>
												<th nowrap  >#</th>
												<th  nowrap> Course Title</th>
												<th  nowrap> Duration</th>
												<th nowrap  >Batch</th>
											 
												
												
												<th nowrap width="1%"> - </th>
											</tr>
										</thead>
										<tbody>

											<?php $i=1; foreach($applications as $application): ?>
											<tr class="odd gradeX">
												<td nowrap><?php echo $i ;?></td>
												<td nowrap><?php echo $application->course_title;?> </td>
												<td nowrap><?php echo $application->course_duration;?> </td>
												<td nowrap><?php echo $application->batch_title;?></td>
												
                                               <td nowrap><a href="<?php echo base_url();?>student_info/<?php echo $application->course_id; ?>/<?php echo $application->batch_id; ?>" class="btn btn-success"><i class="menu-icon icon-folder-open"></i>  Students</a></td>
											</tr>
										<?php $i++; endforeach; ?>
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
		
		
		
		
		
		
		
		
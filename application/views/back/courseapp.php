<div class="wrapper">
		<div class="container"> 
			<div class="row">
				<div class="span12">
					<div class="content">
						
						<div class="module">
							<div class="module-head">
								
				<h3>Course Applications</h3>
				
			</div>
			<div class="module-body table">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
					<thead>
						<tr>
							<th nowrap  >Students ID</th>
							<th  nowrap> Students Name</th>
							<th nowrap  >Course Title</th>
							<th nowrap  >Duration</th>
							<th nowrap  >Date</th>
							<th nowrap  >Transaction ID</th>
							<th nowrap  >Methood</th>
							
							
							<th nowrap width="1%"> - </th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1;  foreach($applications as $application): ?>
							<tr class="odd gradeX">
								<td nowrap><?php echo $application->stu_id;?></td>
								<td nowrap><?php echo $application->stu_name;?></td>
								<td nowrap><?php echo $application->course_title;?></td>
								<td nowrap><?php

								 if($application->course_duration>1){
								 	echo $application->course_duration." months";
								 }else{
								 	echo $application->course_duration." month";
								 }

								 	?></td>
								<td nowrap><?php echo $application->pay_date;?></td>
								<td nowrap><?php echo $application->pay_tra_id;?>/-</td>
								<td nowrap><?php echo $application->pay_method;?></td>
								
								<td nowrap>
									
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"> <i class="menu-icon icon-ok-circle"></i>Pending</button>

									 <a href="#.php" class="btn btn-danger">
									 	<i class="menu-icon icon-trash"></i> 
									 </a>
								</td>
							</tr>

                           <!--Edit modal start-->
							<div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">
										
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Course Confirmation</h4>
											</div>
											<div class="modal-body">
												
												<?php  echo form_open('course/save_courseapp',array('id'=>'')); ?>
													<div class="row-fluid">
														<div class="span12">
															<div class="form-group">
																<label>Batch</label>

																<select  name="batch_id" class="span12">
																<option value="">---</option>
																<option value="" disabled="" selected="">Select batch</option>

																<?php  foreach($batchs as $batch): ?>
																	<!-- <input type="hidden"  name="capply_id" value="<?php //echo $capply_id; ?>" /> -->
														    		<option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_title; ?></option>
																
																	
																<?php endforeach; ?>
																</select>

															</div>
														</div>
														
													</div>
													
												</div>
												
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<center>
								
											<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-ok-circle"></i> Aproved</button>
										</center>
									</div>
									</form>
								</div>
															
                      	 <!--Edit modal end-->

						<?php  $i++; endforeach; ?>
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


	<!-- Modal -->
	
	
</div>
</div>

	
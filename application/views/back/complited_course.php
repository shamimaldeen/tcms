
<div class="wrapper">
	<div class="container"> 
		<div class="row">
			<div class="span12">
				<div class="content">
					
					<div class="module">
						<div class="module-head">
							
							<h3>Students List of Completed Course</h3>
							
						</div>
						<div class="module-body table">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
								<thead>
									
									<tr>
										<th nowrap  >#</th>
										<th nowrap  >Course Title</th>
										<th nowrap  >Batch</th>
										<th nowrap  >Students ID</th>
										<th  nowrap> Students Name</th>
										<th nowrap  >Sex</th>
										<th nowrap  >Mobile</th>
										<th nowrap  >Result</th>
										<th nowrap  >Status</th>
										<th nowrap  >Date</th>
										<th nowrap width="1%" >---</th>
												
												
												
												
									</tr>
									
								</thead>
								<tbody>
									<?php $i=1; foreach($applications as $application) {?>
									<tr class="odd gradeX">
										<td nowrap><?php echo $i ; ?></td>
										<td ><?php echo $application->course_title; ?></td>
										<td nowrap><?php echo $application->batch_title; ?></td>
										<td nowrap><?php echo $application->stu_id; ?></td>
										<td ><?php echo $application->stu_name; ?></td>
										<td nowrap><?php echo $application->stu_sex; ?></td>
										<td nowrap ><?php echo $application->stu_mobile; ?></td>
										<td nowrap ><?php echo $application->capply_result; ?></td>
										<td nowrap ><?php echo $application->capply_status; ?></td>
										<td nowrap ><?php echo $application->capply_ending_date; ?></td>
										
										<td nowrap><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"> <i class="menu-icon icon-edit"></i> </button>  </td>
										
									</tr>
									<!--edit model start -->
                                  <!-- Modal -->
		  <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Update course Status</h4>
					</div>
					<div class="modal-body">
						
						<?php  echo form_open('course/complete_check/'.$application->capply_id,array('id'=>'')) ?>
							<div class="row-fluid">
								
								
								<div class="span4">
									<div class="form-group">
										<label>Result</label>
										<select  name="capply_result" class="span12">
											<option value="">----</option>								
											<option value="A+">A+</option>								
											<option value="A">A</option>								
											<option value="A-">A-</option>								
											<option value="B">B</option>								
											<option value="C">C</option>								
											<option value="D">D</option>								
											<option value="F">F</option>								
											
											
										</select>
									</div>
								</div>
								
								<div class="span4">
									<div class="form-group">
										<label>Date</label>
										<input type="date" name="capply_ending_date" placeholder="" class="span12">
									</div>
								</div>
								<div class="span4">
									<div class="form-group">
										<label>Course  Status</label>
										<select  name="capply_status" class="span12">
											<option value="">----</option>								
											<option value="Complete"> Complete </option>								
											<option value="Incomplete"> Incomplete </option>								
											
											
											
										</select>
									</div>
								</div>
								
							</div>
							
							
						</div>
						
					</div>
				
			         </div>
			           <div class="modal-footer">
				        <center>
					
									<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Done</button>
								</center>
							</div>
							</form>
						</div>
						
					</div>
				</div>

				<!--edit model end -->
				<?php $i++; }?>
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

		
		
		
		
		
		
		
		

		
<?php 
	// echo "<pre>";
	// print_r($applications); die;
?>
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
						<?php  foreach($applications as $application): ?>
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
								<td nowrap><?php echo $application->pay_tra_id;?></td>
								<td nowrap><?php echo $application->pay_method;?></td>
								
								<td nowrap>
									
									<!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal> <i class="menu-icon icon-ok-circle"></i>Pending</button> -->
									 <a href="<?php echo base_url();?>select_batch/<?php echo $application->capply_id; ?>/<?php echo $application->pay_id; ?>" class="btn btn-warning">
									 	<i class="menu-icon icon-ok-circle"> Pending</i> 
									 </a>

									 <a href="<?php echo base_url();?>select_batch/<?php echo $application->capply_id; ?>/<?php echo $application->pay_id; ?>" class="btn btn-danger">
									 	<i class="menu-icon icon-trash"></i> 
									 </a>
								</td>
							</tr>

                          

						<?php  endforeach; ?>
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

	
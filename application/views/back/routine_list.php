
	<div class="wrapper">
	<div class="container"> 
	<?php if($this->session->success): ?>
	<p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
	 <?php endif; ?>

	<?php if($this->session->error): ?>
	 <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
	 <?php endif; ?>
	<div class="row">
	<div class="span10">
		<div class="content">
			
			<div class="module">
				<div class="module-head">
					
					
					<div class="module-option clearfix">
						<div class="pull-left">
							<h3>Routine List</h3>
						</div>
						<div class="pull-right">
							
							<a href="<?php echo base_url(); ?>add_routine" class="btn btn-primary"><i class="menu-icon icon-plus"></i>  Add New</a>
						</div>
					</div>
				</div>
				<div class="module-body table">
					<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
						<thead>
							<tr>
								<th nowrap  >#</th>
								<th  nowrap> Batch Title</th>
						 
							
							
							<th nowrap width="1%"> - </th>
							</tr>
							</thead>
							<tbody>
			        	<?php $i = 1; foreach($routines as $routine) {?>
							<tr class="odd gradeX">
							<td nowrap><?php echo $i; ?></td>
							<td nowrap><?php echo $routine->batch_title; ?></td>
							 
							
							<td nowrap>
								<a href="<?php echo base_url();?>edit_routine/<?php echo $routine->routine_id; ?>" class="btn btn-success"><i class="menu-icon icon-edit"></i> 
								</a> 
								<a href="<?php echo base_url();?>delete_routine/<?php echo $routine->routine_id; ?>" class="btn btn-danger"><i class="menu-icon icon-trash" onclick="return confirm('are you sure to delete?')"></i> </a>
							</td>
				
							</tr>
							<?php $i++; } ?>
							</tbody>
							<tfoot>
							</tfoot>
							</table>
							</div>
							</div><!--/.module-->
							</div><!--/.content-->
							</div><!--/.span9-->
							<div style="" class="span2">
							<div class="sidebar">
							
							
					<ul class="widget widget-menu unstyled">
						
						<li>
							<a href="<?php echo base_url(); ?>dashboard">
								<i class="menu-icon icon-dashboard"></i>
								Dashbaord
							</a>
						</li>
						
						<li>
							<a href="<?php echo base_url(); ?>students_archive">
								<i class="menu-icon icon-user"></i>
								Student List
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>current_course">
								<i class="menu-icon icon-folder-open"></i>
								Active Course
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>complited_course">
								<i class="menu-icon icon-list-alt"></i>
								Result
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>attendance_record">
								<i class="menu-icon icon-ok"></i>
								Attendance
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>staff_list">
								<i class="menu-icon icon-user"></i>
								Staffs
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>report">
								<i class="menu-icon icon-print"></i>
								Report
							</a>
						</li>
					</ul><!--/.widget-nav-->




							</div><!--/.sidebar-->
							</div>
							</div>
							</div>
							<!--/.container-->
							</div>
							<!--/.wrapper-->
							
																																																																																																																	

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
					<div class="card">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-user"></i> PROFILE</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-folder-close"></i> PREVIOUS COURSE  </a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="icon-ok-circle"></i> FEES RECORD</a></li>
							<li role="presentation"><a href="#inqiury" aria-controls="inqiury" role="tab" data-toggle="tab"><i class="icon-ok-circle"></i> INQUIRY HISTORY</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="row-fluid">
									<div class="span4">
										<label >Students Name's ID: <strong> <?php echo $student[0]->stu_id; ?> </strong></label><hr style="margin:0">
									</div>
									<div class="span4">
										<label>Student's Name: <strong> <?php echo $student[0]->stu_name; ?></strong></label><hr style="margin:0">
									</div>
									<div class="span4">
										<label>Sex: <strong>  <?php echo $student[0]->stu_sex; ?></strong></label><hr style="margin:0">
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4">
										<label>Date of birth: <strong>  <?php echo $student[0]->stu_dob; ?></strong></label>	<hr style="margin:0">
									</div>
									<div class="span4">
										<label>Occupation: <strong>  <?php echo $student[0]->stu_occupation; ?> </strong></label><hr style="margin:0">
									</div>
									<div class="span4">
										<label>Religion: <strong> <?php echo $student[0]->stu_religion; ?> </strong></label><hr style="margin:0">
									</div>
								</div> 
								<div class="row-fluid">
									<div class="span4">
										<label>Father's Name: <strong>  <?php echo $student[0]->stu_father; ?> </strong></label><hr style="margin:0">
									</div>
									<div class="span4">
										<label>Mother's Name: <strong>  <?php echo $student[0]->stu_mother; ?></strong></label><hr style="margin:0">
									</div>
									<div class="span4">
										<label>Guardian 's Name: <strong> <?php echo $student[0]->stu_guardian; ?></strong></label>	<hr style="margin:0">
									</div>
								</div> 
								<br>
								<div style="margin-top:10px;"  class="alert alert-warning"> <strong>Note</strong>  </div>
								<strong>RUNNING COURSE  </strong>
								<table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th nowrap  >COURSE NO.</th>
											<th  nowrap> BATCH</th>
											<th nowrap  >COURSE TITLE</th>
											<th nowrap  >DURETION</th>
											<th nowrap  >FROM DATE </th>
											<th nowrap  >TO DATE DATE </th>
											<th nowrap  >FEE</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td nowrap>031</td>
											<td nowrap>Office jun 18</td>
											<td nowrap>Microsoft office</td>
											<td nowrap>6 month</td>
											<td nowrap>12-12-2018/-</td>
											<td nowrap>12-12-2018</td>
											<td nowrap>5000</td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped   display" width="100%">
									<thead>
										<tr>
											<th nowrap  >COURSE NO.</th>
											<th  nowrap> BATCH</th>
											<th nowrap  >COURSE TITLE</th>
											<th nowrap  >DURETION</th>
											<th nowrap  >FROM DATE </th>
											<th nowrap  >TO DATE DATE </th>
											<th nowrap  >RESULT</th>
											<th nowrap  >STATUS</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td nowrap>031</td>
											<td nowrap>Office jun 18</td>
											<td nowrap>Microsoft office</td>
											<td nowrap>6 month</td>
											<td nowrap>12-12-2018/-</td>
											<td nowrap>12-12-2018</td>
											<td nowrap>A+</td>
											<td nowrap>COMPLETED</td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
									<thead>
										<tr>
											<th nowrap  >TRANS#.</th>
											<th  nowrap> DATE</th>
											<th nowrap width="%">AMOUNT</th>
											<th nowrap width="%">METHOOD</th>
											<th nowrap width="%">TRANSACTION ID</th>
											<th  > RECEIVED DATE</th>
											<th  > STATUS</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td nowrap>01</td>
											<td nowrap>12-12-2018</td>
											<td nowrap>4000/-</td>
											<td nowrap>CASH</td>
											<td nowrap>AFSAD45SDAF</td>
											<td nowrap>12-12-2018</td>
											<td nowrap>UNPAID</td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>	
							<div role="tabpane1" class="tab-pane" id="inqiury">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
									<thead>
										<tr>
											<th nowrap  >ID</th>
											<th  nowrap> DATE</th>
											<th nowrap  >SUBJECT</th>
											<th nowrap  >STATUS</th> 
											<th nowrap width="1%"  >-</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td nowrap>031</td>
											<td nowrap>12-12-2018</td>
											<td nowrap>Microsoft office</td>
											<td nowrap>Answerd</td>
											<td nowrap><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#answerd"> View </button></td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="span2">
					<div class="module">
						<div class="module-body">
							<center>
							<img src="<?php echo base_url(); ?>uploads/student/image/<?php echo $student[0]->stu_image; ?>" width="150"  alt=""/> </div>
						</div>
						<div class="sidebar">
							<ul class="widget widget-menu unstyled">
								<li> <a href="<?php echo base_url(); ?>student/applycourse_list"> <i class="menu-icon icon-dashboard"></i> Apply New Course </a> </li>
								<li> <a href="payment.php"> <i class="menu-icon icon-dashboard"></i> Payment </a> </li>
								<li> <a href="<?php echo base_url(); ?>student/inquiry"> <i class="menu-icon icon-dashboard"></i> Inquiry </a> </li>
								<li> <a href="<?php echo base_url(); ?>student/edit_student"> <i class="menu-icon icon-list"></i> Update Information </a> </li>
							</ul>
							<!--/.widget-nav--> 
						</div>
						<!--/.sidebar--> 
					</div>
					<!--/.span3--> 
				</div>
			</div>
		</div>
		
		
	<!-- Modal -->
	<div id="answerd" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">VIEW INQUIRY </h4>
				</div>
				<div class="modal-body">
					
					<form action="#" method="get">
						<div class="row-fluid">
						Subject will be here.............
						<hr>
							
						 
							</div>
							<div class="row-fluid">
							<div class="span12">
								<div class="form-group">
									<label>Answerd</label>
									Answerd will be here.........
								</div>
							</div>
					 
							
						</div>
						
						
					</div>
					
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<center>
				
				<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Done</button>
			</center>
		</div>
	</div>
	
</div>
</div>
				
				
				
				
				
				
				

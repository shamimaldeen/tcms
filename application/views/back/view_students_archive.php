
	<style type="text/css">
			.nav-tabs {
			border-bottom: 2px solid #DDD;
			}
			.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
			border-width: 0;
			}
			.nav-tabs > li > a {
			border: none;
			color: #666;
			}
			.nav-tabs > li.active > a, .nav-tabs > li > a:hover {
			border: none;
			color: #4285F4 !important;
			background: transparent;
			}
			
			.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after {
			transform: scale(1);
			}
			
			.tab-pane {
			padding: 15px 0;
			}
			.tab-content {
			padding: 20px;
			padding-top: 0px;
			margin-top: -10px;
			}
			.card {
			background: #FFF none repeat scroll 0% 0%;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.05);
			margin-bottom: 30px;
			}
		</style>

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="span10">
				<div class="card">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-user"></i> Profile</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-folder-close"></i> COURSE COMPLETED </a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="icon-ok-circle"></i> FEES RECORD</a></li>
						
					</ul>
					
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row-fluid">
								<div class="span4">
									<label >Student's ID: <strong><?php echo $view_students_archive[0]->stu_id ;?></strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Student's Name: <strong> <?php echo $view_students_archive[0]->stu_name ;?></strong></label><hr style="margin:0">
									
								</div>
								<div class="span4">
									<label>Sex: <strong> <?php echo $view_students_archive[0]->stu_sex ;?></strong></label><hr style="margin:0">
								</div>
							</div>
							<div class="row-fluid">
								<div class="span4">
									<label>Date of birth: <strong><?php echo $view_students_archive[0]->stu_dob ;?></strong></label>	<hr style="margin:0">
								</div>
								<div class="span4">
									<label>Mobile-1: <strong> <?php echo $view_students_archive[0]->stu_mobile ;?></strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Mobile-2: <strong><?php echo $view_students_archive[0]->stu_mobile ;?></strong></label><hr style="margin:0">
								</div>
								
							</div>
							<div class="row-fluid">
								<div class="span4">
									<label>E-Mail: <strong><?php echo $view_students_archive[0]->stu_email ;?></strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Web Address: <strong>www.exploreit.com.bd </strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Ref: <strong>Mr. Kamal Uddin</strong></label><hr style="margin:0">
								</div>
								
							</div>
							<div class="row-fluid">
								<div class="span4">
									<label>E-Mail: <strong> <?php echo $view_students_archive[0]->stu_email ;?> </strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Web Address: <strong>www.exploreit.com.bd </strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Ref: <strong>Mr. Kamal Uddin</strong></label>	<hr style="margin:0">
								</div>
								
							</div>
							<div class="row-fluid">
								<div class="span4">
									<label>E-Mail: <strong> <?php echo $view_students_archive[0]->stu_email ;?></strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Web Address: <strong>www.exploreit.com.bd </strong></label><hr style="margin:0">
								</div>
								<div class="span4">
									<label>Ref: <strong>Mr. Kamal Uddin</strong></label><hr style="margin:0">
								</div>
								
							</div>
							<div class="row-fluid">
								<div class="span8">
									<label>Address: <strong><?php echo $view_students_archive[0]->stu_present_address ;?></strong></label> 
								</div>
								<div class="span4">
									<label>Added Date: <strong><?php echo $view_students_archive[0]->stu_date ;?></strong></label> 
								</div>
							</div>
							<div style="margin-top:10px;"  class="alert alert-warning"> <strong>Note</strong> Indicates a warning that might need attention. </div>
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
						<div role="tabpanel" class="tab-pane" id="messages">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
								<thead>
									<tr>
										<th nowrap  >INVOICE NO.</th>
										<th  nowrap> DATE</th>
										<th nowrap  >Student ID</th>
										<th nowrap  >STUDENT NAME</th>
										<th nowrap width="%">AMOUNT</th>
										<th nowrap width="%">METHOOD</th>
										
										<th  > RECEIVED DATE</th>
										
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td nowrap>01</td>
										<td nowrap>12-12-2018</td>
										<td nowrap>10001</td>
										<td nowrap>Abdullah Al Mamun</td>
										<td nowrap>4000/-</td>
										<td nowrap>CASH</td>
										<td nowrap>12-12-2018</td>
										
										
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
						<img src="<?php echo base_url(); ?>uploads/student/image/<?php echo $view_students_archive[0]->stu_image ;?>" width="150"  alt=""/> </div>
					</div>
					<div class="sidebar">
						<ul class="widget widget-menu unstyled">
							<li> <a href="dashboard.php"> <i class="menu-icon icon-dashboard"></i> Dashbaord </a> </li>
							<li> <a href="<?php echo base_url(); ?>edit_students_archive/<?php  echo $view_students_archive[0]->stu_id ;?>"> <i class="menu-icon icon-list"></i> Update Information </a> </li>
							
						</ul>
						<!--/.widget-nav--> 
					</div>
					<!--/.sidebar--> 
				</div>
				<!--/.span3--> 
				
			</div>
		</div>
	</div>
	
							
							
							
							
												
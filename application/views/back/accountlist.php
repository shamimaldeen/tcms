<?php
   //date formattting
     function format_date($data)
     {
       $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
       return $formattedweddingdate = $date->format('d-m-Y');
     }
    ?>
          <div class="wrapper">
			<div class="container"> 

		<?php if($this->session->success): ?>
      <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
      <?php endif; ?>
      <?php if($this->session->error): ?>
      <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
      <?php endif; ?>
				<div class="row">
					<div class="span12">
						<div class="content">
							<div class="module">
								<div class="module-head">
									<div class="module-option clearfix">
										<div class="pull-left">
											<h3>Account</h3>
										</div>
										<div class="pull-right">
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class="menu-icon icon-plus"></i> Add New </button> 
											<a href="category.php" class="btn btn-primary"><i class="menu-icon icon-plus"></i>  Category</a>
										</div>
									</div>
								</div>
								<div class="module-body table">
									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
										<thead>
											<tr>
												<th nowrap  >Trans #</th>
												<th nowrap  >Date #</th>
												<th  nowrap> Category</th>
												<th  nowrap> Description</th>
												<th  nowrap> Cash In</th>
												<th  nowrap> Cash Out</th>
											 
												<th nowrap width="1%"> - </th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td nowrap>01</td>
												<td nowrap>12-10-2018</td>
												<td nowrap>Bank</td>
												<td nowrap>Islami Bank Bangladesh </td>
												<td nowrap>5000</td>
												<td nowrap>0</td>
												<td nowrap> 
												 <a href="#.php" class="btn btn-success"><i class="menu-icon icon-edit"></i> </a>
												<a href="#.php" class="btn btn-danger"><i class="menu-icon icon-trash"></i> </a></td>
											</tr>

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
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add New Transaction </h4>
					</div>
					<div class="modal-body">
						<form action="print_report.php" method="get">
							<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Category</label>
											<select  name="" class="span12">
											<option value="">----</option>								
											
											
										</select>
									</div>
								</div>
								
								<div class="row-fluid">
								<div class="span12">
									<div class="form-group">
										<label>Description</label>
										<input type="text" placeholder="" class="span12">
									</div>
								</div>
							</div>
							</div>

							<div class="row-fluid">
								<div class="span6">
									<div class="form-group">
										<label>Cash In</label>
										<input type="date" placeholder="" class="span12">
									</div>
								</div>
								<div class="span6">
									<div class="form-group">
										<label>Cash Out</label>
										<input type="date" placeholder="" class="span12">
									</div>
								</div>
							</div>
						 
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<center>
					<button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Save</button>
				</center>
			</div>
		</div>
	</div>
</div>																	
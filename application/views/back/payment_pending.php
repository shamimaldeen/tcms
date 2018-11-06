
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
									<h3>Pending Payments Records</h3>
								</div>
								<div class="pull-right">
									<a href="<?php echo base_url(); ?>payment" class="btn btn-primary"><i class="menu-icon icon-list"></i>  Payment Records</a>
								</div>
							</div></div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th nowrap  >Trans ID.</th>
											<th  nowrap> Student ID</th>
											<th nowrap  >Student Name</th>
											<th nowrap  > Fees</th>
											<th nowrap  > Methood</th>
											<th nowrap  >Payment Date</th>
											<th nowrap width="1%"> - </th>
										</tr>
									</thead>
									<tbody>
										<?php  foreach($apayments as $apayment) {?>
										<tr class="odd gradeX">
											<td nowrap><?php echo $apayment->apay_tra_id;?></td>
											<td nowrap><?php echo $apayment->stu_id;?></td>
											<td nowrap><?php echo $apayment->stu_name;?></td>
											<td nowrap><?php echo $apayment->apay_fee;?></td>
											<td nowrap><?php echo $apayment->apay_method;?></td>
											<td nowrap><?php echo $apayment->apay_date;?></td>
											<td nowrap>
											 	<a href="<?php echo base_url(); ?>payment_approved/<?php echo $apayment->apay_id; ?>" class="btn btn-success"><i class="menu-icon icon-ok-circle">pending</i> </a> 
											 	<a href="<?php echo base_url(); ?>payment/payment_delete/<?php echo $apayment->apay_id; ?>" class="btn btn-danger" onclick="return(confirm('Are you sure to delete?'))"><i class="menu-icon icon-trash"></i> </a>
											</td>
										</tr>
											<?php  } ?>	
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
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
										<h3>Inquiry</h3>
									</div>
									<div class="pull-right">
									</div>
								</div>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th nowrap  >Date</th>
											<th nowrap  >Student ID</th>
											<th  nowrap> Student Name</th>
											<th  nowrap> Inquiry Subject</th>
											<th nowrap width="1%"> - </th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; foreach($inquirys as $inquiry): ?>
										<tr class="odd gradeX">
											<td nowrap><?php echo format_date($inquiry->inquiry_date);?></td>
											<td nowrap><?php echo $inquiry->stu_id;?></td>
											<td nowrap><?php echo $inquiry->stu_name;?></td>
											<td nowrap><?php echo $inquiry->inquiry_details;?></td>
											<td nowrap> 
												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"> <i class="menu-icon icon-share-alt"></i> Replay </button>
											</td>
										</tr>



										<!-- modal start -->
													<div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title">Replay </h4>
																</div>
																<div class="modal-body">
						<?php echo form_open('inquiry/reply/'.$inquiry->inquiry_id,array()) ?>
																		<div class="row-fluid">
																			<div class="span12">
																				<div class="form-group">
																					<p>
																						<?php echo $inquiry->inquiry_details;?>
																					</p></div>
																			</div>
																		</div>
																		<div class="row-fluid">
																			<div class="span12">
																				<div class="form-group">
																					<label>Replay</label>
																					<textarea name="inquiry_details" class="span12"  id="editor" rows="4"> </textarea>
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
													</div>
													</form>

										<!-- modal end -->




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
	
	<!-- Modal -->
	
</div>
</div>																				
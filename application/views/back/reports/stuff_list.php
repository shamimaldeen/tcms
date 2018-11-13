<?php
   //date formattting
     function format_date($data)
     {
       $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
       return $formattedweddingdate = $date->format('d-m-Y');
     }
    ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::: STUDENTS LIST BY BATCH: :::</title>
		<link rel="stylesheet " href="<?php echo base_url(); ?>asset/back/css/print.css">
	</head>
<body>
		<div class="bt-div">
			<INPUT TYPE="button" class="button blue" title="Print" onClick="window.print()" value="Print">
			<button class="button blue" onclick="goBack()">Back</button>
			<hr>
		Page size: A4		</div>
		<div class="wraper">
			<table width="100%">
				<tr>
						<td width="87%"   align="left" valign="top"><a href="dashboard.php"><img src="<?php echo base_url();?>uploads/admin/<?php echo $admininfo[0]->admin_image;?>"  alt="" height="60" class="img_div"/></a>
					</td>
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>STAFFS LIST </h2>
						 </td>
			  </tr>
</table>
				<br>
				<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
														<thead>
															<tr>
																<th nowrap  >Staff ID</th>
																<th  nowrap> Full Name</th>
																<th  nowrap> Designation</th>
																<th  nowrap> Contact Number</th>
																<th  nowrap> Joning</th>
															 
															 
															</tr>
														</thead>
														<tbody>

														<?php $i = 1; foreach($applications as $application) {?>


															<tr class="odd gradeX">
																<td nowrap><?php echo $i ;?></td>
																	<td nowrap><?php echo $application->staff_fullname;?></td>

																<td nowrap><?php echo $application->staff_designation;?></td>
																	<td nowrap><?php echo $application->staff_cnumber;?></td>
																	<td nowrap><?php echo format_date($application->staff_joining_date);?></td>
																

															</tr>
															 <?php $i++; } ?>
																 
														</tbody>
														<tfoot>
														</tfoot>
													</table>
<script>
			function goBack() {
				window.history.back();
			}
		</script>		
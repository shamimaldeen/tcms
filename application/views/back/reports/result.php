

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>:::RESULT: :::</title>
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
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>RESULT </h2>
						Batch: <strong><?php echo $batch[0]->batch_title; ?> <strong><BR>
						Course: </strong><?php echo $courses[0]->course_title; ?></strong> </td>
						
				</tr>
			</table>
			<br>
			<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
				<thead>
					<tr>
						<th nowrap  >SN</th>
						<th nowrap  >Students ID</th>
						<th  nowrap> Students Name</th>
						<th nowrap  >FATHER NAME</th>
						<th nowrap  >GRADE</th>
						
						
						
						
					</tr>
				</thead>
				<tbody>
						<?php $i = 1; foreach($applications as $application) {?>
					<tr class="odd gradeX">
						<td nowrap><?php echo $i ;?> </td>
						<td nowrap> <?php echo $application->stu_id ;?> </td>
						<td nowrap><?php echo ucwords($application->stu_name) ;?> </td>
						<td nowrap><?php echo ucwords($application->stu_father) ;?> </td>
						<td nowrap><?php echo $application->stu_result ;?> </td>
						
						
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
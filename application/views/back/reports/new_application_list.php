
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
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>NEW APPLICATION </h2>
						 </td>
			  </tr>
</table>
				<br>
				<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
														<thead>
															<tr>
																<th nowrap  >Students ID</th>
																<th  nowrap> Students Name</th>
																<th nowrap  >Course Title</th>
																<th nowrap  >Duration</th>
																<th nowrap  >Date</th>
																<th nowrap  >Amount</th>
																<th nowrap  >Transaction ID</th>
																<th nowrap  >Methood</th>
																
																
															 
															</tr>
														</thead>
														<tbody>
															<?php  foreach($applications as $application) {?>
															<tr class="odd gradeX">
																<td nowrap><?php echo $application->stu_id ;?></td>
																<td nowrap><?php echo $application->stu_name ;?></td>
																<td nowrap><?php echo $application->course_title ;?></td>
																<td nowrap><?php echo $application->course_duration ;?></td>
																<td nowrap><?php echo $application->pay_date ;?></td>
																<td nowrap><?php echo $application->pay_paidamount ;?></td>
																<td nowrap><?php echo $application->pay_tra_id ;?></td>
																<td nowrap><?php echo $application->pay_method ;?></td>
																
																 </tr>
												 <?php  } ?>
														</tbody>
														<tfoot>
														</tfoot>
													</table>
<script>
			function goBack() {
				window.history.back();
			}
		</script>		
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
		<title>::: STUDENTS LIST BY COURSE: :::</title>
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
					<td width="87%"   align="left" valign="top"><a href="dashboard.php"><img src="<?php echo base_url(); ?>asset/back/images/explore-it.png"  alt="" height="60" class="img_div"/></a>
					</td>
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>FEES COLLECTION REPORT  </h2>
											Date Between:<?php echo $starting_date ;?></strong> AND <strong><?php echo $ending_date ;?></strong> </td>
			  </tr>
</table>
				<br>
				<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
					<thead>
						<tr>
							<th nowrap  >SN</th>
							 
							<th  nowrap>STUDENT'S ID</th>
							<th nowrap  >STUDENT'S NAME</th>
							<th nowrap  >AMOUNT</th>
							
							
							<th nowrap  >METHOOD</th>
						 
							<th nowrap  >TRANSACTION ID</th>
							<th nowrap  >DATE</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($applications as $application) {?>
						<tr class="odd gradeX">
							<td nowrap><?php echo $i ;?></td>
						<td nowrap><?php echo $application->stu_id ;?></td>
						<td nowrap><?php echo $application->stu_name ;?></td>
						<td nowrap><?php echo $application->apay_fee ;?></td>
						
						
						<td nowrap><?php echo $application->apay_method ;?></td>
						<td nowrap><?php echo $application->apay_tra_id;?></td>
						<td nowrap><?php echo $application->apay_date;?></td>
						 
					</tr>
					 <?php $i++; } ?>
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<br>
			
		</p>
<script>
			function goBack() {
				window.history.back();
			}
		</script>		
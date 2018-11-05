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
					<td width="87%"   align="left" valign="top"><a href="dashboard.php"><img src="<?php echo base_url(); ?>asset/back/images/explore-it.png"  alt="" height="60" class="img_div"/></a>
					</td>
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>STUDENTS LIST BY BATCH  </h2>
						<strong>Batch: <?php echo $batch[0]->batch_title; ?> <strong><BR>
						Date Between: <?php echo $starting_date; ?></strong> AND <strong><?php echo $ending_date; ?></strong> </td>
			  </tr>
</table>
				<br>
				<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
					<thead>
						<tr>
							<th nowrap  >SN</th>
							<th  nowrap>STUDENT ID</th>
							<th nowrap  >STUDENT NAME</th>
							<th nowrap  >GENDER</th>
							
							
							<th nowrap  >DOB</th>
							<th nowrap  >MOBILE</th>
							<th nowrap  >ADDED DATE</th>
						</tr>
					</thead>
					<tbody>
					<?php $i = 1; foreach($applications as $application) {?>
						<tr class="odd gradeX">
						<td nowrap style="text-align: center;"><?php echo $i ;?></td>
						<td nowrap style="text-align: center;"><?php echo $application->stu_id ;?></td>
						<td nowrap><?php echo $application->stu_name ;?></td>
						<td nowrap style="text-align: center;"><?php echo $application->stu_sex ;?></td>
						
						
						<td nowrap style="text-align: center;"><?php echo $application->stu_dob ;?></td>
						<td nowrap style="text-align: center;"><?php echo $application->stu_mobile ;?></td>
						<td nowrap style="text-align: center;"><?php echo format_date($application->stu_date);?></td>
						 
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
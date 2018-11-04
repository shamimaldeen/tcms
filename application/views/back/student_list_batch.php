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
					<td width="87%"   align="left" valign="top"><a href="dashboard.php"><img src="../images/explore-it.png"  alt="" height="60" class="img_div"/></a>
					</td>
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>STUDENTS LIST BY BATCH  </h2>
						<strong>Batch: OFFICE 218 <strong><BR>
						Date Between: 12-12-2018</strong> AND <strong>12-12-2019</strong> </td>
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
						<tr class="odd gradeX">
							<td nowrap>&nbsp;</td>
						<td nowrap>&nbsp;</td>
						<td nowrap>&nbsp;</td>
						<td nowrap>&nbsp;</td>
						
						
						<td nowrap>&nbsp;</td>
						<td nowrap>&nbsp;</td>
						<td nowrap>&nbsp;</td>
					</tr>
					
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
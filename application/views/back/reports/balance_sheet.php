<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::: STUDENTS LIST BY BATCH: :::</title>
		<link rel="stylesheet " href="../css/print.css">
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
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>BALANCE SHEET </h2>
					Date Between: 12-12-2018</strong> AND <strong>12-12-2019</strong> </td>
			</tr>
		</table>
		<br>
		<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
			<thead>
				<tr>
					<th nowrap  >SN</th>
					<th  nowrap> REFFERANCE</th>
					<th  nowrap> Cash In</th>
					<th  nowrap> Cash Out</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td nowrap>01</td>
					<td nowrap>FEES COLLECTION </td>
					<td nowrap align="right">5000</td>
					<td nowrap align="right">0</td>
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
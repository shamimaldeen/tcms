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
					<td width="87%"   align="left" valign="top"><a href="dashboard.php"><img src="../images/explore-it.png"  alt="" height="60" class="img_div"/></a>
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
															<tr class="odd gradeX">
																<td nowrap>01</td>
																<td nowrap>Md. Abdullah Al Mamun</td>
																<td nowrap>CEO</td>
																<td nowrap>01777615690</td>
																<td nowrap>18-10-2018</td>
																 
														</tbody>
														<tfoot>
														</tfoot>
													</table>
<script>
			function goBack() {
				window.history.back();
			}
		</script>		
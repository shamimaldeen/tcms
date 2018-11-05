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
					<td width="87%"   align="left" valign="top"><a href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>asset/back/images/explore-it.png"  alt="" height="60" class="img_div"/></a>
					</td>
					<td width="13%" align="right" valign="top" nowrap="nowrap"><h2>COURSE LIST </h2>
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
				<thead>
					<tr>
						<th nowrap  >SN</th>
						<th  nowrap>COURSE LIST</th>
						
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; foreach($courses as $course) {?>
					<tr class="odd gradeX">
						<td nowrap style="text-align: center;"><?php echo $i ;?></td>
						<td nowrap style="text-align: center;"><?php echo $course->course_title ;?></td>
						
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
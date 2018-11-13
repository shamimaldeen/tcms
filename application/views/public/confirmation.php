<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::: Post Title: :::</title>
		<link rel="stylesheet " href="<?php echo base_url();?>asset/public/css/print.css">
		<style>
		
.table {
	width: 100%;
	border-collapse: collapse;
	
}
.table td {
	padding: 4px;
	border: #EEEEEE 0px solid; 
}
.table tr {
	background: #000;
}
.table th {
	background: #E8EAF6;
	border: #C5CAE9 0px solid;
	padding: 5px;
	TEXT-TRANSFORM: UPPERCASE;
}
.table tr:nth-child(odd) {
	background: #ffffff;
}
.table tr:nth-child(even) {
	background: #ffffff;
}
</style>
	</head>
<body>
		<div class="bt-div">
		  <INPUT TYPE="button" class="button blue" title="Print" onClick="window.print()" value="Print">
			<hr>
		Page size: A4		</div>
		<div class="wraper">
			<table width="100%">
				<tr>
					<td width="9%" height="102"><a href="dashboard.php"><img src="<?php echo base_url();?>uploads/admin/<?php echo $admininfo[0]->admin_image;?>" class="img_div" width="100" height="100"  alt=""/></a></td>
					<td width="82%" align="center">
						<h1 style="margin:0"> Training Center Managment System</h1>
						<h3>Students Registration Confirmation </h3>
					<lable></lable></td>
					<td width="9%" align="right"><img src="<?php echo base_url();?>uploads/student/image/<?php echo $confirmation[0]->stu_image;?>"  width="100" alt=""></td>
				</tr>
			</table>
			<hr>
			<br>
<h2>PERSONAL INFORMATION<hr></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table"  >
			<thead>
		    </thead>
			<tbody>

				  <?php foreach($confirmation as $confirmations) {?>
					
				<tr>
					<td width="10%" align="left" nowrap="nowrap">Student ID</td>
					<td width="1%" align="left" nowrap="nowrap">:</td>
					<td colspan="4" align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_id; ?></strong>
					</td>
			    </tr>
			    <tr>
					<td width="10%" align="left" nowrap="nowrap">Student Name</td>
					<td width="1%" align="left" nowrap="nowrap">:</td>
					<td colspan="4" align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_name; ?></strong>
					</td>
			    </tr>

				<tr>
				  <td align="left" nowrap="nowrap">Sex</td>
				  <td align="left" nowrap="nowrap">:</td>
				  <td width="38%" align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_sex; ?></strong></td>
				  <td width="8%" align="left" nowrap="nowrap">Date of Birth:</td>
				  <td width="1%" align="left" nowrap="nowrap">:</td>
				  <td width="42%" align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_dob; ?></strong></td>
				</tr>
				<tr>
					<td align="left" nowrap="nowrap">Religion</td>
					<td align="left" nowrap="nowrap">:</td>
					<td align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_religion; ?></strong></td>
					<td align="left" nowrap="nowrap">Marital Status </td>
					<td align="left" nowrap="nowrap">:</td>
					<td align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_marital; ?></strong></td>
			    </tr>
				<tr>
					<td align="left" nowrap="nowrap">NID/Birth Cs. </td>
					<td align="left" nowrap="nowrap">:</td>
					<td align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_nid; ?></strong></td>
					<td align="left" nowrap="nowrap">Occupation </td>
					<td align="left" nowrap="nowrap">:</td>
					<td align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_occupation; ?></strong></td>
			    </tr>
					
				<?php } ?>	
		    </tbody>
		</table>
        <br>
<h2>GUARDIAN AND CONTACT INFORMATION<hr></h2>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table"  >
          <thead>
          </thead>
          <tbody>
          	 <?php foreach($confirmation as $confirmations) {?>
            <tr>
              <td width="11%" align="left" nowrap="nowrap">Father</td>
              <td width="2%" align="left" nowrap="nowrap">:</td>
              <td width="46%" align="left" nowrap="nowrap"><?php echo $confirmations->stu_father; ?></td>
              <td width="7%" align="left" nowrap="nowrap">Mother</td>
              <td width="0%" align="left" nowrap="nowrap">:</td>
              <td width="34%" align="left" nowrap="nowrap"><?php echo $confirmations->stu_mother; ?></td>
            </tr>
            <tr>
              <td align="left" nowrap="nowrap">Guardian 's Name </td>
              <td align="left" nowrap="nowrap">:</td>
              <td align="left" nowrap="nowrap"><strong><?php echo $confirmations->stu_guardian; ?></strong></td>
              <td align="left" nowrap="nowrap">Relation with </td>
              <td align="left" nowrap="nowrap">:</td>
              <td align="left" nowrap="nowrap"><?php echo $confirmations->stu_relation; ?></td>
            </tr>
            <tr>
              <td align="left" nowrap="nowrap">Guardian' Mobile No</td>
              <td align="left" nowrap="nowrap">:</td>
              <td align="left" nowrap="nowrap"><?php echo $confirmations->stu_guardian_mobile; ?></td>
              <td align="left" nowrap="nowrap">Mobile No:</td>
              <td align="left" nowrap="nowrap">:</td>
              <td align="left" nowrap="nowrap"><?php echo $confirmations->stu_mobile; ?></td>
            </tr>
            <tr>
              <td align="left" nowrap="nowrap">E-Mail Address:</td>
              <td align="left" nowrap="nowrap">:</td>
              <td colspan="4" align="left" nowrap="nowrap"><?php echo $confirmations->stu_email; ?></td>
            </tr>
            <tr>
              <td align="left" nowrap="nowrap">Present Address </td>
              <td align="left" nowrap="nowrap">:</td>
              <td colspan="4" align="left" nowrap="nowrap"><?php echo $confirmations->stu_present_address; ?></td>
            </tr>
            <tr>
              <td align="left" nowrap="nowrap">Permanent Address </td>
              <td align="left" nowrap="nowrap">:</td>
              <td colspan="4" align="left" nowrap="nowrap"><?php echo $confirmations->stu_permanent_address; ?></td>
            </tr>
        <?php } ?>
          </tbody>
        </table>
<br>
			<h3>Have your Experience on Computer? : (<strong><?php echo $confirmations->stu_have_experience; ?></strong>)<hr></h3>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table"  >
  <thead>
  </thead>
			  <tbody>
			  	 <?php foreach($confirmation as $confirmations) {?>
			    <tr>
			      <td width="11%" align="left" nowrap="nowrap">Board/Org/Institute </td>
			      <td width="38%" height="21" align="left" nowrap="nowrap"><?php echo $confirmations->stu_institute; ?></td>
			      <td width="4%" align="left" nowrap="nowrap">Session </td>
			      <td width="11%" align="left" nowrap="nowrap"><?php echo $confirmations->stu_session; ?></td>
			      <td width="10%" align="left" nowrap="nowrap">Trade/Course name</td>
			      <td width="14%" align="left" nowrap="nowrap"><?php echo $confirmations->stu_trade; ?></td>
			      <td width="10%" align="left" nowrap="nowrap">Roll/Reg</td>
			      <td width="2%" align="left" nowrap="nowrap"><?php echo $confirmations->stu_roll; ?></td>
		        </tr>
		    <?php } ?>
		      </tbody>
</table>
			<br>
<h2>HIGHEST EDUCATIONAL QUALIFICATION<hr></h2>
            
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table"  >
  <thead>
  </thead>
			  <tbody>
			  	 <?php foreach($confirmation as $confirmations) {?>
			    <tr>
			      <td width="11%" align="left" nowrap="nowrap">Examination</td>
			      <td width="38%" height="21" align="left"><?php echo $confirmations->stu_examination; ?></td>
			      <td width="4%" align="left" nowrap="nowrap">Board </td>
			      <td width="11%" align="left"><?php echo $confirmations->stu_board; ?></td>
			      <td width="10%" align="left" nowrap="nowrap">Group</td>
			      <td width="10%" align="left"><?php echo $confirmations->stu_group; ?></td>
			      <td width="10%" align="left" nowrap="nowrap">Passing Year</td>
			      <td width="14%" align="left"><?php echo $confirmations->stu_pass_year; ?></td>
			      <td width="10%" align="left" nowrap="nowrap">Result</td>
			      <td width="2%" align="left"><?php echo $confirmations->stu_result; ?></td>
		        </tr>
		    <?php } ?>
		      </tbody>
</table>
			<br>


     <h2>Applicant's Login Information<hr></h2>
            
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table"  >
  <thead>
  </thead>
			  <tbody>
			  	 <?php foreach($confirmation as $confirmations) {?>
			    <tr>
			      <td width="11%" align="left" nowrap="nowrap">Username</td>
			      <td width="55%" height="21" align="left"><?php echo $confirmations->stu_username; ?></td>
			      <td width="4%" align="left" nowrap="nowrap">Password</td>
			      <td width="11%" align="left"><?php echo $this->session->stu_password; ?></td>
			      
		        </tr>
		    <?php } ?>
		      </tbody>
</table>




			<p>
    <center>
					<br>
					<hr>
                    <h3>
					</h3> You will get a confirmation through sms and email</h3>
					<hr>
	</center><br>
				
			</p>											
			
			<div class="footer-text"><center>কারিগরি সহযোগীতায়: এক্সপ্লোর আইটি <center></div>

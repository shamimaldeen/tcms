<?php
   //date formattting
     function format_date($data)
     {
       $date = DateTime::createFromFormat('Y-m-d',$data);
       return $formattedweddingdate = $date->format('d-m-Y');
     }
    ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Certificate</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<style>
@font-face {
	font-family: 'certificate';
	src: url('certificate.ttf') format('embedded-opentype'), url('<?php echo base_url(); ?>asset/back/certificate/certificate.ttf') format('truetype')
}
@font-face {
	font-family: 'Aspire-DemiBold';
	src: url('Aspire-DemiBold.ttf') format('embedded-opentype'), url('<?php echo base_url(); ?>asset/back/certificate/Aspire-DemiBold.ttf') format('truetype')
}
body {
	border: 20px solid transparent;
	padding: 50px;
	padding-top: 20px;
	border-image: url(<?php echo base_url(); ?>asset/back/certificate/border.JPG) 30 round;
	font-size: 20px;
	font-family: Calibri;
	background: url(sayagata-400px.png) #ffC;
}
h1 {
	color: #4CAF50;
	text-align: center;
	color: #9C27B0;
	margin: 0;
	margin-top: 7PX;
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	padding: 8px;
}
h2 {
	color: #333;
	text-align: center;
}
h3 {
	font-size: 50px;
	color: #8BC34A;
	font-weight: bold;
	text-align: center;
	margin: 0px;
	font-family: certificate;
	margin-top: 20px;
	margin-bottom: 30px;
}
samp {
	font-weight: bolder;
	font-style: italic;
	font-family: Aspire-DemiBold;
	font-size: 30px;
	text-align: center;
}
h4 {
	font-size: 20px;
	color: #006;
	border: 2px solid #006;
	padding: 3px;
	border-radius: 3px;
	min-width: 200px;
	text-align: center;
	margin-top: 5px;
	margin-bottom: 5px;
}
</style>

<body>
<CENTER>
  <table width="100%">
    <tr>
      <td width="20%">No.: <strong><?php echo $certificate[0]->capply_certificate_id; ?></strong></td>
      <td align="center">AFFILIATED BY: <BR>
Bangladesh Technical Education Board, Dhaka, Bangladesh. </td>
      <td width="20%">&nbsp;</td>
    </tr>
  </table>
</CENTER>
<h1> <img src="<?php echo base_url(); ?>asset/back/certificate/certificate-flat.png" width="100" height="100"  alt=""/><br>
  Computer Training Center and Insttitute </h1>
<center>
  MIRPUR, DHAKA, BANGLADESH
</center>
<table width="100%">
  <tr>
    <td width="20%" height="109" nowrap="nowrap">&nbsp;</td>
    <td nowrap="nowrap"><h3>Certificate</h3></td>
    <td width="20%" align="right" nowrap="nowrap"> <strong></strong></td>
  </tr>
</table>
<p style="font-style:italic; text-align:center; line-height:35px; font-size:20px;"> This is to certify that <samp><?php echo $certificate[0]->stu_name; ?></samp> Son/Dughter of <samp><?php echo $certificate[0]->stu_father; ?></samp> and <samp><?php echo $certificate[0]->stu_mother; ?></samp> has successfully completed the course on <samp style="font-family:Calibri; font-size:20px; text-transform:uppercase;"><?php echo $certificate[0]->course_title; ?>(<?php echo $certificate[0]->course_duration; ?>) </samp> and he obtaining <samp><?php echo $certificate[0]->stu_result; ?></samp> Out of GPA 5 issued on the <samp><?php echo format_date($certificate[0]->capply_result_publish); ?>.</samp></p>
<table width="100%">
  <tr>
    <td height="88" align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><strong>------------------------------ <br>
      Writter</strong></td>
    <td>&nbsp;</td>
    <td align="center"><strong> ------------------------------ <br>
      Director</strong></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
 
<?php
session_start();
if(!($_SESSION['u_name']))
{
header('location:home.php?error=you are not administrator please login again');
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/user_file.css" rel="stylesheet" />
</head>

<body>
<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/headerL.php'?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/admin_header.php'?>


<div id="detail" style="float:left; width:400px; margin-left:200px; border:3px solid #000000;">
<table align="center"width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td style="font-family:Georgia; color:#333333; font-size:24px; font-style:italic;">User Type</td>
     <td>
     <a href="user_donor_detail.php"><input type="radio" name="regtn"  /><font face="Lucida Handwriting, italic" size="+1">Donor</font></a> <a href="user_patient_detail.php"><input type="radio" name="regtn" /><font face="Lucida Handwriting, italic" size="+1">Patient</font></a>
     </td>
  </tr>
</table>




</div>
<div id="footer" style="margin-top:130px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>
</div>

</body>
</html>

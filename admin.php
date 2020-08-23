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

<div id="admin_part" style=" width:300px; float:left">
<p style="color:#990000; font-size:24px; font-family:Algerian; margin-left:100px; margin-top:20px;">Main Menu</p>
<ul id="admin_menu" style="margin-top:40px; margin-left:50px;">
	 <a href="admin.php"><li style="font-style:normal;">HOME</li></a>
 	 <a href="admin_user.php"> <li>MANAGE USER</li></a>
   <a href="manage_blood_bank.php"> <li>MANAGE BLOOD BANK</li></a>
   <a href="manage_blood_rqst.php"> <li>MANAGE BLOOD REQUEST</li>
      <a href="manage_blood_donor.php"> <li>MANAGE BLOOD DONATION</li></a>
   <!-- <li>CONTACT US</li>-->
</ul>
</div>

<div id="view_detail" style= "margin-top:0px; margin-left:200px;">
<p style="color:#990000; font-size:24px; font-family:Algerian; text-align:center ">Welcome Admin</p>




</div>
<div id="footer" style="margin-top:50px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>
</div>
</body>
</html>

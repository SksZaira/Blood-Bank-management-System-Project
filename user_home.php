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
<?php 
$p=$_SESSION['u_name'];
?>

<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/headerL.php'?>

<div id="user_menu">
<form method="get" name="home_user" action="">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void" style='margin-top:50px;'>
  <tr>
    <td><a href="user_home.php"><font color="#FFFFFF">HOME</font></a></td>
  </tr>
  <tr>
    <td><a href="user_info.php"><font color="#FFFFFF">PROFILE</font></a></td>
  </tr>
  <tr>
   <td> <a href="make_donation_page.php"><font color="#FFFFFF">MAKE DONATION</font></a></td>
   </tr>
   <tr>
   <td> <a href="change_password.php"><font color="#FFFFFF">CHANGE PASSWORD</font></a></td>
   
   
   <table width="800" height="20" cellpadding='1' border=0px style='margin-top:0px; margin-left:250px;'>
  <tr><td width="200"> <font size="+2" face="Georgia" color="#990000"><u>Welcome</u> &nbsp;&nbsp;&nbsp;&nbsp; <u> <?php 

echo $_SESSION['u_name']; ?></u></u></font></td></tr>
  </tr>  
</table>
</form>
</div>




<div id="footer">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>



</div>
</body>
</html>

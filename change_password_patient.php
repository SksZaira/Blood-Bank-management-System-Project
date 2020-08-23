
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

<?php include ('include/headerL.php') ?>
<div id="back">
<a href="user_home.php"><input type="button" name="button" value="Back"  style="border-radius:solid 5px; width:150px; height:100; font:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#990000; float:left; margin-left:10px; margin-top:20px; "/></a></div>


<div id="user_menu">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void " style='margin-top:100px; margin-left:1px; '>
  <tr>
    <td><a href="p_user_home.php"><font color="#FFFFFF">HOME</font></a></td>
  </tr>
  <tr>
    <td><a href="p_user_info.php"><font color="#FFFFFF">PROFILE</font></a></td>
  </tr>
  <tr>
   <td> <a href="make_donation_page.php"><font color="#FFFFFF">MAKE REQUEST</font></a></td></tr>
   
   <tr>
   <td> <a href="change_password_patient.php"><font color="#FFFFFF">CHANGE PASSWORD</font></a></td></tr></table>
  
   <div id="pas" style="float:left; margin-left:100px; margin-top:50px;">

   <form method="POST" action="patient_change_password.php">
    <table cellpadding="0"  width="500"  style="border-radius:6px; border:2px solid; height:200px; ">
    <tr>
    <td><h1 style="color:#990000;">Change Password</h1></td>
    </tr>
    <tr>
   <td><p style="font-family:Georgia; font-size:16px;">Enter your Email</p></td>
    <td><input type="username"  width="50"   style="width:200px; height:20px; border-radius:2px;" name="username"></td>
    </tr>
    <tr>
    <td><p style="font-family:Georgia; font-size:16px;">Enter your existing password</p></td>
    <td><input type="password"  width="50"   style="width:200px; border-radius:2px; height:20px;" name="password"></td>
    </tr>
  <tr>
    <td><p style="font-family:Georgia; font-size:16px;">Enter your new password</p></td>
    <td><input type="password"  width="50"   style="width:200px; border-radius:2px; height:20px;" name="newpassword"></td>
    </tr>
    <tr>
   <td><p style="font-family:Georgia; font-size:16px;">Re-enter your new password</p></td>
   <td><input type="password"   width="50"   style="width:200px; border-radius:2px; height:20px;" name="confirmnewpassword"></td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="submit" value="Update Password" style="border-radius:5px; height:40px; background:#000000; color:#FFFFFF; font-size:18px; font-family:'Times New Roman', Times, serif;"></td></tr>
    </table>
    </form>
    </p>
   
</div>
</div>
<div id="footer" style="margin-top:55px; float:left; margin-right:100px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>
</div>
</div>
</body>
</html>



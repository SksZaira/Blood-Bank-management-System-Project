

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

<?php include  ('include/headerL.php')?>
<div id="user_menu">
<form method="get" name="info_user" action="p_user_info.php">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void " style='margin-top:50px;'>
  <tr>
  <td> <a href="p_user_home.php"><font color="#FFFFFF" style="text-decoration:none">HOME</font></a></td>
  </tr>
  <tr>
    <td><a href="p_user_info.php"><font color="#FFFFFF" style="text-decoration:none">PROFILE</font></a></td>
  </tr>
  <tr>
   <td> <a href="make_request_page.php"><font color="#FFFFFF" style="text-decoration:none">BLOOD REQUEST</font></a></td>
    </tr>
   
   <tr>
   <td> <a href="change_password_patient.php"><font color="#FFFFFF">CHANGE PASSWORD</font></a></td></tr>
  
   
   
   <table    width="800" height="40" cellpadding='4' border=0px style='margin-top:0px; margin-left:200px;'>
  <tr><td colspan="5"> <font size="+2" face="Georgia" color="#990000"><u>Welcome</u> &nbsp;&nbsp;&nbsp;&nbsp; <u> <?php 

echo $_SESSION['u_name']; ?></u></font></td></tr>
		 <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
   								 <td>Email</td>
								 <td>Blood Group</td>
                                 <td>Request Date</td>
									
 							 </tr>
                         <?php 
		 include('include/DataConfig.php');
		 $record=mysql_query("select * from p_reg where Email='$p'") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='background-color:#FAA992; color:000000;'><td >",$r["Email"],"</td>
									<td >",$r["BloodGrp"],"</td>
									<td>",$r["RequestDate"],"</td>
										</tr>";
		}
	?>
       <tr><td colspan="6"><a href="make_request_update.php"><input type="button" name="donation" value="Blood Request" style="border-radius:2px; background-color:#00CC00; font-size:16px; font-family:Georgia; height:40px;" /></a></td>
    </tr>
</table>
</tr>
</table>
</form>




</div>


<div id="footer" style="margin-top:280px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>
</div>
</div>
</div>
							
</body>
</html>

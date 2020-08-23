
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
<form method="get" name="info_user" action="user_info.php">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void " style='margin-top:50px;'>
  <tr>
  <td> <a href="user_home.php"><font color="#FFFFFF" style="text-decoration:none">HOME</font></a></td>
  </tr>
  <tr>
    <td><a href="user_info.php"><font color="#FFFFFF" style="text-decoration:none">PROFILE</font></a></td>
  </tr>
  <tr>
   <td> <a href="make_donation_page.php"><font color="#FFFFFF" style="text-decoration:none">MAKE DONATION</font></a></td>
    </tr>
   <tr>
   <td> <a href="change_password.php"><font color="#FFFFFF">CHANGE PASSWORD</font></a></td>
  
   
   <table    width="800" height="40" cellpadding='4' border=0px style='margin-top:0px; margin-left:200px;'>
  <tr><td colspan="5"> <font size="+2" face="Georgia" color="#990000"><u>Welcome</u> &nbsp;&nbsp;&nbsp;&nbsp; <u> <?php 

echo $_SESSION['u_name']; ?></u></font></td></tr>
		 <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
   								 <td>Email</td>
    							<td >Blood Bank Name</td>
    							<td>Location</td>
    							<td>City</td>
    							<td>State</td>
                                <td>Blood Group</td>
   								 <td>Last Date Donation</td>
                            
 							 </tr>
                         <?php 
		 include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];
		 echo "OKK....";*/
		$record=mysql_query("select * from reg where Email='$p'") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='background-color:#FAA992; color:000000;'><td >",$r["Email"],"</td>
									<td >",$r["BloodBank"],"</td>
									<td>",$r["Location"],"</td>
									<td >",$r["B_City"],"</td>
									<td >",$r["B_State"],"</td>
									<td>",$r["BloodGrp"],"</td>
									<td>",$r["Last_Date_Donor"],"</td>
									</tr>";
		}
	?>
     <tr>
    <?php 
	/* include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];
		 echo "OKK....";
		$record=mysql_query("select * from reg where Email='$p'") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo $B=$r["Last_Date_Donor"];
		}
		echo $B;
		date_default_timezone_set('Asia/Kolkata');
		echo $date1=date('d/m/y');
		 
    $datetime1 = date_create($B);
    $datetime2 = date_create($date1);
	$interval = date_diff($datetime1, $datetime2);
	$k=$interval->format('%m %d ');
	     echo $k; 
		if($diff<90)
		{
		echo "<a href='make_donation_update.php'> <input type='button' name='donation' value='BD' disabled='disabled' /></a>";
		}
		else
		{
		echo "<a href='make_donation_update.php'> <input type='button' name='donation' value='BD'  /></a>";
		}*/
			?>
 <td colspan="6"><a href="make_donation_update.php"><input type="button" name="donation"  value="Blood Donation" style="border-radius:2px; background-color:#00CC00; font-size:16px; font-family:Georgia; height:40px;" /></a></td>
    </tr>
</table>
</tr>
</table>
</form>




</div>


<div id="footer" style="margin-top:235px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>
</div>
</div>
</div>
</body>
</html>


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

<div id="back">
<a href="user_home.php"><input type="button" name="button" value="Back"  style="border-radius:solid 5px; width:150px; height:100; font:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#990000; float:left; margin-left:10px; margin-top:20px; "/></a>


<div id="user_menu" style="margin-left:15px;">
<form method="get" name="info_user" action="p_user_info.php">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void " style="margin-top:50px;">
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
  
   
   
   <table    width="800" height="40" cellpadding='4' border=0px style='margin-top:0px; margin-left:170px;'>
  <tr><td colspan="7"> <font size="+2" face="Georgia" color="#990000"><u>Welcome</u> &nbsp;&nbsp;&nbsp;&nbsp; <u> <?php 

echo $_SESSION['u_name']; ?></u></font></td></tr>
							  <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
   								 <td>Name</td>
                                 <td>Father Name</td>
    							<td >Blood Group</td>
    							<td>Gender</td>
    							<td>Date Of Birth</td>
    							<td>Address</td>
   								 <td>City</td>
   								 <td>State</td>
    							<td>Mobile No.</td>
    							<td>Email</td>
                                <td colspan="1" style=" color:#00CCCC">Operation</td>
 							 </tr>
                         

	<?php 
		 include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];*/
		 //echo "OKK....";
		$record=mysql_query("select * from p_reg where Email='$p'") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='background-color:#FAA992; color:000000;'><td >",$r["Name"],"</td>
									<td >",$r["FatherName"],"</td>
									<td >",$r["BloodGrp"],"</td>
									<td>",$r["Gender"],"</td>
									<td >",$r["DOB"],"</td>
									<td >",$r["Addr"],"</td>
									<td>",$r["City"],"</td>
									<td>",$r["State"],"</td>
									<td>",$r["MoblNo"],"</td>
									<td >",$r["Email"],"</td>
									<td><a href='p_user_view_page.php?Name=".$r["Name"],"'><input type='button' name='edit_button' value='Edit' style='height:30px; width:100px; border-radius:2px; font-size:16px; color:#000000;background-color:#00CCCC;'/></a></td>
									
									</tr>";
		}
	?>
    
     </tr>
</table>
</form>
</div>	
</div>

<div id="footer" style="margin-top:290px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>

</div>
</body>
</html>

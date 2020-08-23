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
  include('include/DataConfig.php');
   $a=@$_GET['Email'];?>
<div id="wrapper">

<?php include ('include/headerL.php')?>

<?php include('include/admin_header.php')?>


<div id="detail" style="float:left; width:400px; margin-right:400px;">
<table border="1" width="400" cellspacing="0" cellpadding="4">
  <tr>
    <td style="font-family:Georgia; color:#333333; font-size:24px; font-style:italic;">User Type</td>
    <td>
     <a href="user_donor_detail.php"><input type="radio" name="regtn" checked="checked" /><font face="Lucida Handwriting, italic" size="+1">Donor</font></a> <a href="user_patient_detail.php"><input type="radio" name="regtn" /><font face="Lucida Handwriting, italic" size="+1">Patient</font></a>
     </td
  ></tr>
</table>
</div>
<div id="fetch_donor_detail" style="float:right; margin-right:195px; width:700px; margin-top:10px;">
 <table class="TFtable" width="300" height="40" cellpadding='1' border=0px>
							  <tr   align="center" style="color:#000000; font-size:14px; font-family:Algerian">
   								 <td  >Name</td>
    							<td >Blood Group</td>
    							<td>Gender</td>
    							<td>Date Of Birth</td>
    							<td>Address</td>
   								 <td>City</td>
   								 <td>State</td>
    							<td>Mobile No.</td>
    							<td>Email</td>
                                <td>Operation</td>
 							 </tr>
                         

	<?php 
		 include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];
		 echo "OKK....";*/
		$record=mysql_query("select * from reg") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='font-size:12px; color:000000;'><td >",$r["Name"],"</td>
							  		 
									<td >",$r["BloodGrp"],"</td>
									<td>",$r["Gender"],"</td>
									<td >",$r["DOB"],"</td>
									<td >",$r["Addr"],"</td>
									<td>",$r["City"],"</td>
									<td>",$r["State"],"</td>
									<td>",$r["MoblNo"],"</td>
									<td >",$r["Email"],"</td>
									<td><a href='user_delete_page.php?Email=".$r["Email"],"'><input type='button' name='d'value='Delete' style='border-radius:5px; background:#660066; color:#CCCCCC;'/></a></td>
									</tr>";
		}
	?>
    
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

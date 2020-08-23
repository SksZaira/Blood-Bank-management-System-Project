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
<div id="wrapper" style="height:900px;">

<?php include  ('include/headerL.php');
include('include/admin_header.php');
?>

<div id="fetch_detail">
<table width="600" height="40" cellpadding='1' border='2'>
							  <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:18px; font-family:Algerian">
                                <td>Name</td>
   							    <td>Email Id</td>  
    							<td>Status</td>
    							<td>Donation Date</td>
    							<td>Delete</td>
    							</tr>
                                
                                          <?php include('include/DataConfig.php');
									$record=mysql_query("select * from reg ");
									while($r=mysql_fetch_array($record))
									{
									echo "<tr align='center' style='background-color:#CEFFDB;  font-size:16px; color:000000;'><td>",$r["Name"],"</td>
									<td>",$r["Email"],"</td>
									<td>true</td>
									<td>",$r["Last_Date_Donor"],"</td>
									<td><a href='del_info_donor.php?Email=".$r["Email"],"'><input type='button' name='del' value='Delete'/></a>
									</td></tr>";
									}
								?>
           </table>

</div>
<div id="footer" style="margin-top:230px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>
</div>
</body>
</html>

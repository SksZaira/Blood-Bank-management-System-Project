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
</head>

<body>
<form name="confrm" method="post" action="">
<table width="450" border="0" cellspacing="0" cellpadding="1" style=" margin-top:200px; margin-left:50px;">
  <tr>
    <td><font size="+2" face="Georgia">Enter Your Password</font></td>
    <td><input type="text" name="pass" /></td>
  </tr>
   <tr>
    <td><input type="submit" name="submit" value="Submit" /></td>
  </tr>
</table>
</form>

<?php  include('include/DataConfig.php');
	 echo "okkk";
	 $a=$_GET['Password'];
	 if(isset($_POST['submit']))
	 {
		$p=$_POST['pass'];
	if($p==4321)
	{
	//echo "Hogya ";
	header("location:del_info_donor.php");
	}
	
		/*$qe=mysql_query("select * from admin_login where Password=''");
		while($row=mysql_fetch_array($que))
			{
			  $_SESSION['Password']=$row['Password'];
			  header("location:del_info_donor.php?Password=$a");
			  }*/
			 }
			  
	 ?>

</body>
</html>

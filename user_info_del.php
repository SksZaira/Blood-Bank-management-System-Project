<?php
 include('include/DataConfig.php');
 echo "okk";
echo $em = $_GET['email'];

	$query="delete from reg where Email='$em'";
	echo "okk..";
	if(mysql_query($query))
	{
		header("location:user_donor_detail.php?Email=$em"); 
		exit();
		}
?>
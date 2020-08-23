<?php 
	
	 include('include/DataConfig.php');
	// echo "okkk";
	 $a=$_GET['id'];
	/*
	$query ="update reg set  Addr='$ad', City='$c', MoblNo='$mob' where Name='$a'";*/
	$query= "delete from blood_bank_list where Id='$a'";
	echo "okk";
	if (mysql_query($query))
	{
		echo "ok";
	header("Location:manage_blood_bank.php?Id=$a");
	exit();
	}

?>

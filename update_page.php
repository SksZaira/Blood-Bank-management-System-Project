<?php 
	
	 include('include/DataConfig.php');
	 echo "okkk";
	 echo $a=$_GET['name'];
	
	 //$un = $_GET["name"];
	
	 $ad = $_GET["addr"];
	 $c = $_GET["city"];
	 $s = $_GET["state"];
	 $mob=$_GET["mobl"];
	
	

	//$query ="update reg set  Addr='$ad', City='$c', MoblNo='$mob' where Name='$a'";
	$query ="update reg set  Addr='$ad', City='$c', State='$s',  MoblNo='$mob' where Name='$a'";
	//echo "okk";
	if (mysql_query($query))
	{
	header("Location:user_info.php?Name=$a");
	exit();
	//echo "ok";
	}

?>

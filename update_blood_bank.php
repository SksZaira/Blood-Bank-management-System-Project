<?php 
	
	 include('include/DataConfig.php');
	 echo "okkk";
	 echo $a=$_GET['id'];
	
	 //$un = $_GET["name"];
	 $i=$_GET["id"];
	 $b=$_GET["b_name"];
	 $ad = $_GET["addr"];
	 $c = $_GET["city"];
	 $s = $_GET["state"];
	 $pn=$_GET["pin_code"];
	  $con=$_GET["country"];
	

	//$query ="update reg set  Addr='$ad', City='$c', MoblNo='$mob' where Name='$a'";
	$query ="update blood_bank_list set BloodBankName='$b',  Addr='$ad', City='$c', State='$s',  PinCode='$pn', Country='$con' where Id='$a'";
	//echo "okk";
	if (mysql_query($query))
	{
		echo "ok";
	header("Location:manage_blood_bank.php?Id=$a");
	exit();

	}

?>

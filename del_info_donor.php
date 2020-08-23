<?php 
include("include/DataConfig.php");
 echo $em=$_GET['email'];
 $que="delete from reg where Email='$em'";
  if(mysql_query($que))
  {  
     header("location:user_donor_detail.php?Email=$em");
	 exit();
  }


?>
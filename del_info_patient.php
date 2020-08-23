<?php 
include("include/DataConfig.php");
echo $em=$_GET['email'];
$que="delete from p_reg where Email='$em'";
echo "okk.....!!!";
if(mysql_query($que))
{
header("location:user_patient_detail.php?Email=$em");
exit();
}*



?>
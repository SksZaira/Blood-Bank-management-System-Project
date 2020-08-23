
<?php
session_start();
if(!($_SESSION['u_name']))
{
header('location:home.php?error=you are not administrator please login again');
}

?>

<?php
  include('include/DataConfig.php');
  $a=@$_GET['Id'];?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/user_file.css" rel="stylesheet" />

<script>
function delinfo() {
			del.action = "del_blood_bank_detail.php?Id=<?php echo $a ?>";
			del.submit();
	}
function cancel() {
	del.action ="manage_blood_bank.php?Id=<?php echo $a ?>";
	del.submit();
	}
</script>

</head>

<body>
<?php 
$p=$_SESSION['u_name'];

$record=mysql_query("select * from blood_bank_list where Id='$a'");
while($rs=mysql_fetch_array($record))
{	
	 $id=$rs['Id'];
	$b=$rs['BloodBankName'];
	$ad=$rs['Addr'];
	$c=$rs['City'];
	$s=$rs['State'];
	$pc=$rs['PinCode'];
	$con=$rs['Country'];
	}
	?>

<div id="wrapper" style="height:900px;">
<?php include ('include/headerL.php');
 ?>
<div id="update" style=" margin-top:40px; margin-left:400px;">
<form name="del" action="" method="get">
 <table width="600" border="0" cellspacing="5" cellpadding="5">
 <tr>
 	<td colspan="2"><font face="Algerian" color="#990000" size="+3">Edit Blood Bank Info</font></td>
 </tr>
 
 <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Id</font></td>
    <td ><input type="text" name="id"  value="<?php  echo $id;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"  onkeypress="return ValidateNum(event);" /></td>
  </tr> 
 <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Blood Bank Name</font></td>
    <td ><input type="text" name="b_name"  value="<?php  echo $b;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"onKeyUp="makeUppercase();"  /></td>
  </tr>
  <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Location</font></td>
    <td ><input type="text" name="addr"  value="<?php  echo $ad;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" onKeyUp="makeUppercase();" /></td>
  </tr>
  <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td ><input type="text" name="city"  value="<?php  echo $c;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" onKeyUp="makeUppercase();" /></td>
  </tr>
  <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td ><input type="text" name="state"  value="<?php  echo $s;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" onkeyup="makeUppercase();" /></td>
  </tr>
  <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Pin Code</font></td>
    <td ><input type="text" name="pin_code"  value="<?php  echo $pc;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"  onkeypress="return ValidateNum(event);" /></td>
  </tr>
  <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Country</font></td>
    <td ><input type="text" name="country"  value="<?php  echo $con;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" onKeyUp="makeUppercase();"  /></td>
  </tr>
  <tr>
  <td><input type="button" name="cancel"  value="Cancel" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="cancel90;" /></td>
  <td><input type="button" name="update" value="Delete" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="delinfo();" /></td>
  </tr>
  </table>
  </form>
</div>


</div>
</body>
</html>

<body>
</body>
</html>

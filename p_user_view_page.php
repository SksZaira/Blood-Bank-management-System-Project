<?php
session_start();
if(!($_SESSION['u_name']))
{
header('location:home.php?error=you are not administrator please login again');
}

?>

<?php
  include('include/DataConfig.php');
   $a=@$_GET['Name'];?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="css/user_file.css" rel="stylesheet" />

<script>
function saveinfo() {
			edit.action = "p_update_page.php?Email=<?php echo $a ?>";
			edit.submit();
	}
function cancel() {
	edit.action ="p_user_info.php?Email=<?php echo $a ?>";
	edit.submit();
	}
</script>
</head>

<body>
<?php 
$p=$_SESSION['u_name'];

$record=mysql_query("select * from p_reg where Email='$p'");
while($rs=mysql_fetch_array($record))
{
	$n=$rs['Name'];
	$f=$rs['FatherName'];
	$bg=$rs['BloodGrp'];
	$g=$rs['Gender'];
	$db=$rs['DOB'];
	$ad=$rs['Addr'];
	$c=$rs['City'];
	$s=$rs['State'];
	$mn=$rs['MoblNo'];
	$em=$rs['Email'];
?>

<div id="wrapper" style="height:900px;">

<?php include ('include/headerL.php') ?>

<div id="update" style=" margin-top:40px; margin-left:400px;">

<form name="edit" action="" method="get">
 <table width="500" border="0" cellspacing="0" cellpadding="2">
 <tr>
 	<td colspan="2"><font face="Algerian" color="#990000" size="+3">User Edit Info Page</font></td>
 </tr>
 <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Name</font></td>
    <td ><input type="text" name="name"  value="<?php  echo $n;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"  /></td>
  </tr>
   <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Father Name</font></td>
    <td ><input type="text" name="f_name"  value="<?php  echo $f;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"  /></td>
  </tr>
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Blood Group</font></td>
            <td><input type="text" name="blood_grp" value="<?php echo $bg;?>"  disabled="disabled"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td></tr>
    <tr>                             
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Gender</font></td>
    <td ><input type="text"  name="gen" value="<?php echo $g;?>"  disabled="disabled"   style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>    
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Date of Birth</font></td>
    <td ><input type="text" name="dob" value="<?php echo $db;?>"  disabled="disabled"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
 
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Address</font></td>
    <td><input type="text" name="addr" value="<?php echo $ad;?>" style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
  
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td><input type="text" name="city"  value="<?php echo $c;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td><input type="text" name="state" value="<?php echo $s;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" />
     </td>
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Mobile No.</font></td>
    <td><input type="text" name="mobl" maxlength="10" value="<?php echo $mn;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" /></td>
  </tr>
    
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Email</font></td>
    <td><input type="text" name="mail" value="<?php echo $em;?>"   disabled="disabled" style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
 <td><input type="button" name="cancel"  value="Cancel" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="saveinfo();" /></td>
  <td><input type="button" name="update" value="Update" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="saveinfo();" /></td>
  </tr>
</table>
</form>																										
<?php } ?>
</div>

<div id="footer" style=" margin-top:200px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>



</div>
</body>
</html>

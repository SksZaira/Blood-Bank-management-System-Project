<?php
session_start();
if(!($_SESSION['u_name']))
{
header('location:home.php?error=you are not administrator please login again');
}

?>

<?php
  include('include/DataConfig.php');
   $em=@$_GET['Email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/user_file.css" rel="stylesheet" />

<script>
function delinfo() {
			del.action="del_info_donor.php?Email=<?php echo $em ?>";
			del.submit();
	}
function cancel() {
	del.action ="user_donor_detail.php?Email=<?php echo $em ?>";
	del.submit();
	}
</script>
</head>

<body>
<!--<p>to be cotinue</p>-->
 <div id="wrapper" style="height:900px;">
<?php include ('include/headerL.php') ?>

<div id="update" style=" margin-top:40px; margin-left:400px;">

<form name="del" action="" method="get">
 <?php  
 $p=$_SESSION['u_name'];
 include('include/DataConfig.php');
 $query = mysql_query("select * from reg where Email='$em'");
            while($rs = mysql_fetch_array($query))
			{
		        $n=$rs['Name'];
		 	    $bg=$rs['BloodGrp'];
				$g=$rs['Gender'];
				$db=$rs['DOB'];
				$ad=$rs['Addr'];
				$c=$rs['City'];
				$s=$rs['State'];
				$mb=$rs['MoblNo'];
				$em=$rs['Email'];
				$ld=$rs['Last_Date_Donor'];
				$bb=$rs['BloodBank'];
				$lc=$rs['Location'];
				$b_c=$rs['B_City'];
				$b_s=$rs['B_State'];
				
				}
  ?>
 <table width="500" border="0" cellspacing="0" cellpadding="2">
 <tr>
 	<td colspan="2"><font face="Algerian" color="#990000" size="+3">Delete Page</font></td>
 </tr>
 <tr >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Name</font></td>
    <td ><input type="text" name="name" value="<?php echo $n; ?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"  /></td>
  </tr>
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Blood Group</font></td>
            <td><input type="text" name="b_g" value="<?php  echo $bg; ?>" style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td></tr>
    <tr>                             
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Gender</font></td>
    <td ><input type="text"  name="gen" value="<?php echo $g; ?>"    style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>    
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Date of Birth</font></td>
    <td ><input type="text" name="dob" value="<?php echo $db;?>"   style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
 
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Address</font></td>
    <td><input type="text" name="addr"  value="<?php echo $ad;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
  
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td><input type="text" name="city" value="<?php echo $c;?>"   style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td><input type="text" name="state" value="<?php echo $s;?>" disabled="disabled" style="width:200px; border-radius:2px; background-color:#F8F8F8;" />
     </td>
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Mobile No.</font></td>
    <td><input type="text" name="mobl" value="<?php echo $mb;?>" maxlength="10" style="width:200px; border-radius:2px; background-color:#F8F8F8;" /></td>
  </tr>
 <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Date of Last Donated</font></td>
    <td><input type="text"  name="d_date" value="<?php echo $ld;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;" /></td>
  </tr>
  
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Email</font></td>
    <td><input type="text"  name="email" value="<?php echo $em;?>"  style="width:200px; border-radius:2px; background-color:#F8F8F8;"/></td>
  </tr>
  
  <tr>                             
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Blood Bank Name</font></td>
    <td ><input type="text" value="<?php echo $bb;?>" style="width:200px; border-radius:2px;  background-color:#F8F8F8;"  name="bank_name" .>
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Location</font></td>
    <td ><input type="text" name="loc" value="<?php echo $lc;?>"  style="width:200px; border-radius:2px;  background-color:#F8F8F8;"  /></td>
  </tr>
  
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td><input type="text" value="<?php echo $b_c;?>" name="d_city"  style="width:200px; border-radius:2px;  background-color:#F8F8F8;" /></td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td><input type="text" name="s_name" value="<?php echo $b_s;?>"  style="width:200px; border-radius:2px;  background-color:#F8F8F8;" />
  
  </td></tr>
  <tr >
 <!-- <td><input type="button" name="cancel"  value="Cancel" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="cancel();" /></td>
  <td><input type="button" name="update" value="Delete" style="height:35px; width:130px; border-radius:2px; font-size:16px; color:#FFFFFF; background-color:#000000;" onclick="delinfo();" /></td>-->
  <td><input type="button" name=" cancel" value="Cancel" onclick="cancel();" /></td>
  <td><input type="button" name="delete" value="Delete"  onclick="delinfo();" /></td>
  </tr>
 
</table>
			
</form>	

</div>
<div id="footer" style=" margin-top:100px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>



</div>
</body>
</html>

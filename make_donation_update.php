
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
<link href="css/user_file.css" rel="stylesheet" />

<link rel="stylesheet" href="include1/jquery.ui.all.css" type="text/css">
<link rel="stylesheet" href="include1/demos.css" type="text/css">

<script src="include1/jquery-1.8.3.min.js"></script>
	<script src="include1/jquery.ui.core.js"></script>
	<script src="include1/jquery.ui.widget.js"></script>
<script src="include1/jquery.ui.datepicker.js"></script>

		<script>
		$(function() {
		$( "#datepicker" ).datepicker({changeMonth: true,
			changeYear: true,dateFormat: 'dd/mm/yy'});
	
	});
</script>
</head>

<body>
<?php 
$p=$_SESSION['u_name'];
?>
<div id="wrapper" style="height:980px;">

<?php include  ('include/headerL.php')?>
<div id="user_menu" style="margin-left:15px;">
<form method="post" name="donation_detail" action="">
<table  id="user_menu_bar" align="left" width="150" border="1" cellpadding="1" frame="void " style='margin-top:50px; margin-left:1px;'>
  <tr>
  <td> <a href="user_home.php"><font color="#FFFFFF" style="text-decoration:none">HOME</font></a></td>
  </tr>
  <tr>
    <td><a href="user_info.php"><font color="#FFFFFF" style="text-decoration:none">PROFILE</font></a></td>
  </tr>
  <tr>
   <td> <a href="make_donation_page.php"><font color="#FFFFFF" style="text-decoration:none">MAKE DONATION</font></a></td>
    </tr>
   <tr>
   <td> <a href="change_password.php"><font color="#FFFFFF">CHANGE PASSWORD</font></a></td>
  
   
   <table    width="580" height="10" cellpadding='2' border=0px style='margin-top:0px; margin-left:100px;'>
  <tr><td colspan="5"> <font size="+2" face="Georgia" color="#990000"><u>Welcome</u> &nbsp;&nbsp;&nbsp;&nbsp; <u> <?php 

echo $_SESSION['u_name']; ?></u></font></td></tr>
		 <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
   								 <td>Email</td>
    							<td >Blood Bank Name</td>
    							<td>Location</td>
    							<td>City</td>
    							<td>State</td>
                                <td>Blood Group</td>
   								 <td>Last Date Donation</td>
                                 <td colspan="2">Operation</td>
 							 </tr>
                             
                         <?php 
		 include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];
		 echo "OKK....";*/
		$record=mysql_query("select * from reg where Email='$p'") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='background-color:#FAA992; font-size:12px; color:000000;'><td >",$r["Email"],"</td>
									<td >",$r["BloodBank"],"</td>
									<td>",$r["Location"],"</td>
									<td >",$r["B_City"],"</td>
									<td >",$r["B_State"],"</td>
									<td>",$r["BloodGrp"],"</td>
									<td>",$r["Last_Date_Donor"],"</td>
									<td></td>
									<td></td>
									</tr>";
		}
	?>
  						  <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
    							 <td><input type="text" name="mail" value="<?php  echo $p;?>"  /></td>
    							<td ><input type="text" name="bn"  /></td>
    							<td><input type="text" name="loc"  /></td>
    							<td><input type="text" name="city"  /></td>
    							<td><select name="state"><?php
								 include('include/DataConfig.php');    
								$que=mysql_query("select * from states");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_state'],"</option>";
								}
							?>  </select></td>
                                <td><select name="bg"><?php 
								 include('include/DataConfig.php');  
								$que=mysql_query("select * from blood_grp");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_blood_grp'],"</option>";
								}
							?>  </select></td>
                            
   								 <td><div id="demos.css"><input type="date" name="dd" id="datepicker" /></div></td>
                                  <td style="color:#FFFFFF;"><input type="submit" name="yes" value="Yes" /></td>
                                  <td style="color:#FFFFFF;"><a href="make_donation_page.php"><input type="button" name="no" value="No" /></a></td>
  				  </tr>
    <tr><td colspan="6"><input type="button" name="donation" value="Blood Donation" style="border-radius:2px; background-color:#00CC00; font-size:16px; font-family:Georgia; height:40px;" /></td>
    </tr>
</table>
</tr>
</table>
</form>					
					<?php 
					 include('include/DataConfig.php');
          /* echo "ok connected...........!!";*/
		  			if(isset($_REQUEST['yes']))
					{
					  $n=$_REQUEST['bn'];
					  $l=$_REQUEST['loc'];
					  $c=$_REQUEST['city'];
					  $s=$_REQUEST['state'];
					  $b=$_REQUEST['bg']; 
					  $d=$_REQUEST['dd'];
				$que="update  reg set BloodBank='$n', Location='$l' ,B_City='$c' ,B_State='$s', BloodGrp='$b', Last_Date_Donor='$d'  where Email='$p'" ;
					if(mysql_query($que))
					{
					   echo"<script>alert('Thank you for Blood Donation')</script>";
					  
					   } 
					
					 }
				    
					?>							



</div>


<div id="footer" style="margin-top:300px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>
</div>
</div>
</div>


</body>
</html>

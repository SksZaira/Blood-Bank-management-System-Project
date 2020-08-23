<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />
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
	
		$(function() {
		$( "#datepickerA" ).datepicker({changeMonth: true,
			changeYear: true,dateFormat: 'dd/mm/yy'});
	
	});
	
</script>


<script type="text/javascript">
function makeUppercase() {
document.regt.u_name.value = document.regt.u_name.value.toUpperCase();
document.regt.addr.value = document.regt.addr.value.toUpperCase();
document.regt.city.value = document.regt.city.value.toUpperCase();
document.regt.bank_name.value = document.regt.bank_name.value.toUpperCase();
document.regt.loc.value = document.regt.loc.value.toUpperCase();
document.regt.d_city.value = document.regt.d_city.value.toUpperCase();

}

function makeLowercase() {
document.regt.mail.value = document.regt.mail.value.toLowerCase();
}


function ValidateAlpha(evt) {
debugger;
var keyCode = (evt.which) ? evt.which : evt.keyCode
if ((keyCode >= 65 && keyCode <= 97) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122 ||keyCode ==8 ))
return true;
return false;
}

function ValidateNum(evt) {
debugger;
var keyCode1 = (evt.which) ? evt.which : evt.keyCode1
if ((keyCode1 >= 47 && keyCode1<= 57) ||(keyCode1 ==8 ))
return true;
return false;
}


function check()
{
if(document.regt.u_name.value=="")
  {
    alert("Please Enter your Name");
	document.regt.u_name.focus();
	return false;
  }
  
  if(document.regt.gen[0].unchecked ==true){ alert("Please Enter Your Gender");
  	document.regt.gen.focus(); return false;}
   if(document.regt.gen[1].unchecked ==true){ alert("Please Enter Your Gender");
   		document.regt.gen.focus(); return false;}
  
/*if(document.regt.gen.value=="")
{
 alert("Please Enter your Gender ");
 document.regt.gen.focus();
  return false;
 }*/

  
  if(document.regt.dob.value=="")
  {
    alert("Please Enter your date of birth");
	document.regt.dob.focus();
	return false;
  }
  
  if(document.regt.bg.value=="")
  {
    alert("Please Select your Blood Group");
	document.regt.bg.focus();
	return false;
  }
  
  if(document.regt.addr.value=="")
  {
    alert("Plaese Enter your address");
	document.regt.addr.focus();
	return false;
  }
  
   if(document.regt.city.value=="")
  {
    alert("Please Enter your city");
	document.regt.city.focus();
	return false;
  }
  
  if(document.regt.state_name.value=="")
  {
    alert("Please Select your state");
	document.regt.state_name.focus();
	return false;
  }
  
   if(document.regt.mob.value=="")
  {
    alert("Please Enter your Mobile No.");
	document.regt.mob.focus();
	return false;
  }
  
   if(document.regt.pass.value=="")
  {
    alert("Please Enter Password Password");
	document.regt.pass.focus();
	return false;
  }
  
  e=document.regt.mail.value;
  		f0=e.indexOf('.');
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f0>0 && f1>0 && f2==-1 && e1>0 && e2==-1 && f0!=e && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.regt.mail.focus();
			return false;
		}
		}	

</script>
</head>
<body>

<div id="wrapper" style=" height:1100px;">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php'?>
 <form name="regt" action="" method="post" onsubmit="return check();" >
<div id="left">
<table  cellpadding="3" width="1150" border="0">
  <tr>
     <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
     <td rowspan="2">
    
<table width="677" border="0" cellspacing="0" cellpadding="4">
  <tr >
    <td id="loga"colspan="2" >Donor Registration</td>
  </tr>
  <tr>
    <td><font size="+1" face="Georgia, Times New Roman, Times, serif">Registration for</font></td>
     <td>
     <a href="reg.php"><input type="radio" name="regtn" checked="checked" /><font face="Lucida Handwriting, italic" size="+1">Donor</font></a> <a href="p_reg.php"><input type="radio" name="regtn" /><font face="Lucida Handwriting, italic" size="+1">Patient</font></a>
     </td>
  </tr>
  <tr  >
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Name</font></td>
    <td ><input type="text" name="u_name"  placeholder="Enter Your Name" width="50"   style="width:200px; border-radius:2px;" onkeypress="return ValidateAlpha(event);" onKeyUp="makeUppercase();" /></td>
  </tr>
 <!-- <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Father Name</font></td>
    <td ><input type="text" name="f_name" placeholder="Enter Your Father Name"  onkeypress="return ValidateAlpha(event);" onKeyUp="makeUppercase();" /></td>
  </tr>-->
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Blood Group</font></td>
            <td><select name="bg"  style="width:205px; border-radius:2px;" placeholder="Select Your Blood Group" >
  <option>&nbsp;</option>
                                <?php include('include/DataConfig.php');   ?>
                                <?php 
								$que=mysql_query("select * from blood_grp");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_blood_grp'],"</option>";
								}
								?>
                                 </select></td></tr>
    <tr>                             
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Gender</font></td>
    <td ><input type="radio"  name="gen" value="0" /><font face="Lucida Handwriting, italic" size="+1">Male </font>   <input type="radio" name="gen" value="1" /><font face="Lucida Handwriting, italic" size="+1">Female</font></td>    
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Date of Birth</font></td>
    <td ><div id="demos.css"><input type="text" name="dob" onkeypress="return ValidateNum(event);"  style="width:200px; border-radius:2px;"  placeholder="Enter Your DOB" id="datepicker" /></div></td>
  </tr>
 
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Address</font></td>
    <td><textarea name="addr"  style="width:200px; border-radius:2px; resize:none;"   placeholder="Enter Your Address" onKeyUp="makeUppercase();"></textarea></td>
  </tr>
  
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td><input type="text" name="city"  style="width:200px; border-radius:2px;" onkeypress="return ValidateAlpha(event);" placeholder="Enter Your City Name" onKeyUp="makeUppercase();"/></td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td><select name="state_name"  style="width:205px; border-radius:2px;" id="select" placeholder="Select Your State"  onkeypress="return ValidateAlpha(event);" onKeyUp="makeUppercase();">
    <option>&nbsp;</option>
 <?php include('include/DataConfig.php');   ?>
                                <?php 
								$que=mysql_query("select * from states");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_state'],"</option>";
								}
							?>   </select>
     </td>
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Mobile No.</font></td>
    <td><input type="text" maxlength="10"  style="width:200px; border-radius:2px;" name="mob" placeholder="Enter Your Mobile No" onkeypress="return ValidateNum(event);"  /></td>
  </tr>
 <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Date of Last Donated</font></td>
    <td><input type="text"  name="d_date"  style="width:200px; border-radius:2px;"  placeholder="Enter Date of Last Donated" id="datepickerA" /></td>
  </tr>
   <tr>                             
    <td id="rr" ><font face="Lucida Handwriting, italic" size="+1">Blood Bank Name</font></td>
    <td ><input type="text"   style="width:200px; border-radius:2px;" name="bank_name" placeholder="Blood Bank Name" onKeyUp="makeUppercase();" ><font face="Lucida Handwriting, italic" size="+1"></font>  
  </tr>
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Location</font></td>
    <td ><textarea name="loc"  style="width:200px; border-radius:2px; resize:none;" onkeypress="return ValidateAlpha(event);"  placeholder="Location" onKeyUp="makeUppercase();" ></textarea></td>
  </tr>
  
   <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">City</font></td>
    <td><input type="text" name="d_city"  style="width:200px; border-radius:2px;" onkeypress="return ValidateAlpha(event);" placeholder="Enter Blood Donation City Name" onKeyUp="makeUppercase();"/></td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">State</font></td>
    <td><select name="s_name" id="select" placeholder="Select Blood Donation State"  style="width:205px; border-radius:2px;" onkeypress="return ValidateAlpha(event);" onKeyUp="makeUppercase();">
    <option>&nbsp;</option>
 <?php include('include/DataConfig.php');   ?>
                                <?php 
								$que=mysql_query("select * from states");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_state'],"</option>";
								}
							?>   </select>
     </td>
  </tr>
  
  <tr >
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Email</font></td>
    <td><input type="text" name="mail" placeholder="xyz@gmail.com"  style="width:200px; border-radius:2px;" onKeyUp="makeLowercase();"/></td>
  </tr>
  <tr>
    <td id="rr"><font face="Lucida Handwriting, italic" size="+1">Password</font></td>
    <td><input type="password" name="pass" placeholder="Enter Your Password"  style="width:200px; border-radius:2px;"  /></td>
  </tr>
  <tr >
    <td><input style="font-size:16px" type="reset" name="reset"  style="width:200px; border-radius:2px;" /></td>
    <td><input style="font-size:16px" type="submit" name="submit"  style="width:200px; border-radius:2px;"/></td>
  </tr>
</table>

</td>
    
      <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>             
                   </tr>
<tr>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" />
</td></tr></table>
</form>
<?php 
          include('include/DataConfig.php');
          /* echo "ok connected...........!!";*/
          
		  
               if(isset($_REQUEST['submit']))
               {
			   
 				 $n=$_REQUEST['u_name'];
				   $bg=$_REQUEST['bg'];
				   $g=$_REQUEST['gen'];
				   $dob=$_REQUEST['dob'];
				   $add=$_REQUEST['addr'];
				   $c=$_REQUEST['city'];
				   $st=$_REQUEST['state_name'];
			       $mb=$_REQUEST['mob'];
				  $dd=$_REQUEST['d_date'];
				   $em=$_REQUEST['mail'];
				   $p=$_REQUEST['pass'];
				    $bbn=$_REQUEST['bank_name'];
				  $l=$_REQUEST['loc'];
				   $dcty=$_REQUEST['d_city'];
				   $s=$_REQUEST['s_name'];
				   
	$que="insert into reg(Name,BloodGrp,Gender,DOB,Addr,City,State,MoblNo,Email,Password,Last_Date_Donor,BloodBank,Location,B_City,B_State) values ('$n','$bg','$g','$dob','$add','$c','$st','$mb','$em','$p','$dd','$bbn','$l','$dcty','$s')";
				   //echo "yha tk hua bs";
				    
				if(mysql_query($que))
					{
					   echo"<script>alert('Thank you for registration')</script>";
					  
					   } 
					
					 }
				    
 
 			   
 ?>
</div>
 


<div id="footera">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>


</div>

</div>

</body>
</html>

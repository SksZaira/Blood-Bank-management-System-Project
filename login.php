<?php 
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />
</head>
<script type="text/javascript">
function check()
{
if(document.login.user.value=="")
  {
    alert("Plese Enter Your User Name");
	document.login.user.focus();
	return false;
  }

if(document.login.pass.value=="")
  {
    alert("Plese Enter Password");
	document.login.pass.focus();
	return false;
  }
 return true;
 }

</script>
<body>
<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php'?>

<div id="left">
<table  cellpadding="3" width="1150" border="0">
  <tr>
     <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
     <td rowspan="2">
     <form action="" name="login"  method="get"  onsubmit="return check();" >
     <table   cellspacing="2"  frame="border" style="margin-left:200px; margin-right:50px; width:250px; border-radius:5px; height:250px;
      width:350px; border-width:2px;" >
     <tr>
        <td id="loga" colspan="2"><font  face="Algerian">  Donor Login</font> </tds>
        </tr>
     <tr>
    <td id="logb" >UserId/Email</td>
    <td><input type="text" name="u_name" style="height:25px; width:150px" /></td>
  </tr>
  <tr>
    <td id="logb" >Password</td>
    <td><input type="password" name="pass" style="height:25px; width:150px" /></td>
  </tr>
  <tr>
  <td colspan="2"  align="center"><input type="submit" style="font-size:16px" name="login" value="Login" /></td>
  </tr>
  <tr>
     <td colspan="2" align="center"> <a href="reg.php"> <input type="button" style="font-size:18px" name="reg" value="Now Registration"/></a></td>
   </tr>
</table>
</form> 
     </td>
    
      <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>             
                   </tr>
<tr>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" />
</td></tr></table>
<?php 

include('include/DataConfig.php');
           //echo "ok connected...........!!";
          
		  
               if(isset($_REQUEST['login']))
               {
			   $n=$_REQUEST['u_name'];
				$p=$_REQUEST['pass'];
				
	if($n=='')
	
	{
		echo"<script> alert('Please Enter Your Email')</script>";
		exit();
	}
	
if($p=='')
	
		{
		  echo"<script> alert('Please Enter Password')</script>";
		exit();
	    }

  else
   {
	$que= "select * from reg where BINARY Email= BINARY '$n' and Password='$p'";
	
	$run=mysql_query($que);
	if(mysql_num_rows($run)==1)
	{
	   
	   // echo "ok";
		header ('location:user_home.php');
		$p = $_SESSION['u_name'] = $_REQUEST['u_name'];
		}
		else
		{
		
		echo  "<script>alert('Please enter correct User name and Password')</script>";
		
		    }
			
			}
		}	
				
 ?>
 </div>
 


<div id="footera" style="margin-top:190px; margin-left:0px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>


</div>

</div>
</body>
</html>

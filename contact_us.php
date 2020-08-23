<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link href="css/file.css" rel="stylesheet" />
<script type="text/javascript">
function makeUppercase() {
document.contct.contct_name.value = document.contct.contct_name.value.toUpperCase();
}
function makeLowercase() {
document.contct.mail.value = document.contct.mail.value.toLowerCase();
}

function check()
{
if(document.contct.contct_name.value=="")
  {
    alert("Please Enter your Name");
	document.contct.contct_name.focus();
	return false;
  }
  
  function check()
{
if(document.contct.msg.value=="")
  {
    alert("Please Enter your Message");
	document.contct.msg.focus();
	return false;
  }
  
  e=document.contct.mail.value;
  		f0=e.indexOf('.');
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f0>0 && f1>0 && f2==-1 && e1>0 && e2==-1 && f0!=e && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.contct.mail.focus();
			return false;
		}
		}
</script>
</head>

<body>
<div id="wrapper" style="height:800px;">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php'?>

<div style="border-radius:10px ; border:2px solid black; width:500px; margin-top:100px; margin-left:350px;">
<form name="contct" method="get" action=""  onsubmit="return check();" enctype="multipart/form-data">
<table width="550" border="0" cellspacing="10" cellpadding="0" frame="border" style="border-radius:5px;">
	<tr>
    <td><p style="font-family:Algerian; font-size:26px; color:#CC0000;">Contact Us</p></td>
    	    <input type="hidden" name="action" value="submit">
    </tr>
  <tr>
    <td><p style="font-family:Algerian; font-size:16px; color:#000000;">Name</p></td>
    <td><input type="text" name="contct_name" style="width:200px; border-radius:5px;"   onKeyUp="makeUppercase();"/></td>
  </tr>
  <tr>
    <td><p style="font-family:Algerian; font-size:16px; color:#000000;">Email</p></td>
    <td><input type="text" name="mail" style="width:200px; border-radius:5px;"onKeyUp="makeLowercase();"/></td>
  </tr>
  <tr>
    <td><p style="font-family:Algerian; font-size:16px; color:#000000;">Message</p></td>
    <td><textarea name="msg" style="resize:none;" style="width:300px; border-radius:5px;"></textarea> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Send" style="width:100px; border-radius:5px;" /></td>
  </tr>
</table>

		<?php
		   
	if(isset($_REQUEST['submit']))               /* send the submitted data */
    {
    $name=$_REQUEST['contct_name'];
    $email=$_REQUEST['mail'];
    $message=$_REQUEST['msg'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "<script>alert('All fields are required, please fill again.')</script>";
	    }
    else{		
			$que="insert into contact_us(Name,Email,Message) values('$name','$email','$message')";
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		 //mail("saniya8756khan@gmail.com", $subject, $message, $from);
		echo "<script>alert('Email sent!')</script>";
	    }
    }   
         /* include('include/DataConfig.php');
          /* echo "ok connected...........!!";
          
		  
               if(isset($_REQUEST['send']))
               {
			   
 					$n=$_REQUEST['contct_name'];
				   $em=$_REQUEST['mail'];
				   $msg=$_REQUEST['msg'];
					$que="insert into contact_us(Name,Email,Message) values('$n','$em','$msg')";
					if(mysql_query($que))
					{
					   echo"okk...";
					   }
					   }*/
		
		?>
</form>
</div>
<div id="footer" style="margin-top:125px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
	  $d='donor';
	  if($d==donor)
	  {
	    echo  "<input type='radio' name='regn' value='donor' checked='checked'/> Donor Registration  <input type='radio' name='regn' 	
		        value='patient' /> Patient Registration";					
				header ('location:reg.php');
		}
		else
		{
		 echo  "<input type='radio' name='reg' value='donor' /> Donor Registration  <input type='radio' name='reg' value='patient' 
		   checked='checked' />Patient Registration";
		   		header ('location:p_reg.php');    											
		}
	 ?>
     
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />
</head>

<body>

<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php' ?>

<div id="left">
<table  cellpadding="3" width="1150" border="0">
    <tr>
	<td align="left">
    <a href="srch_donor.php"><input type="button" name="button" value="Back"  style="border:solid 2px; width:150px; height:150; font:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#990000; float:left; margin-left:10px; margin-top:20px; "/></a>
     <td  style="font-family:Algerian; italic; font-size:40px; color:#990000;" colspan="2">Search Donor</td>

    </td></tr>
    <form name="srch" method="get" action="" >
   
   <table width='1100' height="150" cellpadding='1' border=0px style='margin-top:50px; margin-left:10px;'>
							  <tr align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
   								 <td>Name</td>
    						
    							<td >Blood Group</td>
    							<td>Gender</td>
    							<td>Date Of Birth</td>
    							<td>Address</td>
   								 <td>City</td>
   								 <td>State</td>
    							<td>Mobile No.</td>
    							<td>Email</td>
                                <td>Blood Bank</td>
                                <td>Location</td>
                                <td>City</td>
                               
 							 </tr>
                             
   

     			 <?php
				 
					include('include/DataConfig.php');
					$b=$_GET['bg'];
					$c=$_GET['c_name'];
					$s=$_GET['state'];
					  if(isset($_GET['search']))
					  {
					  		 $bg=$_REQUEST['bg'];
							 $city=$_REQUEST['c_name'];
					  		  $st=$_REQUEST['state'];
					  
					 			 if($bg=='')
					 			 {
					  				  echo "<script> alert('PLEASE SELECT BLOOD GROUP...!! ')</script>";
										exit();
								 }
					  			if($city=='')
					  			 {
					   				 echo "<script> alert('PLEASE ENTER CITY NAME...!! ')</script>";
									exit();
								  }
								 if($st=='')
					   			{
					   				 echo "<script> alert('PLEASE SELECT STATE NAME...!! ')</script>";
									  exit();
								}
						
								else 
						{
						$record=mysql_query("select * from reg where BloodGrp like '$bg%' and City like '$city%' and State like '$st%'");
						if(mysql_num_rows($record)>0)
						{
						while($r=mysql_fetch_array($record))
						{
						echo"<tr align='center' style='background-color:#FAA992; color:000000;'><td >",$r["Name"],"</td>
									<td >",$r["BloodGrp"],"</td>
									<td>",$r["Gender"],"</td>
									<td >",$r["DOB"],"</td>
									<td >",$r["Addr"],"</td>
									<td>",$r["City"],"</td>
									<td>",$r["State"],"</td>
									<td>",$r["MoblNo"],"</td>
									<td >",$r["Email"],"</td>
									<td >",$r["BloodBank"],"</td>
									<td >",$r["Location"],"</td>
									<td >",$r["B_City"],"</td>
									
									</tr>";
									}
					 	}
						else
						{
						echo "<script> alert('RESULT NOT FOUND')</script>";
						}
					}	
					}
  		         ?>
                 </table>
</form> 
     </td>
     </tr></table>
</div>
<div id="footera" style="margin-top:395px; margin-left:0px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>

</div>


</body>
</html>

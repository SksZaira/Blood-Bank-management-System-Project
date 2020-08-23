<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />
</head>

<body>

<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php'?>

<div id="srch_donr">
<form name="srch" method="get" action="" >
<table id="srcha" border="0"cellpadding="3" width="750"  height="100" >
    <tr>
    <td style="font:'Lucida Handwriting', italic; font-size:26px; color:#990000;" colspan="2">Search Donor</td>
    </tr>
  <tr>
    <td  style="font-family:'Lucida Handwriting', italic; font-size:18px">Blood Group</td>
    <td  style="font-family:'Lucida Handwriting', italic; font-size:18px">State</td>
    <td  style="font-family:'Lucida Handwriting', italic; font-size:18px">City</td>
  </tr>
  <tr>
    <td><select name="bg" >
            					<option>--Select--</option>
                                 <?php include('include/DataConfig.php');   ?>
                                <?php 
								$que=mysql_query("select * from blood_grp");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_blood_grp'],"</option>";
								}
								?>
                                 </select></td>
    <td><select name="state" >
    <option>--Select--</option>
   <?php include('include/DataConfig.php');   ?>
                                <?php 
								$que=mysql_query("select * from states");
								while($row=mysql_fetch_array($que))
								{
								echo "<option>",$row['select_state'],"</option>";
								}
							?>   </select></td>
    <td><input type="text" name="c_name" /> </td>
  <td>&nbsp;</td>
    <td colspan="2" ><input type="submit" style="font-size:18px; width:150px" name="search" value="Search"/></td>
  </tr>
  </tr>

  
</table>
</form>

 <?php
					include('include/DataConfig.php');
					if(isset($_REQUEST['search']))
					{
					 
					 
						echo" <table width='750' cellpadding='2' border=2px style='margin-top:50px; margin-left:20px;'>
							  <tr>
   								 <td>Name</td>
    							
    							<td>Blood Group</td>
    							<td>Gender</td>
    							<td>Date Of Birth</td>
    							<td>Address</td>
   								 <td>City</td>
   								 <td>State</td>
    							<td>Mobile No.</td>
    							<td>Email</td>
 							 </tr>
								
								<tr>
									<td >",$r["Name"],"</td>
							  		
									<td >",$r["BloodGrp"],"</td>
									<td>",$r["Gender"],"</td>
									<td >",$r["DOB"],"</td>
									<td >",$r["Addr"],"</td>
									<td>",$r["City"],"</td>
									<td>",$r["State"],"</td>
									<td>",$r["MoblNo"],"</td>
									<td >",$r["Email"],"</td>
									
								</tr></table>";
						}
					}
					}
  		         ?>


</div>






</div>
<div id="footera" style="margin-bottom:1px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>



</div>
</body>
</html>

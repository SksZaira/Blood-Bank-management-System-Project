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

<div id="left">
<table  cellpadding="3" width="1150" border="0">
  <tr>
     <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
     <td rowspan="2">
   <form name="srch" method="get" action="srch_detail.php" >
<table id="srcha" border="0"cellpadding="10" width="450"  height="500">
    <tr>
    <td style="font-family:Algerian; font-size:36px; color:#990000;" colspan="2">Search Donor</td>
    </tr>
  <tr>
    <td style="font-family:'Lucida Handwriting', italic; font-size:18px">Blood Group</td>
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
  </tr>
  <tr>
    <td style="font-family:'Lucida Handwriting', italic; font-size:18px">City</td>
    <td><input type="text" name="c_name" /> </td>
  </tr>
  <tr>
    <td style="font-family:'Lucida Handwriting', italic; font-size:18px">State</td>
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
  </tr>
  <tr>
  <td>&nbsp;</td>
    <td colspan="2" ><input type="submit" style="font-size:18px; width:150px" name="search" value="Search"/></td>
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

</div>

<div id="footera">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>

</div>
</body>
</html>
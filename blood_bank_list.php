<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />

</head>

<body>
<div id="wrapper" style="height:900px;">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php' ?>

<div id="left" id="scrol">
<table  cellpadding="3" width="1150" border="0">
    <tr>
	<td align="left">
    <a href="srch_blood_bank.php"><input type="button" name="button" value="Back"  style="border:solid 2px; width:150px; height:150; font:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#990000; float:left; margin-left:10px; margin-top:20px; "/></a>
     <td  style="font-family:Algerian; italic; font-size:40px; color:#990000;" colspan="2">Search Donor</td>

    </td></tr>
    <form name="srch" method="get" action="" >
   
   <table  width='1100' height="70" cellpadding='4' border=0px style='margin-top:20px; margin-left:20px;'>
							  <tr align="center" style="background-color:#000000; color:#FFFFFF; font-size:18px; font-family:Algerian">
   								 <td>Blood Bank Name</td>
    							<td>Address</td>
    							<td>City</td>
    							<td>State</td>
    							<td>Pincode</td>
    							<td>Country</td>
 							 </tr>
                             
  
				<?php
					include('include/DataConfig.php');
					$c=$_GET['c_name'];
					$s=$_GET['state'];
					  if(isset($_REQUEST['search']))
					{
					  
					 $city=$_REQUEST['c_name'];
					  $st=$_REQUEST['state'];
					  
					 
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
						$record=mysql_query("select * from blood_bank_list where  State like '$st%'  or City like '$city%' ");
						if(mysql_num_rows($record)>0)
						{
						while($r=mysql_fetch_array($record))
						{
						 echo "<tr  style='background-color:#FAA992; color:000000;' > <td align='center'>",$r["BloodBankName"],"</td>
			      <td align='center'>",$r["Addr"],"</td>
				  <td align='center'>",$r["City"],"</td>
				  <td align='center' >",$r["State"],"</td>
				  <td align='center' >",$r["PinCode"],"</td>
				  <td align='center'>",$r["Country"],"</td>
				  </tr> ";
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
<div id="footera" style="margin-top:190px; margin-left:0px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>

</div>

</body>
</html>

<?php session_start();
if(!($_SESSION['u_name']))
{
header('location:home.php?error=you are not administrator please login again');
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/user_file.css" rel="stylesheet" />
<script type="text/javascript">

        function Print() {

            var content = document.getElementById("p");
            var pri = document.getElementById("framediv").contentWindow;
            pri.document.open();
            pri.document.write(content.innerHTML);
            pri.document.close();
            pri.focus();
            pri.print();
            //document.getElementById("ctl00_ContentPlaceHolder1_btnSearch").style.display = '';
            return;

        }
    
    
    </script>
</head>

<body>
<?php $p=$_SESSION['u_name']; ?>
<div id="wrapper" style="height:900px;">
<?php include ('include/headerL.php');
include('include/admin_header.php'); ?>
<iframe style="height: 0px; width: 0px; position: absolute; display: none;" id="framediv">
        </iframe>
        <div style="margin-left:900px; margin-top:20px;"><input type="button" onClick="Print();" value="Print"  style="border-radius:3px; width:100px; height:30px; color:#990000; font-size:14px;"/></div>
<div id="fetch_donor_detail" style="float:right; height:450px;  overflow:scroll; border:1px solid; margin-right:200px; width:680px; margin-top:1px;">
<div id="p">
 <table class="TFtable" width="310" height="40" cellpadding='1' border='2'>
							  <tr  align="center" style="background-color:#000000; color:#FFFFFF; font-size:14px; font-family:Algerian">
                                <td>Id</td>
   							    <td>Blood Bank Name</td>  
    							<td >Address</td>
    							<td>City</td>
    							<td>State</td>
    							<td>Pin Code </td>
   								 <td>Country</td>
   								 <td colspan="2">Operation</td>
 							 </tr>
                         

	<?php 
		 include('include/DataConfig.php');
		  /*$a=$_GET['u_name'];
		 $b=$_GET['pass'];
		 echo "OKK....";*/
		$record=mysql_query("select * from blood_bank_list") or die(mysql_error());
		while($r=mysql_fetch_array($record)) 
		{
		echo "<tr align='center' style='font-size:12px; color:000000;'>
									
									<td >",$r["Id"],"</td> 
									<td >",$r["BloodBankName"],"</td> 
									<td >",$r["Addr"],"</td>
									<td>",$r["City"],"</td>
									<td>",$r["State"],"</td>
									<td>",$r["PinCode"],"</td>
									<td >",$r["Country"],"</td>
									<td><a href='view_blood_bank.php?Id=".$r["Id"],"'><input type='button' name='edit' value='Edit' style='background-color:black; color:white;'/></a></td>
									<td><a href='del_blood_bank.php?Id=".$r["Id"],"'><input type='button' name='del' value='Delete' style='background-color:black; color:white;'/></a></td>
									</tr>";
		}
	?>
    
</table>
</div>

</div>
 
<div id="footer" style="margin-top:50px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>


</div>
</body>
</html>

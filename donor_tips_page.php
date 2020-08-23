<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/file.css" rel="stylesheet" />
 
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

<div id="wrapper">

<?php include $_SERVER['DOCUMENT_ROOT'].'/BloodBank_Project/include/header.php'?>
<iframe style="height: 0px; width: 0px; position: absolute; display: none;" id="framediv">
        </iframe>

<div id="left">
<table  cellpadding="3" width="1150" border="0" >
  <tr>
     <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
     <td rowspan="2" >
     <div id="p">
      <h2 id="mia">Tips on blood donating</h2>
       <p id="donor_tips">
	<li id="mib">
	Please have a good meal at least 3 hours before donating blood. 
	</li>
	<li id="mib">
	Please accept the snacks offered after the donation. It is recommended to have a good meal later. 
	</li>
	<li id="mib">
	Please avoid smoking on the day before donating. One can smoke 3 hours after donation. 
	</li>
	<li id="mib">
	One is not eligible to donate blood if you have consumed alcohol 48 hours before donation. 
	</li>
</p>

 <h2 id="mia">Misconception about Donating Blood</h2> 
 <p>
 <li id="mib">
	 will not feel drained or tired if you continue to drink fluids and have a good meal. 
	</li>
	<li id="mib">
	You can resume your normal activities after donating blood, though you are asked to refrain from exercise or heavy weight
     lifting for twelve hours after donation. 
	</li>
	<li id="mib">
	Donating blood will not leave you low of blood; in fact you will still have surplus blood after the donation. 
	</li>
	<li id="mib">
	While donating blood you will not feel any pain. 
	</li>
	<li id="mib">
	You will not faint or feel uncomfortable after donating blood. This is a common misconception. 
	</li>
	<li  id="mib">
	You will not get AIDS if you donate blood.
	</li>
	<li id="mib">
	Patients are just like donors - most of them have common blood types. Because your blood type is common, the demand for that type is greater than for rare types. So, even if your blood type is common there is still a requirement. 
	</li>
    </div>
    <li><input type="button" name="n" value="Print" onclick="Print();"</li>
 </p>     
      </td>
       <td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>             
                   </tr>
<tr>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" /></td>
<td><img src="image/logo image1.jpg" height="200" width="150" border="1" />
</td></tr></table>

</div>
<div id="footer" style="margin-top:185px;">
<pre id="ra"> 
 				All reserved @ site 2017
</pre>

</div>
</div><!--wrapper div closed-->

</body>
</html>

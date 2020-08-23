<?php $conf=mysql_connect("localhost","root","") or die(mysql_error());
      $db=mysql_select_db('blood_bank',$conf) or die(mysql_error());

 ?>
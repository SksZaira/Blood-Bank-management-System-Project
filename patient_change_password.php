 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
      <div id="back">
<a href="p_user_home.php"><input type="button" name="button" value="Back"  style="border-radius:solid 5px; width:150px; height:100; font:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#990000; float:left; margin-left:10px; margin-top:20px; "/></a></div>

   <?php  include('include/DataConfig.php');

		 $username = $_POST['username'];
      $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password FROM p_reg WHERE Email='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
       /* else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }*/
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE p_reg SET Password='$newpassword' where  Email='$username'");
        if($sql)
        {
        echo "<h1> You have successfully changed your password</h1>";
		 //header("location:user_home.php");
        }
       else
        {
       echo "<h1>Passwords do not match</h1>";
       }
      ?>

</body></html>
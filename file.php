<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<form action="file.php" method="post" enctype="multipart/form-data">

Select a file to upload: <br />
<form action="file.php" method="post"
                        enctype="multipart/form-data">
<input type="file" name="file" size="50" />
<br />
<input type="submit" name="submit" value="Upload File" />


<?php
if(isset($_POST['submit']))
{
$name=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$tmp=$_FILES['file']['tmp_name'];

  /*if($name==''){
  echo "<script>alert('please select aFile from')</script>";
  exit();
  }
  if(($type=="image/jpeg")||($type=="image/gif")||($type=="image/png")){
 if(file_exists("upimages/" .$_FILES["file"]["name"]))
 {
 echo "this file name already exists!!!!!!!!! please try another";
 }
  if($size<=500000000000){
          //echo "this is alloweds $size ";
		  move_uploaded_file($tmp,"upimages/$name");
		  echo"<center><font color=red>file was uploaded successfully</font><br> Uploaded Image is here<br><img src='upimages/$name'> </center>";
                }
  else{
       echo " because file size is greater than 50 kb ";
	   }
  }
  else{
  echo "this is not a valid type of file";
  }*/
}
?>
<body>
</form>
</body>
</html>

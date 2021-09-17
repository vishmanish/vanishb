<!DOCTYPE html>
<html>
<head>
	<title>	multiple image</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img[]" multiple="multiple">
	<input type="submit" name="submit">
</form>
<?php 	
include_once'config.php';
if (isset($_POST['submit']))
 {
$filename=$_FILES['img']['name'];
$tmpname=$_FILES['img']['tmp_name'];
$filetype=$_FILES['img']['type'];
for($i=0; $i<=count($tmpname)-1; $i++)
{
	$name=addslashes($filename[$i]);
	$tmp=addslashes(file_get_contents($tmpname[$i]));
	$query= "INSERT INTO img(name,image) values('$name','$tmp')";
$result=mysqli_query($con,$query);
}
}
 ?>
</body>
</html>

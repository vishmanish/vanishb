<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron" style="background-color: ;height: 500px;width: 100%;">
<form method="post" enctype="multipart/form-data">
<h2 align="center" style="color: black;">Ragistration Form</h2>
	<input type="text" name="name" placeholder="name" class="form-control"><br>
	<input type="email" name="email" placeholder="email" class="form-control"><br>
	<input type="password" name="pass" placeholder="password" class="form-control"><br>
	
	<input type="text" name="address" placeholder="aaddres" class="form-control"><br>
	<input type="date" name="dob" placeholder="date of birth" class="form-control"><br>
	<input type="file" name="img" class="form-control">
	<br>
   <input type="submit" name="btnsub" class="btn-block btn-danger;">

</form>
<div>
</div>
</div>
</div>
</body>
</html>
<?php
include_once 'config.php';
if(isset($_POST['btnsub']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$img=$_FILES['img']['name'];
    $imagetemp=$_FILES['img']['tmp_name'];
    $store="img/".$img;
 move_uploaded_file($imagetemp, $store);
 	$query="INSERT INTO registration values('','$name','$email','$pass','$address','$dob',
 	'$store')";
   
	$result=mysqli_query($con,$query);
if ($result) 
{
	echo "success";
}
else
{
	echo "invalid";
}


}
?>


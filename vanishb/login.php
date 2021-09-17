<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
<div class="jumbotron" style="background-color: ;height: 350px;width: 50%;margin-left: 250px;margin-top: 100px;">
<form method="post">
<h2 align="center" style="color: black;">Login</h2>
	
	<input type="email" name="email" placeholder="email" class="form-control"><br>
	<input type="password" name="pass" placeholder="password" class="form-control"><br>
	

	<br>
   <input type="submit" name="submit" class="btn-block btn-danger;">

</form>
<div>
	
</div>
</div>
</div>
</body>
</html>
<?php 
include_once 'config.php';
  session_start();
if (isset($_POST['submit'])) 
     {
  $email=$_POST['email'];
  $pass=$_POST['pass'];

$query="SELECT * FROM registration where email='$email' AND pass='$pass' ";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if ($count==1)
    {
    $_SESSION['email']=$email;
    header('location:index.php');
    }
  else
   {
  echo "invalid";
    }
}
?>
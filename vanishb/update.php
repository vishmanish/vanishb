<?php
include_once'config.php';
$id=$_REQUEST['id'];
$query="SELECT * FROM registration where id='$id'";
$re=mysqli_query($con,$query);
$row=mysqli_fetch_array($re);

  ?>

<!DOCTYPE html>
 <html>
 <head>
 <title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="jumbotron" style="background-color: ;height: 500px;width: 100%;">
<form method="post">
<h2 align="center" style="color: black;">update</h2>
	<input type="text" name="name" class="form-control" placeholder="name" 
	value="<?php echo $row['name'];?>">
    <input type="email" name="email" class="form-control" placeholder="email" value=" <?php echo $row['email'];?>">
    <input type="password" name="pass" class="form-control" placeholder="password" value="<?php echo $row['pass']; ?>">
    <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $row['address']; ?>">
    <input type="text" name="dob" class="form-control" placeholder="dob" value="<?php echo $row['dob']; ?>">
    <input type="text" name="img" class="form-control" placeholder="img" value="<?php echo $row['img']; ?>">
    <input type="submit" name="submit" class="btn-danger">
    
	
</form>
<div>
	
</div>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	
	$query4="UPDATE registration SET name='$name', email='$email', pass='$pass', address='$address', dob='$dob' where id='$id'";
	$result=mysqli_query($con,$query4);
	if ($result) 
	{
		echo "success";
		header('location:display.php');
	}
	else
	{
		echo "invalid";
	}

}



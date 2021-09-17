<?php 
include_once'config.php';
session_start();
if ($_SESSION['email']=="")
 {
	header('location:login.php');
}
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="js/1.js"></script>
    <script type="text/javascript" src="js/2.js"></script>
</head>
<body>

<div class="container" style=" background-color:darkcyan;color:white;width:100%;height:650px;">
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">vanisb</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li class="active"><a href="display.php">View</a></li>
      
      <li class="active"><a href="registration.php">Registration</a></li>
      <li class="active"><a href="search.php">Search</a></li>
      <li class="active"><a href="logout.php">Logout</a></li>
    </ul>
  
  </div>
</nav>
  























</div>
</div>




</body>
</html>
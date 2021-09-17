<?php 
include_once'config.php';
$id=$_REQUEST['id'];
$query="DELETE FROM registration where id='$id'";
$res=mysqli_query($con,$query);
header('location:display.php');
 ?>
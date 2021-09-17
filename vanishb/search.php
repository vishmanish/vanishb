
<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css'/>
<script type="text/javascript" src="js/1.js"></script>
<script type="text/javascript" src="js/2.js"></script>
</head>
<body>

<div class="container">
<div class="jumbotron">
<form method="post">
	
<h2 align="center"></h2><br>
   Search here!!!&nbsp;&nbsp;
   <select name="attr" style="color:black;">

	<option>Select Any Option</option>

	
	<option value="email">Email</option>
	<option value="name">name</option>
	
    </select>
   <input type="text" name="val">

<button type="submit" name="submit" class="btn btn-danger">Search</button>

</form>	
</div>
	
</div>


<?php 
include_once'config.php';
if (isset($_POST['submit'])) 
{
	$attr=$_POST['attr'];
    $val=$_POST['val'];
$select="SELECT * FROM registration where $attr='$val'";

$result=mysqli_query($con,$select);
$row=mysqli_fetch_array($result);

 if ($result) 
{
	echo "success";
 }
 else
 {
 	echo "not success";
 }


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table class="table" border="3px" cellpadding="3px" cellspacing="2px" align="center">
  
<tr>
    <td>id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>addres</td>
<td>date of birth</td>
<td>image</td>

  </tr>
<tr>
     <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['pass']; ?></td>
  <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['dob']; ?></td>
  <td><img width='50px' height='50px' src="<?php echo $row['img'];?>">
  </td>
  
</tr>


<?php }?>

</table>
</body>
</html>















































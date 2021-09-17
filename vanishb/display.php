<?php
include_once'config.php';
$query="SELECT * FROM registration";
$result=mysqli_query($con,$query);

?>
<form>
	<table align="center" border="2px">
		<tr>
 			<td>id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>addres</td>
<td>date of birth</td>
<td>image</td>
<td>delete</td>
<td>update</td>
 		</tr>	
 		<?php
while ($row=mysqli_fetch_array($result)) 
{
$id=$row['id'];
?>

<tr>
     <td><?php echo $row['id']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['pass']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['dob']; ?></td>
	<td><img width='50px' height='50px' src="<?php echo $row['img'];?>">
	</td>
	<td><?php echo "<a href='del.php?id=$id'>Delete</a>"?></td>
	<td><?php echo "<a href='update.php?id=$id'>update</a>"?></td>
</tr>

<?php } ?>


	</table>
</form>

</body>
</html>

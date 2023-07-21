<html>
<body>
<?php

$fname=$_REQUEST[firstname];
$lname=$_REQUEST[lastname];
$uname=$_REQUEST[username];

?>
<table border="1">
	<tr>
		<td>first name:</td>
		<td><?php echo$fname?></td>
	</tr>

	<tr>
		<td>last name:</td>
		<td><?php echo$lname?></td>
	</tr>

	<tr>
		<td>user name:</td>
		<td><?php echo$uname?></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><?php echo$password?></td>
	</tr>
	<tr>
		<td>gender:</td>
		<td><?php echo$gen?></td>
	</tr>
	<tr>
		<td>academicyear:</td>
		<td><?php echo$acdyear?></td>
	</tr>
	<tr>
		<td>phone no:</td>
		<td><?php echo$phn?></td>
	</tr>

</table>	
</body>
</html>

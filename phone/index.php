<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('conn.php');

	?>
	<form action="user.php" method="POST">
		<table>
			<tr>
				<td><label>Username</label></td><td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td><label>Phone number</label></td><td><input type="text" name="uemail"></td>
			</tr>
			<tr>
				<td><button name="isubmit">Submit</button></td>
			</tr>
		</table>
		<?php 
			
			
		?>
	</form>
</body>
</html>
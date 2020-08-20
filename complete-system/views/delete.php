<?php
	
	require_once('../php/sessionController.php');	

	// if(isset($_GET['error'])){
	// 	if($_GET['error'] == 'dberror'){
	// 		echo "something wrong ...please try again.";
	// 	}
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>
	<form action="../php/userController.php" method="POST">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="delete" value="Delete">
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
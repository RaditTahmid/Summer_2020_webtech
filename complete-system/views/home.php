<?php
	require_once('../php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home <?=$_SESSION['id']?></h1>

	<a href="create.php"> Create New User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="delete.php"> Delete</a> |
	<a href="../php/logoutController.php"> logout</a>

</body>
</html>

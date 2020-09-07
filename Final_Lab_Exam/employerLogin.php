<?php

	session_start();

	if(isset($_POST['submit']))
	{
		$userName 	= $_POST['userName'];
		$password 	= $_POST['password'];

		if(empty($userName))
		{
			echo "You can't leave any fields empty !";
		}
		else
		{
			$mysqlConnection = mysqli_connect('127.0.0.1', 'radit', 'radit123', 'webtech');
			$query = "select * from admin where userName='$userName' and password='$password' ";
			$sqlExecution = mysqli_query($mysqlConnection, $query);
			$rowsCount = mysqli_num_rows($sqlExecution);
			
			if($rowsCount == 1 )
			{
				$_SESSION['userName'] = $userName;
				header('location: employerHome.php');
			}

			else
			{
				echo "Incorrect user id and password combination ! Please re-enter correct credentials.";
			}
		}
	}
	else
	{
		echo "ERROR";
		header('location: employeelogin.php');
	}
?>
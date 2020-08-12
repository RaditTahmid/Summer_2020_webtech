<?php

	session_start();

	if(isset($_POST['login']))
	{

		$id 		= $_POST['id'];
		$password 	= $_POST['password'];

		if(empty($id) || empty($password))
		{
			echo "You can't leave any fields empty !";
		}
		else
		{
			$mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');
			$query = "select * from users where id='$id' and password='$password' ";
			$sqlExecution = mysqli_query($mysqlConnection, $query);
			$rowsCount = mysqli_num_rows($sqlExecution);
			
			if($rowsCount == 1 )
			{
				
				$_SESSION['status'] = "OK";
				setcookie('status', "OK", time() + 3600, '/');
            	setcookie('id', $rowsCount['id'], time() + 3600, '/');
				if($sqlExecution)
				{
					$_SESSION['loggedIn']='1';
                    include('adminHome.php');
				}	
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
		header('location: login.php');
	}
?>
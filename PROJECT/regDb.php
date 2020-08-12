<?php

	if(isset($_POST['register']))
	{

		$id 		        = $_POST['id'];
		$password 			= $_POST['password'];
		$confirmPassword 	= $_POST['confirmPassword'];
		$name           	= $_POST['name'];
		$email   	 		= $_POST['email'];
		
		$mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');

		if(empty($id) || empty($name)|| empty($email))
		{
			echo "You must enter credentials";
		}
		else
		{
			$query = "insert into users(id,password,confirmPassword,name,email) values('$id','$password','$confirmPassword','$name','$email')";
			mysqli_query($mysqlConnection,$query);
			echo "SUCCESS";
			header('location: login.php');
			
		}	
	}
	else
	{
		echo "ERROR";
		header('location: login.php');
	}
?>
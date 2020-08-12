<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$id 		        = $_POST['id'];
		$password 		= $_POST['password'];
		$confirnPassword 	= $_POST['confirnPassword'];
		$name           	= $_POST['name'];
		$email   	 	= $_POST['email'];

		if(empty($id) || empty($password) || empty($confirnPassword)|| empty($name)|| empty($email))
		{
			echo "You must enter credentials";
		}
		else
		{
			
			$txt = fopen('regInfo.txt', 'regInfo');
			$cred = $id."|".$password."|".$confirnPassword."|".$name."|".$email;
			fwrite($txt, $cred);
			fclose($txt);

			header('location: login.php');
		}	

	}
	else
	{
		header('location: login.php');
	}




?>
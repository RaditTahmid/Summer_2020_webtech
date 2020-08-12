<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 	= $_POST['password'];

		if(empty($id) || empty($password))
		{
			echo "you must enter credentials";
		}
		else
		{
			
			$txt  = fopen('regInfo.txt', 'r');
			while(!feof($regInfo))
			{
				$info = fgets($txt);
				$userInfo = explode('|', $info);
				if($id == trim($userInfo[0]) && $password == trim($userInfo[1]))
				{
					$_SESSION['status'] = "OK";
					header('location: home.php');
				}
				else
				{
					header('location: login.php?msg=Error');
				}
			}
			
			
		}	

	}
	else
	{
		header('location: login.php?msg=AnUnexpedtedErrorOccured');
	}
?>
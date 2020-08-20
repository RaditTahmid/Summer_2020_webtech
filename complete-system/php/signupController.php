<?php
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$id 	= $_POST['id'];
		$password 	= $_POST['password'];
		$confirmPassword 	= $_POST['confirmPassword'];
		$name 	= $_POST['name'];
		$email 		= $_POST['email'];

		if(empty($id) || empty($password) || empty($confirmPassword) || empty($name) || empty($email))
		{
			header('location: ../views/signup.php?error=null');
		}
		else
		{
			
			$user = [
				'id'	=> $id,
				'password'	=>$password,
				'confirmPassword'=> $confirmPassword,
				'name'		=> $name,
				'email'		=> $email
			];

			$status = create($user);
		
			if($status){
				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/signup.php?error=dberror');
			}
		}
		
	}
?>
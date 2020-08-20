<?php
	require_once('../service/userService.php');


	//create new user
	if(isset($_POST['submit'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/create.php?error=null');
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email
			];
			$status = create($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/create.php?error=dberror');
			}
		}	
	}

	if(isset($_POST['delete'])){
		$id 	= $_POST['id'];
		if(empty($id)){
			echo "Can't be null";
		}else{
			$user = [
				'id'	=> $id,
			];
			$status = deleteUser($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/user_list.php');
			}
		}	
	}



?>
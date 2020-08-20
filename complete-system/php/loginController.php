<?php
	session_start();

	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if(empty($id) || empty($password)){
			header('location: ../views/login.php?error=null');
		}else{

			$user = [
				'id'=> $id,
				'password'=> $password
			];

			$status = validate($user);

			if($status){
				$_SESSION['id'] = $id;
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.php?error=invalid');
			}
		}
		
	}
?>
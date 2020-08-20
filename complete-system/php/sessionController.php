<?php

	session_start();
	if(!isset($_SESSION['id'])){
		header("location: login.php?error=invalid_request");
	}

?>
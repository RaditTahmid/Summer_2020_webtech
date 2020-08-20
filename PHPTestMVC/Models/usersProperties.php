<?php

        function userProperties() 
        {
                global $id, $password, $confirmPassword, $name, $email ;

                $id = $_POST['id'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
	        $name = $_POST['name'];
                $email = $_POST['email'];

        }

?>
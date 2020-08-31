<?php

if(isset($_POST['register']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
	$name = $_POST['name'];
    $email = $_POST['email'];

    if( empty($id) || empty($name) || empty($email)  )
    {
        echo "Can't be null";
    }
    
    else
    {
        
        $mysqlConnection = mysqli_connect('127.0.0.1', 'radit', 'radit123', 'webtech');
        $query = "insert into users(id,password,confirmPassword,name,email) values('$id','$password','$confirmPassword','$name','$email')";
        mysqli_query($mysqlConnection, $query);
    }

}

$data = "Registration Successful";
echo $data;
?>
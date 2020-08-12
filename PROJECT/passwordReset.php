<?php
    if(isset($_POST['submit']))
    {
        $id                 = $_POST['id'];
        $password           = $_POST['password'];
        
        if(empty($id))
        {
            echo "You can't leave id empty";
        }

        else
        {
            $mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');
            $query = "update users set password='$password', confirmPassword='$password' where id='$id' ";
            mysqli_query($mysqlConnection, $query);
            echo "Password changed successfully !";
        }
    }
    else
    {
        echo "ERROR";
    }
?>
<?php
    if(isset($_POST['submit']))
    {
        $id             = $_POST['id'];
        if(empty($id))
        {
            echo "You can't leave id empty";
        }

        else
        {
            $mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');
            $query = "delete from employees where id='$id' ";
            mysqli_query($mysqlConnection, $query);
            header('location: employeeProfile.php');
        }
    }
    else
    {
        echo "ERROR";
    }
?>
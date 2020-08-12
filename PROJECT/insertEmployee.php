<?php
    if(isset($_POST['submit']))
    {
        $id             = $_POST['id'];
        $name           = $_POST['name'];
        $dept           = $_POST['dept'];
        $designation    = $_POST['designation'];
        $mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');
        if(empty($id) || empty($name) || empty($dept) || empty($designation))
        {
            echo "You can't leave any fields empty";
        }

        else
        {
            
            $query = "insert into employees values ('$id','$name','$dept','$designation') ";
            mysqli_query($mysqlConnection, $query);
            echo "Employee added successfullly !";
            header('location: employeeList.php');
        }
    }
    else
    {
        echo "ERROR";
    }
?>
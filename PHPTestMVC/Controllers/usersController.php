<?php
    require_once('../Models/dbConnectionString.php');
    require_once('../Models/usersProperties.php');


    function retriveUsers()
    {
        $mysqlConnection = dbConnection();
        $query = "select * from employees";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        global $publicSqlExecution;
        return $publicSqlExecution = $sqlExecution;
    }
    
    //---------------User Delete------------------
    if(isset($_POST['delete']))
    {
        userProperties();
        
        if(empty($id))
        {
            echo "Can't be null";
        }
        else
        {
            
            $mysqlConnection = dbConnection();
            $query = "delete from users where id='$id' ";
            $sqlExecution = mysqli_query($mysqlConnection, $query);
            // global $publicSqlExecution;
            // return $publicSqlExecution = $sqlExecution;
            echo "Success !";
        }	
    }
    //---------------User Delete------------------
    //------------------Add user------------------
    if(isset($_POST['register']))
    {
        userProperties();

        if( empty($id) || empty($name) || empty($email)  )
        {
            echo "Can't be null";
        }
        
        else
        {
            
            $mysqlConnection = dbConnection();
            $query = "insert into users(id,password,confirmPassword,name,email) values('$id','$password','$confirmPassword','$name','$email')";
            mysqli_query($mysqlConnection, $query);
            echo "Success !";
        }

    }
    //------------------Add user------------------
?>
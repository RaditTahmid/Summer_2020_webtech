<?php

    $employerName = $_POST['employerName'];
    $companyName = $_POST['companyName'];
    $contactNo = $_POST['contactNo'];
	$userName = $_POST['userName'];
    $password = $_POST['password'];

    if( empty($employerName) || empty($companyName) || empty($contactNo) || empty($userName))
    {
        echo "You can't leave any fields empty !";
    }
    
    else
    {
        
        $mysqlConnection = mysqli_connect('127.0.0.1', 'radit', 'radit123', 'webtech');
        $query = "Insert into admin Values('$employerName','$companyName','$contactNo','$userName','$password')";
        
        if(mysqli_query($mysqlConnection, $query))
        {
            echo "SUCCESSFULLY REGISTERED EMPLOYER";
        }

        else
        {
            echo "AN UNEXPECTED ERROR OCCURED REGISTERING EMPLOYER !";
        }

    }
    
?>
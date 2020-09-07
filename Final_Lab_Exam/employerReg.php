<?php

    $companyName = $_POST['companyName'];
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];
	$salary = $_POST['salary'];

    if( empty($companyName) || empty($jobTitle) || empty($jobLocation) || empty($salary))
    {
        echo "You can't leave any fields empty !";
    }
    
    else
    {
        
        $mysqlConnection = mysqli_connect('127.0.0.1', 'radit', 'radit123', 'webtech');
        $query = "Insert into employer Values('$companyName','$jobTitle','$jobLocation','$salary')";
        mysqli_query($mysqlConnection, $query);
        // if(mysqli_query($mysqlConnection, $query))
        // {
        //     echo "SUCCESSFULLY REGISTERED EMPLOYER";
        // }

        // else
        // {
        //     echo "AN UNEXPECTED ERROR OCCURED REGISTERING EMPLOYER !";
        // }

    }
    
?>
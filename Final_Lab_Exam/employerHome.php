<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer Home</title>
</head>
<body>
    <center>
    <?php
        echo "<h2> Welcome ".$_SESSION['userName']."!</h2>";
    ?> 
    <a href="logout.php">Logout</a>
    </center>
    
</body>
</html>
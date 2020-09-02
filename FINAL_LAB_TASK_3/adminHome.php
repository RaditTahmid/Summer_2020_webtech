<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home</title>
</head>
<body>
    <center>
    <?php
        echo "<h2> Welcome ".$_SESSION['id']."!</h2>";
    ?>
    <a href="profile.php">Profile</a> </br>
    <a href="changePassword.php">ChangePassword</a></br>
    <a href="viewUsers.php">ViewUsers</a></br>
    <a href="logout.php">Logout</a></br>
    </center>
    
</body>
</html>
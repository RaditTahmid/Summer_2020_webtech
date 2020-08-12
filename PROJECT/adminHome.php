<?php
if(isset($_SESSION['loggedIn']))
{
?>
<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <header style="background-color: royalblue; width: 100%; height: 52px;">
            
            <nav align="right">
                <img align="left" src="images/erpims.JPG" />
                <br /> 
                <a style="text-decoration-line: inherit; color: white;" href="logout.php">Logout</a>
            </nav>
        </header>
        <br />
        
        <div class="sidebar">
            <ul class="nav">
                <li><a href="employeeList.php">Employee List</a></li>
                <li><a href="addEmployee.html">Add Employee</a></li>
                <li><a href="deleteEmployee.php">Remove Employee</a></li>
                <li><a href="passwordReset.html">Change Password</a></li>
                <li><a href="uploadSchedule.html">Upload Meeting Schedule</a></li>
            </ul>
        </div>
    </body>
</html>

<?php
}
else
{
include('login.php');
}

?>
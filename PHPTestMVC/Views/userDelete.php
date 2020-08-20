<?php
    require_once('../Models/dbConnectionString.php');
    require_once('../Controllers/usersController.php');
?>
<html>
    <head>
        <title>Remove Employee</title>
    </head>
    <body>
        <header style="background-color: royalblue; width: 100%; height: 52px;">
            
            <nav align="right">
                <img align="left" src="images/erpims.JPG" />
                <br /> 
                <a style="text-decoration-line: inherit; color: white;" href="#">Logout</a>
            </nav>
        </header>
        <br />
        <?php
            retriveUsers();
        ?>
        <fieldset style="width: 27%;">
            <legend>Employee List</legend>
            <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                </tr>
            </thead>
            <tbody>    
                <?php
                    while ($rowsCount = mysqli_fetch_assoc($publicSqlExecution)) 
                    { 
                        echo "  
                                <tr>
                                    <td>".$rowsCount['id']."</td> 
                                    <td>".$rowsCount['name']."</td>
                                    <td>".$rowsCount['dept']."</td>
                                    <td>".$rowsCount['designation']."</td>
                                </tr>
                            ";
                    }       
               ?>               
            </tbody>
        </table>
        </fieldset>
        
        <br/><br/>

        <fieldset style="width: 20%;">
            <legend>Remove Employee</legend>
            <form action="../Controllers/usersController.php" method="POST">
                <table>
                    <tr>
                        <td>Employee Id</td>
                        <td>
                            <input type="text" name="id"/>
                            <input type="hidden" name="password"/>
                            <input type="hidden" name="confirmPassword"/>
                            <input type="hidden" name="name"/>
                            <input type="hidden" name="email"/>
                        </td>
                    </tr>  
                </table>
                <hr/>
                <input type="submit" name="delete" value="Submit"/>
            </form>
        </fieldset>
    </body>
</html>
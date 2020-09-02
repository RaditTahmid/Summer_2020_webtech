<?php
    session_start();
              
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        
        <?php
            $mysqlConnection = mysqli_connect('127.0.0.1', 'radit', 'radit123', 'webtech');
            $query = "select id,name,email from users where id = '{$_SESSION['id']}' ";
            $sqlExecution=mysqli_query($mysqlConnection,$query);               
        ?>
        <center>
        <fieldset>
                <legend>Admin Profile</legend>
                <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>    
                <?php
                    while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) 
                    { 
                        echo "  
                            <tr>
                                <td>".$rowsCount['id']."</td> 
                                <td>".$rowsCount['name']."</td>
                                <td>".$rowsCount['email']."</td>
                            </tr>";
                    }       
               ?>               
            </tbody>
        </table>
		    </fieldset>
        
        </center>
        
    </body>
</html>

<html>
    <head>
        <title>Employee List</title>
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
        <?php
            $mysqlConnection = mysqli_connect('127.0.0.1:3306', 'radit', 'radit123', 'webtech');
            $query = "select * from employees";
            $sqlExecution=mysqli_query($mysqlConnection,$query);               
        ?>
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
                    while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) 
                    { 
                        echo "  
                            <tr>
                                <td>".$rowsCount['id']."</td> 
                                <td>".$rowsCount['name']."</td>
                                <td>".$rowsCount['dept']."</td>
                                <td>".$rowsCount['designation']."</td>
                            </tr>";
                    }       
               ?>
                
            </tbody>
        </table>

    </body>
</html>
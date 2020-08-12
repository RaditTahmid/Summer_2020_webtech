<html>
    <head>
        <title>Login to ERPIMS</title>
    </head>
    <body>
        <header style="background-color: royalblue; width: 100%; height: 52px;">
            
            <nav align="right">
                <img align="left" src="images/erpims.JPG" />
                <br /> 
                <a style="text-decoration-line: inherit; color: white;" href="homepage.html">Home</a>
            </nav>
        </header>
        <br />
        <table >					
	<tr >
        <td >
			<fieldset>
                <legend>LOGIN</legend>
                    <form action="loginDb.php" method="POST">
                        <table>
                            <tr>
                                <td>Id</td>    
                                    <td><input type="text" name="id"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password"></td>
                                    </tr>
                        </table>
                                <hr />
                                <button type="submit" name="login">Login</button> <a href="registration.php">Register</a>
                                
                    </form>
            </fieldset>
					</td>
					</tr>
</table>		
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer Login</title>
</head>
<body> 
	<fieldset>
    <legend>Login</legend>
    <form action="employerLogin.php" method="POST">
        <table border="1">
            <tbody>    
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="userName"></td> 
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>      
            </tbody>
        </table>
    </form> 
    <br />
    <button type="submit" name="submit">Login</button>
	</fieldset>
</body>
</html>
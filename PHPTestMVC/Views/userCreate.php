<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <header style="background-color: royalblue; width: 100%; height: 52px;">
            
            <nav align="right">
                <img align="left" src="images/erpims.JPG" />
                <br /> 
                <a style="text-decoration-line: inherit; color: white;" href="#">Home</a>
            </nav>
        </header>
        <br />
        
        <table  >
					
    <td >
		<fieldset >
			<legend>Registration</legend>
				<form action="../Controllers/usersController.php" method="POST">
					<br/>
					<table >
					<tr>
					<td>Id</td>
										
						<td><input name="id" type="text"></td>
										
							</tr>
									
							<tr>
								<td>Password</td>
										
									<td><input name="password" type="password"></td>
										
									</tr>

									<tr>
										<td>Confirm Password</td>
										
										<td><input name="confirmPassword" type="password"></td>
										
									</tr>

									<tr>
										<td>Name</td>
										
										<td><input name="name" type="text"></td>
										
									</tr>

									
									<tr>
										<td>Email</td>
										
										<td>
											<input name="email" type="text">
											
										</td>
										
									</tr>			
									
									
</table>
								<hr />
                                <input type="submit" name="register"> <a href="#">Login</a>
								
				</form>
        </fieldset>
		</td>
		</tr>
                    
</table>
    </body>
</html>

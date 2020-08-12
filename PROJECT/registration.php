<html>
<head>
<title>Registration</title>
</head>
<body>

<table  >
					
    <td >
		<fieldset >
			<legend>Registration</legend>
				<form action="regDb.php" method="POST">
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
                                <input type="submit" name="register"> <a href="login.php">Login</a>
								
				</form>
        </fieldset>
		</td>
		</tr>
                    
</table>		
		    

</body>
</html>

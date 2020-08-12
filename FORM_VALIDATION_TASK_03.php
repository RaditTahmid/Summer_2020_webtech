<html>
<head>
	<title>Form</title>
</head>
<body>

	<form method="POST">
		Name <br />
        <input type="text" name="name" pattern="[a-z][A-Z][.][-]"> 
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
		        $nme = $_POST['name'];
                if($nme == "")
                { 
                    echo "Cannot be empty";
                }
	        }
        ?>
        <br /> <br />
        <input type="submit" name="" value="Submit"> <br />
        <br /> Email <br /> 
        <input type="text" name="email"> <br />
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
		        $em = $_POST['email'];
                if($em == "")
                { 
                    echo "Cannot be empty";
                }
	        }
        ?> 
        <br /> 
        <input type="submit" name="" value="Submit">
        <br /> Gender <br /> 
        <input type="radio" name="gender" >Male
        <input type="radio" name="gender" >Female
        <input type="radio" name="gender" >Other
        
        <br /> 
        <input type="submit" name="" value="Submit">
	</form>

</body>
</html>
<html>
    <head>
        <title>Upload meeting schedule</title>
    </head>
    <body>
        <header style="background-color: royalblue; width: 100%; height: 52px;">
            
            <nav align="right">
                <img align="left" href="homepage.html" src="images/erpims.JPG" />
                <br /> 
                <a style="text-decoration-line: inherit; color: white;" href="logout.php">Logout</a>
            </nav>
        </header>
        <br />

        <form method="post" action="fileupload.php" enctype="multipart/form-data">
		    <fieldset>
                <legend>Upload meeting schedule</legend>
                <h3>Select file</h3>
                <input type="file" name="meetingSchedule"><br/><br />
			    <input type="submit" name="upload" value="Upload">
		    </fieldset>
	</form>

    </body>
</html>
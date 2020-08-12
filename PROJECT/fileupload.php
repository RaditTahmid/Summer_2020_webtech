<?php
    if(isset($_POST['upload']))
    {
		$path = 'uploads/'.time().'.pdf';

        if(move_uploaded_file($_FILES['meetingSchedule']['tmp_name'], $path))
        {
			echo "Uploaded successfully";
        }
        else
        {
			echo "An unexpected error occured !";
		}
	}
?>
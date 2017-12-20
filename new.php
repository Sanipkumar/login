<?php
	include "db.php";
	if (isset($_POST['submit']))
	{
		$username=$_POST['name'];
		$password=md5($_POST['pass']);
		$email=$_POST['mail'];
		$sql="INSERT INTO login(username,password,email) VALUES('$username','$password','$email')";
		if($con->query($sql)=== TRUE)
			{
				echo"Data inserted";
			}
			else
			{
				echo"Data not insert".$con->connect_error;
			}
	}
	else
		{
			header("location:login.php");
		}
?>
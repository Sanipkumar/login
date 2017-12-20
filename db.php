<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="ringid";

	$con=new mysqli($host,$user,$pass,$db);
	if($con->connect_error)
	{
		die("faild");
	}
?>
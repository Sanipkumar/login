<?php
	session_start();
	if($_SESSION['id']!="")
	{
		echo"Hello";
	}
?>
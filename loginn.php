<?php
	session_start();
	include "db.php";
	if (isset($_POST['submit']))
	{
		$username=$_POST['name'];
		$password=md5($_POST['pass']);
	}
		$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
		$result=$con->query($sql);
		while($data=$result->fetch_assoc()){
			$id=$data['sl'];
		}
			if($id!=""){
			echo"success";
			$_SESSION['id']=1;
		}
?>

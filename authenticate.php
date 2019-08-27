<?php

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "alex" && $password == "password")
	{
		header("Location: admin.php");
	}
	else
	{
		header("Location: index.php?error=1");
	}
?>

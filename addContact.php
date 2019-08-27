<?php
	//Get the variables
	$id = $_POST['ID'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	//Create file pointer
	$file_name = "information.dat";
	$fp = fopen($file_name, "a");
	//Write information to file
	fwrite($fp, "$id _  $name _  $email _ $phone,\n");
	//Close file
	fclose($fp);
	//Server side redirect
	header("Location: admin.php");
?>

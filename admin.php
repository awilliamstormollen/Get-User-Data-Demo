<html>
<head>
<style>
h1 {
    text-align: center;
    color: blue;
}

h2 {
    text-align: center;
}

canvas {
    border: 1px solid black;
}

</style>

<link rel="stylesheet" href="../mystyle.css" type="text/css"/>


<title>Get User Data Demo</title>
<link rel="stylesheet" href="mystyle.css" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<h1>Get User Data Demo</h1>
<h2>Alexander Williams</h2>

</head>
<body>
<h3>Add a Contact:</h3>
<form action='addContact.php' method='post'>
<table>
<tr><p>Warning: ID must be a special character to delete or modify</p>
	<td>ID:</td><td><input type='text' name='ID'></td>
</td>
<tr>
	<td>Full Name:</td><td><input type='text' name='name'></td>
</tr>
<tr>
        <td>Email:</td><td><input type='text' name='email'></td>
</tr>
<tr>
        <td>Phone:</td><td><input type='text' name='phone'></td>
</tr>
<tr>
	<td colspan='2'><input type='Submit' value='Create Contact'></td>
</tr>
</table>
</form>
<h3>Delete a Contact:</h3>
<form action='delete.php' method='post'>
<table>
<tr>
	<td>ID:</td><td><input type='text' name='ID'></td>
</tr>
<tr>
	<td colspan='2'><input type='Submit' value='Delete Contact'></td>
</tr>
</table>
</form>

<h3> Modify Contact:</h3>
<form action='modify.php' method='post'>
<table>
<tr><p>Warning: ID must be a special character to delete or modify</p>
	<td>ID:</td><td><input type='text' name='ID'></td>
</td>
<tr>
	<td>Full Name:</td><td><input type='text' name='name'></td>
</tr>
<tr>
        <td>Email:</td><td><input type='text' name='email'></td>
</tr>
<tr>
        <td>Phone:</td><td><input type='text' name='phone'></td>
</tr>
<tr>
	<td colspan='2'><input type='Submit' value='Modify Contact'></td>
</tr>
</table>
<h3>Contact Manager:</h3>
<?php
	
	$file_name = "information.dat";
	$fp = fopen($file_name, "r");
	
	echo "<ul>";
	while($line = fgets($fp))
	{
		$id = strtok($line, "|");
		$name = strtok("|");
		$email = strtok("|");
		$phone = strtok("|");

		
	        
		echo "<li><td colspan='2'><input type='Submit' value='Modify Contact'></td> <td colspan='2'><input type='Submit' value='Delete Contact'></td> The ID, Name, Email and Phone Number is:  $id $name $email $phone \n
";
	}
	echo "</ul>";
	fclose($fp);
?>
</table>
</body>
</html>


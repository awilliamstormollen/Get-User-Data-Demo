<?php
$id = $_POST['ID'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$file = "information.dat";
$fileData = file_get_contents($file);
$new_contents= "";
if( strpos($fileData, $id) !== false)
{
    $contents_array = preg_split("/\\r\\n|\\r|\\n/", $fileData);
    foreach ($contents_array as &$record)
         {
         if (strpos($record, $id) !== false)
         {
          //  fwrite($fp, "$id,$name,$email,$phone\n");
            pass; 
        }
        else
        {
            $new_contents .= $record . "\r";
        }
    }
    file_put_contents($file, $new_contents);
    header("Location: admin.php");
}
else
{
    header("Location: admin.php");
}
     



	//Create file pointer
	$file_name = "information.dat";
	$fp = fopen($file_name, "a");

	//Write information to file
	fwrite($fp, "\n$id, $name, $email, $phone, $today\n");

	//Close file
	fclose($fp);
?>

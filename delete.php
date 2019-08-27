<?php
$id = $_POST["ID"];
//$id = explode(" ", $s);
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
            pass; 
        }
	else
	{
            $new_contents .= $record . "\r"; 
        }
    }
   // $newString = "";
   // $newString = explode(',',$new_contents);
    file_put_contents($file, $new_contents);
    header("Location: admin.php"); 
    
}
else
{
    header("Location: admin.php");
}
?>

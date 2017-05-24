<?php
if(isset($_POST['nieuwsSubmit'])){
	$file = $_FILES['nieuwsImage'];
	//get all the fileatributes
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];
	//allow certain extensions
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

}
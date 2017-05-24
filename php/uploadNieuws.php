<?php
include "../includes/connect.php";
session_start();

if(isset($_POST['newsSubmit'])){
	$uid = $_SESSION['name'];
	$title = $_POST['title'];
	$date = date('Y-m-d H:i:s');
	$link = $_POST['link'];
	$maintext = $_POST['maintext'];
	$imgStatus = 0;

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
	$allowed = array('jpg', 'jpeg', 'png');
	//errorhandling
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$fileNameNew = "nieuwsImage_".$title.".".$fileActualExt;
				$fileDestination = 'nieuwsImages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$imgStatus = 1;
			} else {
				echo "Het bestand dat u probeert te uploaden is te groot.";
			}
		} else {
			echo "Er was een probleem bij het uploaden van uw bestand.";
		}
	} else {
		echo "U kan geen bestand van dit type uploaden.";
	}

	$sql = "INSERT INTO nieuwsItems (uid, title, date, link, bericht, imgStatus) VALUES ('$uid', '$title', '$date', '$link', '$maintext', '$imgStatus')";
	$result = mysqli_query($connect, $sql);
	header("Location: ../profile.php?uploadsucces");
}




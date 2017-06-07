<?php
include "../includes/connect.php";
session_start();

if(isset($_POST['eventSubmit'])){
	$uid = $_SESSION['name'];
	$title = $_POST['title'];
	$eventDate = $_POST['eventDate'];
	$location = $_POST['place'];
	$date = date('Y-m-d H:i');
	$link = $_POST['link'];
	$maintext = $_POST['maintext'];

	$file = $_FILES['eventImage'];
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
				$fileNameNew = "eventImage_".$title.".".$fileActualExt;
				$fileDestination = '../eventImages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "INSERT INTO eventItems (uid, title, eventDate, place, date, link, bericht, fileName) VALUES ('$uid', '$title', '$eventDate', '$location', '$date', '$link', '$maintext', '$fileNameNew')";
				$result = mysqli_query($connect, $sql);
					header("Location: ../evenementen.php?upload=succes");
			} else {
				header("Location: ../profile.php?filesize_too_big");
			}
		} else {
			header("Location: ../profile.php?file-error");
		}
	}else {
		$sql = "INSERT INTO eventItems (uid, title, eventDate, place, date, link, bericht, fileName) VALUES ('$uid', '$title', '$eventDate', '$location', '$date', '$link', '$maintext', 'eventImage_default.jpg')";
		$result = mysqli_query($connect, $sql);
		header("Location: ../evenementen.php?upload=default");
	}
	
}








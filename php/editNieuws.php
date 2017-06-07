<?php
include "../includes/connect.php";
session_start();


if(isset($_POST['newsEdit'])){
	$uid = $_SESSION['name'];
	$title = $_POST['title'];
	$date = date('Y-m-d H:i:s');
	$link = $_POST['link'];
	$maintext = $_POST['maintext'];
	$fileNameExisting = mysqli_query($connect, "SELECT fileName FROM nieuwsItems WHERE "$title"");

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
				$fileDestination = '../nieuwsImages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "INSERT INTO nieuwsItems (uid, title, date, link, bericht, fileName) VALUES ('$uid', '$title', '$date', '$link', '$maintext', '$fileNameNew')";
				$result = mysqli_query($connect, $sql);
					header("Location: ../nieuws.php?upload=succes");
			} else {
				header("Location: ../profile.php?filesize_too_big");
			}
		} else {
			header("Location: ../profile.php?file-error");
		}
	}else {
		$sql = "INSERT INTO nieuwsItems (uid, title, date, link, bericht, fileName) VALUES ('$uid', '$title', '$date', '$link', '$maintext', '$fileNameExisting')";
		$result = mysqli_query($connect, $sql);
		header("Location: ../nieuws.php?upload=default");
	}
	
}








<?php
include "../includes/connect.php";
session_start();

if(isset($_POST['eventEdit'])){
	$eventID = $_POST['eventID2'];
	$title = $_POST['title2'];
	$link = $_POST['link2'];
	$place = $_POST['place2'];
	$eventDate = $_POST['eventDate2'];
	$maintext = $_POST['maintext2'];

	$sql = "UPDATE eventItems SET title='$title', link='$link', place='$place', eventDate='$eventDate' bericht='$maintext' WHERE eventID='$eventID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../evenementen.php");
}
<?php
include "../includes/connect.php";
session_start();


if(isset($_POST['newsEdit'])){
	$nieuwsID = $_POST['nieuwsID2'];
	$title = $_POST['title2'];
	$link = $_POST['link2'];
	$maintext = $_POST['maintext2'];

	$sql = "UPDATE nieuwsItems SET title='$title', link='$link', bericht='$maintext' WHERE nieuwsID='$nieuwsID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../nieuws.php");
}








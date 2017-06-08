<?php
include "../includes/connect.php";
session_start();


if(isset($_POST['newsEdit'])){
	$nieuwsID = $_POST['nieuwsID'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$maintext = $_POST['maintext'];

	$sql = "UPDATE nieuwsItems SET title='$title', link='$link', bericht='$maintext' WHERE nieuwsID='$nieuwsID'";
	$result = mysqli_query($connect, $sql);
	header("Location: nieuws.php");
}








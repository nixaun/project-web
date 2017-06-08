<?php
include "../includes/connect.php";
session_start();

if(isset($_POST['testimonialEdit'])){
	$testimonialID = $_POST['testimonialID2'];
	$title = $_POST['title2'];
	$link = $_POST['link2'];
	$maintext = $_POST['maintext2'];

	$sql = "UPDATE testimonialItems SET title='$title', link='$link', bericht='$maintext' WHERE testimonialID='$testimonialID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../testimonials.php");
}
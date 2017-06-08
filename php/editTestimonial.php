<?php
include "includes/connect.php";
session_start();

if(isset($_POST['testimonialEdit'])){
	$testimonialID = $_POST['testimonialID'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$maintext = $_POST['maintext'];

	$sql = "UPDATE testimonialItems SET title='$title', link='$link', bericht='$maintext' WHERE testimonailID='$testimonialID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../testimonials.php");
}
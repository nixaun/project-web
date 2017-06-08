<?php
include "../includes/connect.php";
session_start();


	$testimonialID = $_POST['testimonialID'];

	$sql = "DELETE FROM testimonialItems WHERE testimonialID='$testimonialID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../testimonials.php");

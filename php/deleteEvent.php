<?php
include "../includes/connect.php";
session_start();


	$eventID = $_POST['eventID'];

	$sql = "DELETE FROM eventItems WHERE  eventID='$eventID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../evenementen.php");
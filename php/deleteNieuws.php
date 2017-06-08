<?php
include "../includes/connect.php";
session_start();


	$nieuwsID = $_POST['nieuwsID'];

	$sql = "DELETE FROM nieuwsItems WHERE  nieuwsID='$nieuwsID'";
	$result = mysqli_query($connect, $sql);
	header("Location: ../nieuws.php");

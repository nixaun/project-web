<?php
session_start();

function getIndexEvents($connect){
	//enter database
	$sql = "SELECT * FROM eventItems ORDER BY eventDate ASC LIMIT 3";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<div>";
		echo "<div>";
		echo "<a href='".$row['link']."' target='_blank'><img src='eventImages/".$row['fileName']."' alt=''></a>";
		echo "</div>";
		echo "<a href='".$row['link']."' target='_blank'><h1>".$row['title']."</h1></a>";
        echo "<h2>Locatie   ".$row['place']."</h2>";
        echo "<h2>start   ".date('d-m-Y H:i', strtotime($row['eventDate']))."</h2>";
    	echo "<h2>".$row['uid']."</h2>";
    	echo "<h2>".date('d-m-Y H:i', strtotime($row['date']))."</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	echo "</div>";
    }
}


function getIndexNieuws($connect){
	//enter database
	$sql = "SELECT * FROM nieuwsItems ORDER BY date DESC LIMIT 3";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<div>";
		echo "<div>";
		echo "<a href='".$row['link']."'><img src='nieuwsImages/".$row['fileName']."' alt=''></a>";
		echo "</div>";
		echo "<a href='".$row['link']." target='_blank'><h1>".$row['title']."</h1></a>";
    	echo "<h2>".$row['uID']."</h2>";
    	echo "<h2>".date('d-m-Y H:i', strtotime($row['date']))."</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	echo "</div>";
    }	
}


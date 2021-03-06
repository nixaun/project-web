<?php
session_start();

function getEvent($connect){

	//counter voor clearfix
	$articleCounter = 0;
	//enter database
	$sql = "SELECT * FROM eventItems ORDER BY eventDate ASC";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$articleCounter++;
		if(($articleCounter-1)%3 === 0){
			echo "<div class='news clearfix'>";
		}
		echo "<div>";
		echo "<a href='".$row['link']."' target='_blank'><img src='eventImages/".$row['fileName']."' alt=''></a>";
		echo "<a href='".$row['link']."' target='_blank'><h1>".$row['title']."</h1></a>";
        echo "<h2>Locatie   ".$row['place']."</h2>";
        echo "<h2>start   ".date('d-m-Y H:i', strtotime($row['eventDate']))."</h2>";
    	echo "<h2>".$row['uid']."</h2>";
    	echo "<h2>".date('d-m-Y H:i', strtotime($row['date']))."</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	if($_SESSION['role'] == 1 OR $_SESSION['role'] == 2){
            
            echo "<form class='edit-form' method='POST' action='eventEditPage.php'>
                    <input type='hidden' name='eventID' value='".$row['eventID']."'>
                    <input type='hidden' name='uid' value='".$row['uid']."'>
                    <input type='hidden' name='title' value='".$row['title']."'>
                    <input type='hidden' name='link' value='".$row['link']."'>
                    <input type='hidden' name='place' value='".$row['place']."'>
                    <input type='hidden' name='eventDate' value='".$row['eventDate']."'>
                    <input type='hidden' name='message' value='".$row['bericht']."'>
                    <button type='submit'>pas aan</button>
                  </form>";
    		echo "<form class='delete-nieuws' method='POST' action='php/deleteEvent.php'>
                    <input type='hidden' name='eventID' value='".$row['eventID']."'>
                    <button>verwijder</button>
                  </form>";  
    	}
    	echo "</div>";
    	if($articleCounter%3 === 0 OR $articleCounter === mysqli_num_rows($result)){
    		echo "</div>";
    	}
	}
}

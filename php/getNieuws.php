<?php
session_start();

function getNieuws($connect){

	//counter voor clearfix
	$articleCounter = 0;
	//enter database
	$sql = "SELECT * FROM nieuwsItems ORDER BY date DESC";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$articleCounter++;
		if(($articleCounter-1)%3 === 0){
			echo "<div class='news clearfix'>";
		}
		echo "<div>";
		echo "<a href='".$row['link']."'><img src='nieuwsImages/".$row['fileName']."' alt=''></a>";
		echo "<a href='".$row['link']." target='_blank'><h1>".$row['title']."</h1></a>";
    	echo "<h2>".$row['uID']."</h2>";
    	echo "<h2>".date('d-m-Y H:i', strtotime($row['date']))."</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	if($_SESSION['role'] != 0){
    		echo "<form class='delete-nieuws' method='POST' action='php/deleteNieuws.php'>
                    <input type='hidden' name='nieuwsID' value='".$row['nieuwsID']."'>
                    <button>verwijder</button>
                  </form>";     
    	}
    	echo "</div>";
    	if($articleCounter%3 === 0 OR $articleCounter === mysqli_num_rows($result)){
    		echo "</div>";
    	}
	}
}

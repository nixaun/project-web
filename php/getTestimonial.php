<?php
session_start();

function getTestimonial($connect){
	//enter database
	$sql = "SELECT * FROM testimonialItems";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<div>";
		echo "<a href='".$row['link']."'><img src='testimonialImages/".$row['fileName']."' alt=''></a>";
		echo "<a href='".$row['link']." target='_blank'><h1>".$row['title']."</h1></a>";
    	echo "<h2>".$row['uid']."</h2>";
            echo "<h2>".$row['date']." dagen geleden</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	if($_SESSION['role'] == 1 OR $_SESSION['role'] == 2){
    		echo "<form class='edit-form' method='POST' action='editNieuws.php'>
    				<input type='hidden' name='nieuwsID' value='".$row['nieuwsID']."'>
    				<input type='hidden' name='uid' value='".$row['uID']."'>
    				<input type='hidden' name='title' value='".$row['title']."'>
    				<input type='hidden' name='link' value='".$row['link']."'>
    				<input type='hidden' name='message' value='".$row['bericht']."'>
    				<input type='hidden' name='fileName' value='".$row['fileName']."'>
					<button>Edit</button>
			  	  </form>";
    	}
    	echo "</div>";
	}
}

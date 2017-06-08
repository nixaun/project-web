<?php
session_start();

function getTestimonial($connect){
	//enter database
	$sql = "SELECT * FROM testimonialItems ORDER BY date DESC";
	$result = mysqli_query($connect, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<div class='clearfix'>";
		echo "<a href='".$row['link']."'><img src='testimonialImages/".$row['fileName']."' alt=''></a>";
		echo "<a href='".$row['link']." target='_blank'><h1>".$row['title']."</h1></a>";
    	echo "<h2>".$row['uid']."</h2>";
            echo "<h2>".date('d-m-Y H:i', strtotime($row['date']))."</h2>";
    	echo "<p>".nl2br($row['bericht'])."</p>";
    	echo "<a href='".$row['link']."'>read more</a>";
    	if($_SESSION['role'] == 1 OR $_SESSION['role'] == 2){
    		echo "<form class='edit-form' method='POST' action='testimonialEditPage.php'>
    				<input type='hidden' name='testimonialID' value='".$row['testimonialID']."'>
    				<input type='hidden' name='uid' value='".$row['uid']."'>
    				<input type='hidden' name='title' value='".$row['title']."'>
    				<input type='hidden' name='link' value='".$row['link']."'>
    				<input type='hidden' name='message' value='".$row['bericht']."'>
					<button>pas aan</button>
			  	  </form>";
            echo "<form method='POST' action='php/deleteTestimonial.php'>
                    <input type='hidden' name='testimonialID' value='".$row['testimonialID']."'>
                    <button>verwijder</button>
                  </form>";      
    	}
    	echo "</div>";
	}
}

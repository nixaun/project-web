<?php
include 'connect.php';

$sql = "SELECT * FROM nieuwsItems";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		// in de box bv div
		echo "<div>"


			if($row['imgID'] == ''){
				echo "<img src='images/openAvatar.jpg'";
			} else{
				echo "<img src='nieuwsImages/nieuwsImage".$imgID.".jpg'>";
			}
		echo "</div>"
		// einde div
	}
}



    //// upload images

    $fileNameNew = "profile".$imgID.".".$fileActualExt;

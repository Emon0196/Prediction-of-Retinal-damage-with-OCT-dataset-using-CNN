<?php
	if(ISSET($_POST['add_hotel'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
        $rating = $_POST['rating'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `hotel` (name, address, rating, photo) VALUES('$name', '$address', '$rating', '$photo_name')") or die(mysqli_error());
		header("location:hotel.php");
	}
?>
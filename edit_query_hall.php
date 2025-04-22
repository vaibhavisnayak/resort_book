<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_hall'])){
		$hall_type = $_POST['hall_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `hall` SET `hall_type` = '$hall_type', `price` = '$price', `photo` = '$photo_name' WHERE `hall_id` = '$_REQUEST[hall_id]'") or die(mysqli_error());
		header("location:hall.php");
	}
?>
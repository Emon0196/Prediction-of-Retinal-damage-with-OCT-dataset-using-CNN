<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `hotel` WHERE `h_id` = '$_REQUEST[h_id]'") or die(mysql_error());
	header("location:hotel.php");
?>
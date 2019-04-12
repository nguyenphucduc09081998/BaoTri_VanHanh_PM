<?php

	include('connect.php');
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['deletetintucbongro'];
	$query = "DELETE FROM tintucbongro WHERE MaTinTucBongRo = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /adminbongro.php');
	}
	
?>
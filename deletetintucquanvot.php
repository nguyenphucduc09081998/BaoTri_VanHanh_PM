<?php

	include('connect.php');
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['deletetintucquanvot'];
	$query = "DELETE FROM tintucquanvot WHERE MaTinTucQuanVot = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /adminquanvot.php');
	}
	
?>
<?php

	include('connect.php');
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['deletetintucbongda'];
	$query = "DELETE FROM tintucbongda WHERE MaTinTucBongDa = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /adminbongda.php');
	}
	
?>
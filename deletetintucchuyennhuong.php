<?php

	include('connect.php');
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['deletetintucchuyennhuong'];
	$query = "DELETE FROM tintucchuyennhuong WHERE MaTinTucChuyenNhuong = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /adminchuyennhuong.php');
	}
	
?>
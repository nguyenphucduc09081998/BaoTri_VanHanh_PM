<?php

	include('connect.php');
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['deletetintucvothuat'];
	$query = "DELETE FROM tintucvothuat WHERE MaTinTucVoThuat = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /adminvothuat.php');
	}
	
?>
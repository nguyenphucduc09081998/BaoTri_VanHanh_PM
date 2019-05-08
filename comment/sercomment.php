<?php

$a = $_SESSION['username'];
//var_dump($a);
include('connect.php');
if (isset($_POST['comment'])) {
	$texcomment =  $_POST['texcomment'];
	$query = "INSERT INTO comment (username, Discomment) 
  			  VALUES('$a', '$texcomment')";
			  //var_dump($query);
			  mysqli_query($db, $query);
			 
}
?>
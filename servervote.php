<?php
include('connect.php');
if (isset($_POST['vote'])) {
	
	if(!empty($_POST['radio1'])){
		$radio1 =  $_POST['radio1'];
		var_dump($radio1);
	}if(!empty($_POST['radio2'])){
		$radio2 =  $_POST['radio2'];
		var_dump($radio2);
	}if(!empty($_POST['radio3'])){
		$radio3 =  $_POST['radio3'];
		var_dump($radio3);
	}
	
	
	
	
	
	
  
    
    
}
?>
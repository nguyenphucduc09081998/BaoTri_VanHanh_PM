<?php
include('connect.php');
//$a = $_SESSION['aid'];
//var_dump($a);
$errors = array();
$sql = "UPDATE answer SET";


if (isset($_POST['vote'])) {
    
    if(!empty($_POST['radio1'])){
        $radio1 =  $_POST['radio1'];
        //var_dump($radio1);
		$sql .= " acount = acount + 1";
    }
    $sql .=" WHERE aid = '$radio1' ";
	if(mysqli_query($db, $sql)){
		array_push($errors, "Vote thành công");
		//header('location: result_vote.phpidresult_vote=<?php echo $qid;');
	}else{
		array_push($errors, "Vote thất bại");
	}

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 6/27/2019
 * Time: 6:42 PM
 */

function updateQuestion($id, $isFlag){
    include ('connect.php');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tintucthethao";

    $db = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
    if($isFlag == true)
        $query = "UPDATE question SET is_flag = 0 WHERE qid = $id";
    else
        $query = "UPDATE question SET is_flag = 1 WHERE qid = $id";

    mysqli_query($db, $query);
}
if (isset($_POST['selected'])) {

    updateQuestion($_POST['reset_flag'], true);
    updateQuestion($_POST['radio1'], false);

    header('location: /managementQuestion.php');
}
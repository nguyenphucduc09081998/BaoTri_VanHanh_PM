<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 6/27/2019
 * Time: 1:55 PM
 */
function buildNextID(){
    include('connect.php');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tintucthethao";

    $db = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
    $query = "SELECT qid FROM `question` ORDER by qid DESC LIMIT 1";
    $result = mysqli_query($db, $query);
    $strID = mysqli_fetch_array($result);
    $id = (int)$strID['qid'];

    return $id + 1;
}

$errors = array();
    if (isset($_POST['insert_question'])) {
        include('connect.php');
        $title = $_POST['title'];
        $nextID = buildNextID();
        $arr = explode("\r\n", trim($_POST['option_question']));

        //insert all votes for this question
        for ($i = 0; $i < count($arr); $i++) {
            $line = $arr[$i];
            $query = "INSERT INTO answer (qid, atitle, acount) VALUES($nextID, '$line', 0)";
            mysqli_query($db, $query);

        }
        $queryQuestion = "INSERT INTO question (qtitle) value ('$title')";
        mysqli_query($db, $queryQuestion);

        header('location: /admin.php');
    }






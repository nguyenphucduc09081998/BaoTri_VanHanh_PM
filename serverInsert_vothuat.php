<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/14/2018
 * Time: 10:31 AM
 */
// connect to the database
	include('connect.php');

$errors = array();
    if (isset($_POST['insertbongda'])) {

        $titlebongda =  $_POST['titlebongda'];
        $subtitlebongda = $_POST['subtitlebongda'];
        $ngaydangbongda =  $_POST['ngaydangbongda'];
        $descriptionbongda	 = $_POST['descriptionbongda'];
       //  $khuvuc = (int)$_POST['linh_vuc'];
//get nameimage
        $filename = $_FILES['imagebongda']['name'];
        $filetmpname = $_FILES['imagebongda']['tmp_name'];
        $folder = 'images/';
		//
		$filename1 = $_FILES['videobongda']['name'];
        $filetmpname1 = $_FILES['videobongda']['tmp_name'];
        $folder = 'images/';

        // first check the database to make sure
		if (file_exists($_FILES['imagebongda']['tmp_name'])) {
		
			move_uploaded_file($filetmpname, $folder.$filename);
		}
		if (file_exists($_FILES['videobongda']['tmp_name'])) {
		
			move_uploaded_file($filetmpname1, $folder.$filename1);
		}
		
		
			$query = "INSERT INTO tintucvothuat (TieuDeVoThuat, PhuDeVoThuat, ImageVoThuat, VideoVoThuat, ChiTietVoThuat, NgayDangVoThuat ) 
  			  VALUES('$titlebongda', '$subtitlebongda', '/images/$filename','/images/$filename1','$descriptionbongda', '$ngaydangbongda')";

		if(mysqli_query($db, $query)){
			array_push($errors, "Thêm Thành công");
		}else{
			array_push($errors, "Thêm Thất Bại");
		}
		
		


}
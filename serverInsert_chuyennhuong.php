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
	
        //$MaCongTy = (int)$result['MaCongTy'];

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        //if (empty($TenCV)) { array_push($errors, "chưa có tên công việc"); }
       // if (empty($MoTa)) { array_push($errors, "chưa có mô tả công việc"); }
        //if (empty($YeuCau)) { array_push($errors, "chưa có yêu cầu công việc"); }
        //if (empty($MucLuong)) { array_push($errors, "chưa có mức lương công việc"); }
        //if (empty($TinhChat)) { array_push($errors, "chưa có  công việc"); }
        //if (empty($MucLuong)) { array_push($errors, "chưa có số lượng công việc"); }

        // first check the database to make sure
		if (file_exists($_FILES['imagebongda']['tmp_name'])) {
		
			move_uploaded_file($filetmpname, $folder.$filename);
		}
		if (file_exists($_FILES['videobongda']['tmp_name'])) {
		
			move_uploaded_file($filetmpname1, $folder.$filename1);
		}
		
		
			$query = "INSERT INTO tintucchuyennhuong (TieuDeChuyenNhuong, PhuDeChuyenNhuong, ImageChuyenNhuong, VideoChuyenNhuong, ChiTietChuyenNhuong, NgayDangChuyenNhuong ) 
  			  VALUES('$titlebongda', '$subtitlebongda', '/images/$filename','/images/$filename1','$descriptionbongda', '$ngaydangbongda')";

		if(mysqli_query($db, $query)){
			array_push($errors, "Thêm Thành công");
		}else{
			array_push($errors, "Thêm Thất Bại");
		}
		
		


}
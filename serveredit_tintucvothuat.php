<?php


// initializing variables

$errors = array();
$matintucbongda = $_GET['edittintucvothuat'];
//var_dump($matintucbongda);

	//var_dump($macongviectamthoi);
// connect to the database
include('connect.php');
// REGISTER USER
if (isset($_POST['insertbongda'])) {
    
	
/////////////
		$titlebongda =  $_POST['titlebongda'];
        $subtitlebongda = $_POST['subtitlebongda'];
        $ngaydangbongda =  $_POST['ngaydangbongda'];
        $descriptionbongda	 = $_POST['descriptionbongda'];
        // $khuvuc = (int)$_POST['linh_vuc'];
//get nameimage
        $filename = $_FILES['imagebongda']['name'];
        $filetmpname = $_FILES['imagebongda']['tmp_name'];
        $folder = 'images/';
		//
		$filename1 = $_FILES['videobongda']['name'];
        $filetmpname1 = $_FILES['videobongda']['tmp_name'];
        $folder = 'images/';
	
 $a = 0;
	
	$sql = "UPDATE tintucvothuat SET";
	
	if (file_exists($_FILES['imagebongda']['tmp_name'])) {
		$sql .= " ImageVoThuat = '/images/$filename'";
		$a+=1;	
		move_uploaded_file($filetmpname, $folder.$filename);
	}
	
	if (file_exists($_FILES['videobongda']['tmp_name'])) {
		
		if(($a != 0)){
			 $sql .= ", VideoVoThuat = '/images/$filename1'";
		}
		else{
		   $sql .= " VideoVoThuat = '/images/$filename1'";
		   $a++;
		}			
		move_uploaded_file($filetmpname1, $folder.$filename1);
	}
	
	if(!empty($titlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", TieuDeVoThuat = '$titlebongda'";
		}
		else{
		   $sql .= " TieuDeVoThuat = '$titlebongda'";
		   $a++;
		}
		
    }
	
    if(!empty($subtitlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", PhuDeVoThuat = '$subtitlebongda'";
		}
		else{
		   $sql .= " PhuDeVoThuat = '$subtitlebongda'";
		   $a++;
		}
		
    }
	
	 if(!empty($ngaydangbongda))
    {
		if($a != 0){
			$sql .= ", NgayDangVoThuat = '$ngaydangbongda'";
		}
		else{
			 $sql .= " NgayDangVoThuat = '$ngaydangbongda'";
			 $a++;
		} 
	}

	if(!empty($descriptionbongda))
    {
		if($a != 0)
			$sql .= ", ChiTietVoThuat = '$descriptionbongda'";

        
		else{
			$a++;
		 $sql .= " ChiTietVoThuat = '$descriptionbongda'";
		}
	}

	

	
	$sql .=" WHERE MaTinTucVoThuat = '$matintucbongda'";
  
		 
		// var_dump($sql);
	if(mysqli_query($db, $sql)){

		array_push($errors, "Update thành công");
	}else{
		array_push($errors, "Update thất bại");
	}

	

  
   
}


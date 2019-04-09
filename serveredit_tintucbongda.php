<?php


// initializing variables

$errors = array();
$matintucbongda = $_GET['edittintucbongda'];
var_dump($matintucbongda);

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
         $khuvuc = (int)$_POST['linh_vuc'];
//get nameimage
        $filename = $_FILES['imagebongda']['name'];
        $filetmpname = $_FILES['imagebongda']['tmp_name'];
        $folder = 'images/';
		//
		$filename1 = $_FILES['videobongda']['name'];
        $filetmpname1 = $_FILES['videobongda']['tmp_name'];
        $folder = 'images/';
	
 $a = 0;
	
	$sql = "UPDATE tintucbongda SET";
	
	if (file_exists($_FILES['imagebongda']['tmp_name'])) {
		$sql .= " ImageBongDa = '/images/$filename'";
		$a+=1;	
		move_uploaded_file($filetmpname, $folder.$filename);
	}
	
	if (file_exists($_FILES['videobongda']['tmp_name'])) {
		
		if(($a != 0)){
			 $sql .= ", VideoBongDa = '/images/$filename1'";
		}
		else{
		   $sql .= " VideoBongDa = '/images/$filename1'";
		   $a++;
		}			
		move_uploaded_file($filetmpname1, $folder.$filename1);
	}
	
	if(!empty($titlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", TieuDeBongDa = '$titlebongda'";
		}
		else{
		   $sql .= " TieuDeBongDa = '$titlebongda'";
		   $a++;
		}
		
    }
	
    if(!empty($subtitlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", PhuDeBongDa = '$subtitlebongda'";
		}
		else{
		   $sql .= " PhuDeBongDa = '$subtitlebongda'";
		   $a++;
		}
		
    }
	
	 if(!empty($ngaydangbongda))
    {
		if($a != 0){
			$sql .= ", NgayDangBongDa = '$ngaydangbongda'";
		}
		else{
			 $sql .= " NgayDangBongDa = '$ngaydangbongda'";
			 $a++;
		} 
	}

	if(!empty($descriptionbongda))
    {
		if($a != 0)
			$sql .= ", ChiTietBongDa = '$descriptionbongda'";

        
		else{
			$a++;
		 $sql .= " ChiTietBongDa = '$descriptionbongda'";
		}
	}

	if(!empty($khuvuc))
    {
		if($a != 0)
			$sql .= ", KhuVucBongDa = '$khuvuc'";
		
		else{
		  $sql .= " KhuVucBongDa = '$khuvuc'";
		  $a++;
		}
	}

	
	$sql .=" WHERE MaTinTucBongDa = '$matintucbongda'";
  
		 
		// var_dump($sql);
	if(mysqli_query($db, $sql)){

		array_push($errors, "Update thành công");
	}else{
		array_push($errors, "Update thất bại");
	}

	

  
   
}


<?php


// initializing variables

$errors = array();
$matintucbongda = $_GET['edittintucquanvot'];
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
         //$khuvuc = (int)$_POST['linh_vuc'];
//get nameimage
        $filename = $_FILES['imagebongda']['name'];
        $filetmpname = $_FILES['imagebongda']['tmp_name'];
        $folder = 'images/';
		//
		$filename1 = $_FILES['videobongda']['name'];
        $filetmpname1 = $_FILES['videobongda']['tmp_name'];
        $folder = 'images/';
	
 $a = 0;
	
	$sql = "UPDATE tintucquanvot SET";
	
	if (file_exists($_FILES['imagebongda']['tmp_name'])) {
		$sql .= " ImageBQuanVot = '/images/$filename'";
		$a+=1;	
		move_uploaded_file($filetmpname, $folder.$filename);
	}
	
	if (file_exists($_FILES['videobongda']['tmp_name'])) {
		
		if(($a != 0)){
			 $sql .= ", VideoQuanVot = '/images/$filename1'";
		}
		else{
		   $sql .= " VideoQuanVot = '/images/$filename1'";
		   $a++;
		}			
		move_uploaded_file($filetmpname1, $folder.$filename1);
	}
	
	if(!empty($titlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", TieuDeQuanVot = '$titlebongda'";
		}
		else{
		   $sql .= " TieuDeQuanVot = '$titlebongda'";
		   $a++;
		}
		
    }
	
    if(!empty($subtitlebongda) ) 
    {
		if(($a != 0)){
			 $sql .= ", PhuDeQuanVot = '$subtitlebongda'";
		}
		else{
		   $sql .= " PhuDeQuanVot = '$subtitlebongda'";
		   $a++;
		}
		
    }
	
	 if(!empty($ngaydangbongda))
    {
		if($a != 0){
			$sql .= ", NgayDangQuanVot = '$ngaydangbongda'";
		}
		else{
			 $sql .= " NgayDangQuanVot = '$ngaydangbongda'";
			 $a++;
		} 
	}

	if(!empty($descriptionbongda))
    {
		if($a != 0)
			$sql .= ", ChiTietQuanVot = '$descriptionbongda'";

        
		else{
			$a++;
		 $sql .= " ChiTietQuanVot = '$descriptionbongda'";
		}
	}

	

	
	$sql .=" WHERE MaTinTucQuanVot = '$matintucbongda'";
  
		 
		// var_dump($sql);
	if(mysqli_query($db, $sql)){

		array_push($errors, "Update thành công");
	}else{
		array_push($errors, "Update thất bại");
	}

	

  
   
}


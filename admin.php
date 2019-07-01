<?php
//var_dump();
session_start();
//var_dump($_SESSION['role']);exit();
if(!empty($_SESSION['role'])){
	if($_SESSION['role'] == 1){
	include('headeradmin.php');
}
}else{?>
	<a  class="dsfds" href="user/login.php" style="margin: 20px"><h1> Bạn Cần Đăng Nhập với tư cách admin</h1></a>
	<?php
	
}



?>
<style>
.dsfds{
	 text-decoration:none;
	text-align:center;
}
.dsfds:hover{
	 color: red;
}
</style>


            
           
   
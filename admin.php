<?php
//var_dump();
session_start();
if(!empty($_SESSION['username'])){
	include('headeradmin.php');
}else{?>
	<a  class="dsfds" href="user/login.php" style="margin: 20px"><h1> Bạn Cần Đăng Nhập</h1></a>
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


            
           
   
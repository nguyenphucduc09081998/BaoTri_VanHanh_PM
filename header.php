<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/doan.js"></script>
    <!-- Bootstrap CSS and javascript-->

		<!--  CSS -->
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesHeader.css">
    <link rel="stylesheet" href="css/hang-1.css">
    <link rel="stylesheet" href="css/stylesTrang1.css">
    <title>DoAn</title>
	<?php 	session_start();	
	//var_dump($_SESSION['username'] );
			include('connect.php');		
	?>
	<style>
	.button {
  background-color: white; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 50%;}
	</style>
</head>
<body>
    <div>
			<div class="container">
				<div class="row"> 
					<div class="col-md-10">
					<a href="/DoAn.php">
						<img src="images/logo.png">
						</a>	
					</div>
					<div class="col-md-2">
						<button  class="button button5" id="btn_user"><?php
							if(!empty($_SESSION['username'])){
								$a = $_SESSION['username'];
								$user = "SELECT * FROM user WHERE username = '$a' ";
								$username = mysqli_query($db,$user);
								$rbongda = mysqli_fetch_array($username);?>
								<img src="<?php echo $rbongda["imageuser"]; ?>  " style="width:60px;height:60px;"class="rounded-circle" alt="Cinque Terre">
							<?php
							}
							else{
								?>
								<img src="/images/nulluser.jpg" style="width:60px;height:60px;"class="rounded-circle" alt="Cinque Terre">
							<?php
							}
							?>
						</button>
						
						<div style="display:none" id="btn_show" >
						<?php
							
							
							
							if(!empty($_SESSION['username'])){
								$a = $_SESSION['username'];
								$user = "SELECT * FROM user WHERE username = '$a' ";
								$username = mysqli_query($db,$user);
								$rbongda = mysqli_fetch_array($username);?>
								<p>Tên User: <?php echo $rbongda['username'];?></p>
								<a href="user/Logout.php" style="margin: 20px">Đăngxuất</a>
								<?php
							}else{
								?>
								<a href="user/login.php" style="margin: 20px">ĐăngNhập</a>
								<?php
							}
							?>
							
							
							
						</div>
					</div>
				</div>
			</div>	
			
		
       
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-bar" id="navbarSupportedContent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="material-icons">account_balance</i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<!----->
            <div class="collapse navbar-collapse menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" >BÓNG ĐÁ VIỆT NAM</a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/bongdaVLeaGue.php">V-LEAGUE</a>
                            </li>
							<!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">HẠNG NHẤT VIỆT NAM</a>
                            </li>
							-->
                            <li class="nav-item">

                                <a class="nav-link" href="/bongdaquocgia.php">ĐỘI TUYỂN QUỐC GIA</a>


                            </li>
							<!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">FUTSAL</a>
                            </li>
							-->
                            <li class="nav-item">

                                <a class="nav-link" href="/bongdanuqg.php">BÓNG ĐÁ NỮ</a>

                              
                            </li>
							<!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">CÁC ĐỘI TRẺ</a>
                            </li>
							-->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">BÓNG ĐÁ QUỐC TẾ</a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/bongdaAnh.php">BÓNG ĐÁ ANH</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/bongdaPhap.php">BÓNG ĐÁ PHÁP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bongdaTayBanNha.php">BÓNG ĐÁ TÂY BAN NHA</a>

                            </li>
                            
                            <li class="nav-item">

                                <a class="nav-link" href="/bongdaDuc.php">BÓNG ĐÁ ĐỨC</a>
                            </li>
							
                            <li class="nav-item">
                           
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bongdaC1.php">CHAMPION LEAGUE</a>
                            </li>
							<!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">EUROPA LEAGUE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">EURO 2020</a>
                            </li>
							-->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chuyennhuong.php">CHUYỂN NHƯỢNG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >BÓNG RỔ</a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/bongroNBA.php">NBA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bongroVBA.php">VBA</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/bongroABL.php">ABL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bongrok.php">CÁC GIẢI KHÁC</a>

                    
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quanvot.php">QUẦN VỢT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vothuat.php">VÕ THUẬT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEO</a>
                    </li>
                </ul>
				
                <form  action="/searchtintuc.php" method="post" class="form-inline my-2 my-lg-0">
                    <div class="input-group ml-sm-2 searchbox">
                        <input type="text" class="form-control" id="searchbox" name="txtsearch" placeholder="Tìm kiếm">

							<button type="submit" class="btn btn-info" name="btn_search">Tìm Kiếm</button>
                 
                    </div>
                </form>
            </div>
        </div>
    </nav>
    
</body>
</html>
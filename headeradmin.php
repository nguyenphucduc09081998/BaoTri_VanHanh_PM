<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS and javascript-->

		<!--  CSS -->
		
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesHeader.css">
    <link rel="stylesheet" href="css/hang-1.css">
    <link rel="stylesheet" href="css/stylesTrang1.css">
    <title>ADMIN</title>
	<style>
        .inside-content{
            padding-left:  15px;
            padding-right: 15px;
        }
        .panel:hover{
            border: 2px black solid;
        }
        .buttons{
            text-align: center;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div>
		<a href="/admin.php">
		 <div class="container">
            <img src="images/logo.png">
        </div>
		</a>
       
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-bar" id="navbarSupportedContent">
                <div class="container">

                    <div class="collapse navbar-collapse menu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/adminbongda.php">BÓNG ĐÁ</a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/insertbongda.php">Insert</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Edit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Delete</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/adminchuyennhuong.php">CHUYỂN NHƯỢNG</a>
                                <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/insertchuyennhuong.php">Insert</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/adminbongro.php">BÓNG RỔ</a>
                                <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/insertbongro.php">Insert</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/adminquanvot.php">QUẦN VỢT</a>
                                <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/insertquanvot.php">Insert</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/adminvothuat.php">VÕ THUẬT</a>
                                <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/insertvothuat.php">Insert</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                    </ul>
                            </li>
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">VIDEO</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="#">Insert</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="#">Edit</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="#">Delete</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="#">THÊM BÌNH CHỌN</a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/insertquestion.php">Insert</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Edit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Delete</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
    
</body>
</html>
<link rel="stylesheet" href="css/hang3.css">
<section class="duynguyen">
 <div class="container">
 
    <div class="row"> 
        <div class = "col-sm-6">
            <a href="#"><h3 class="border-bottom">Quần Vợt</h3></a>
            <ul class="list-unstyled">
			
				<?php
				$sqlquanvot = "SELECT * FROM tintucquanvot ORDER BY MaTinTucQuanVot DESC ";
				$quanvot = mysqli_query($db,$sqlquanvot);
				$rquanvot = mysqli_fetch_array($quanvot);
				$sqlquanvot1 = "SELECT * FROM tintucquanvot ORDER BY MaTinTucQuanVot DESC LIMIT 1, 7";
				$quanvot1 = mysqli_query($db,$sqlquanvot1);
				?>
                <li class="title_big">
                  <a href="#"><?php echo $rquanvot['TieuDeQuanVot'];?></a>
                </li>
                <li>
                  <div class="row">
                    <div class="col-sm-4">
                  <a href="#"><img class="img-fluid" src="<?php echo $rquanvot["ImageQuanVot"];?>" alt="hình pornhub">
                  </a></div>
                  <div class="col-sm-8">
                  <span class="small"><?php echo $rquanvot['PhuDeQuanVot'];?></span>
                  </div>
                </div>
                </li>
				<?php
				while($rbongro1 = mysqli_fetch_array($quanvot1))
				{	
				?>
					<li class="title_small" style="padding-top: 10px;">
						<a href="#"><image src="images/iconbaiviec.png" /><?php echo $rbongro1['TieuDeQuanVot'];?></a>
					</li>
				<?php
				}					
				?>

            </ul>
		</div>
          <!------------------------------------------------------------------------>
<div class = "col-sm-6">
            <a href="#"><h3 class="border-bottom">Thị Trường Chuyển Nhượng</h3></a>
            <ul class="list-unstyled">
			
				<?php
				$sqlttcn = "SELECT * FROM tintucchuyennhuong ORDER BY MaTinTucChuyenNhuong DESC ";
				$ttcn = mysqli_query($db,$sqlttcn);
				$rttcn = mysqli_fetch_array($ttcn);
				$sqlttcn1 = "SELECT * FROM tintucchuyennhuong ORDER BY MaTinTucChuyenNhuong DESC LIMIT 1, 7";
				$ttcn1 = mysqli_query($db,$sqlttcn1);
				?>
                <li class="title_big">
                  <a href="#"><?php echo $rttcn['TieuDeChuyenNhuong'];?></a>
                </li>
                <li>
                  <div class="row">
                    <div class="col-sm-4">
                  <a href="#"><img class="img-fluid" src="<?php echo $rttcn["ImageChuyenNhuong"];?>" alt="hình pornhub">
                  </a></div>
                  <div class="col-sm-8">
                  <span class="small"><?php echo $rttcn['PhuDeChuyenNhuong'];?></span>
                  </div>
                </div>
                </li>
				<?php
				while($rttcn1 = mysqli_fetch_array($ttcn))
				{	
				?>
					<li class="title_small" style="padding-top: 10px;">
						<a href="#"><image src="images/iconbaiviec.png" /><?php echo $rttcn1['TieuDeChuyenNhuong'];?></a>
					</li>
				<?php
				}					
				?>
  
            </ul>
		</div>
		
    </div>
	   
  </div>
</section>
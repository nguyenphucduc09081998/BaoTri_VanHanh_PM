search video
<link rel="stylesheet" href="css/video.css">
<section class="hieungo">
<div class="container">
        <div class="row">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="slide-box">
				  
				<?php
				$sqlvothuat = "SELECT * FROM tintucvothuat WHERE (`TieuDeVoThuat` LIKE '%".$search."%') ORDER BY MaTinTucvothuat DESC LIMIT 4";
				$vothuat = mysqli_query($db,$sqlvothuat);
		
				while($rvothuat = mysqli_fetch_array($vothuat)){
				?>
					<div class="newsbox">
							<a href="#">
								<img src="<?php echo $rvothuat["ImageVoThuat"];?>" style="width:270px; height:202px" alt="First slide" >
								<h4 class="aaa"><?php echo $rvothuat["TieuDeVoThuat"];?></h4>
							</a>
					  </div>
				<?php
				}
				?>
                  </div>          
              </div>
              <div class="carousel-item">             
                  <div class="slide-box">
						<?php
				$sqlvothuat = "SELECT * FROM tintucvothuat WHERE (`TieuDeVoThuat` LIKE '%".$search."%') ORDER BY MaTinTucvothuat DESC LIMIT 4,4";
				$vothuat = mysqli_query($db,$sqlvothuat);
		
				while($rvothuat = mysqli_fetch_array($vothuat)){
				?>
					<div class="newsbox">
							<a href="#">
								<img src="<?php echo $rvothuat["ImageVoThuat"];?>" 	style="width:270px; height:202px" alt="First slide" >
								<h4><?php echo $rvothuat["TieuDeVoThuat"];?></h4>
							</a>
					  </div>
				<?php
				}
				?>
                  </div>        
              </div>
			  
            </div>
			
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
</section>
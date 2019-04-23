
<link rel="stylesheet" href="css/hang1.css">
<div class="container">
    <div class="row my-3">
		<?php
		$sqlbongda = "SELECT * FROM tintucvothuat ORDER BY MaTinTucVoThuat DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		$rbongda = mysqli_fetch_array($bongda);
		?>
		
        <div class="col-12 col-sm-8 border-right">
            <div class="news">
                <a href="/tintucvothuat.php?MaTinTucVoThuat=<?php echo $rbongda["MaTinTucVoThuat"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongda["ImageVoThuat"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <h4 class="col-12 p-0 hoverable"><?php echo $rbongda['TieuDeVoThuat'];?></h4>
                        <span><?php echo $rbongda['PhuDeVoThuat'];?></span>
                    </div>
                </a>
            </div>
        </div>
		
		<?php
		
		$sqlbongro = "SELECT * FROM tintucvothuat ORDER BY MaTinTucVoThuat DESC LIMIT 1, 2";
		$bongro = mysqli_query($db,$sqlbongro);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
        <div class="col-12 col-sm-4">
		<?php
		while($rbongro = mysqli_fetch_array($bongro))
		{	
		?>
			<div class="news news-r">
                <a href="/tintucvothuat.php?MaTinTucVoThuat=<?php echo $rbongro["MaTinTucVoThuat"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongro["ImageVoThuat"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <b class="col-12 p-0 hoverable sub-title"><?php echo $rbongro['TieuDeVoThuat'];?></b>
                    </div>
                </a>
            </div>				
		<?php
		}					
		?>
	
        </div>	
    </div>

	 <div class="row">
		<?php
		
		$sqlvothuat = "SELECT * FROM tintucvothuat ORDER BY MaTinTucVoThuat DESC LIMIT 3, 4";
		$vothuat = mysqli_query($db,$sqlvothuat);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
       
		<?php
		while($rvothuat = mysqli_fetch_array($vothuat))
		{	
		?>
		<div class="col-12 col-sm-6">
            <a class="row no-color" href="/tintucvothuat.php?MaTinTucVoThuat=<?php echo $rvothuat["MaTinTucVoThuat"]; ?>">
                <h4 class="col-12"><?php echo $rvothuat['TieuDeVoThuat'];?></h4>
                <div class="col-12 col-sm-4">
                <div class="news-photo" style="background-image: url(<?php echo $rvothuat["ImageVoThuat"];?>)"></div>
                </div>
                <div class="col-12 col-sm-8">
                    <?php echo $rvothuat['PhuDeVoThuat'];?>
                </div>
            </a>
        </div>		
		<?php
		}					
		?>
    </div><!--close row-->
</div><!--close container-->




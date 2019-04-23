
<link rel="stylesheet" href="css/hang1.css">
<div class="container">
    <div class="row my-3">
		<?php
		$sqlbongda = "SELECT * FROM tintucbongro WHERE GiaiBongRo = 2 ORDER BY MaTinTucBongRo DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		$rbongda = mysqli_fetch_array($bongda);
		?>
		
        <div class="col-12 col-sm-8 border-right">
            <div class="news">
                <a href="/tintucbongro.php?MaTinTucBongRo=<?php echo $rbongda["MaTinTucBongRo"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongda["ImageBongRo"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <h4 class="col-12 p-0 hoverable"><?php echo $rbongda['TieuDeBongRa'];?></h4>
                        <span><?php echo $rbongda['PhuDeBongRo'];?></span>
                    </div>
                </a>
            </div>
        </div>
		
		<?php
		
		$sqlbongro = "SELECT * FROM tintucbongro WHERE GiaiBongRo = 2 ORDER BY MaTinTucBongRo DESC LIMIT 1, 2";
		$bongro = mysqli_query($db,$sqlbongro);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
        <div class="col-12 col-sm-4">
		<?php
		while($rbongro = mysqli_fetch_array($bongro))
		{	
		?>
			<div class="news news-r">
                <a href="/tintucbongro.php?MaTinTucBongRo=<?php echo $rbongro["MaTinTucBongRo"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongro["ImageBongRo"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <b class="col-12 p-0 hoverable sub-title"><?php echo $rbongro['TieuDeBongRo'];?></b>
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
		
		$sqlvothuat = "SELECT * FROM tintucbongro WHERE GiaiBongRo = 2 ORDER BY MaTinTucBongRo DESC LIMIT 3, 4";
		$vothuat = mysqli_query($db,$sqlvothuat);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
       
		<?php
		while($rvothuat = mysqli_fetch_array($vothuat))
		{	
		?>
		<div class="col-12 col-sm-6">
            <a class="row no-color" href="/tintucbongro.php?MaTinTucBongRo=<?php echo $rvothuat["MaTinTucBongRo"]; ?>">
                <h4 class="col-12"><?php echo $rvothuat['TieuDeBongRo'];?></h4>
                <div class="col-12 col-sm-4">
                <div class="news-photo" style="background-image: url(<?php echo $rvothuat["ImageBongRo"];?>)"></div>
                </div>
                <div class="col-12 col-sm-8">
                    <?php echo $rvothuat['PhuDeBongRo'];?>
                </div>
            </a>
        </div>		
		<?php
		}					
		?>
    </div><!--close row-->
</div><!--close container-->




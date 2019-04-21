
<link rel="stylesheet" href="css/hang1.css">
<div class="container">
    <div class="row my-3">
		<?php
		$sqlbongda = "SELECT * FROM tintucbongda WHERE KhuVucBongDa = 2 ORDER BY MaTinTucBongDa DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		$rbongda = mysqli_fetch_array($bongda);
		?>
		
        <div class="col-12 col-sm-8 border-right">
            <div class="news">
                <a href="/tintucbongda.php?MaTinTucBongDa=<?php echo $rbongda["MaTinTucBongDa"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongda["ImageBongDa"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <h4 class="col-12 p-0 hoverable"><?php echo $rbongda['TieuDeBongDa'];?></h4>
                        <span><?php echo $rbongda['PhuDeBongDa'];?></span>
                    </div>
                </a>
            </div>
        </div>
		
		<?php
		
		$sqlbongro = "SELECT * FROM tintucbongda WHERE KhuVucBongDa = 2 ORDER BY MaTinTucBongDa DESC LIMIT 1, 2";
		$bongro = mysqli_query($db,$sqlbongro);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
        <div class="col-12 col-sm-4">
		<?php
		while($rbongro = mysqli_fetch_array($bongro))
		{	
		?>
			<div class="news news-r">
                <a href="/tintucbongro.php?MaTinTucBongRo=<?php echo $rbongro["MaTinTucBongDa"];?>">
                    <div class="news-photo" style="background-image: url(<?php echo $rbongro["ImageBongDa"];?>)"></div>
                    <div class="news-title flex-column d-flex align-items-start justify-content-end">
                        <b class="col-12 p-0 hoverable sub-title"><?php echo $rbongro['TieuDeBongDa'];?></b>
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
		
		$sqlvothuat = "SELECT * FROM tintucbongda WHERE KhuVucBongDa = 2 ORDER BY MaTinTucBongDa DESC LIMIT 3, 4";
		$vothuat = mysqli_query($db,$sqlvothuat);
		//$rbongro = mysqli_fetch_array($bongro);
		?>
       
		<?php
		while($rvothuat = mysqli_fetch_array($vothuat))
		{	
		?>
		<div class="col-12 col-sm-6">
            <a class="row no-color" href="/tintucvothuat.php?MaTinTucVoThuat=<?php echo $rvothuat["MaTinTucBongDa"]; ?>">
                <h4 class="col-12"><?php echo $rvothuat['TieuDeBongDa'];?></h4>
                <div class="col-12 col-sm-4">
                <div class="news-photo" style="background-image: url(<?php echo $rvothuat["ImageBongDa"];?>)"></div>
                </div>
                <div class="col-12 col-sm-8">
                    <?php echo $rvothuat['PhuDeBongDa'];?>
                </div>
            </a>
        </div>		
		<?php
		}					
		?>
    </div><!--close row-->
</div><!--close container-->




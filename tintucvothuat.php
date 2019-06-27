<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucVoThuat = $_GET['MaTinTucVoThuat'];
		$sqlctbongda = "SELECT * FROM tintucvothuat WHERE MaTinTucVoThuat = $MaTinTucVoThuat";
		$ctbongda = mysqli_query($db,$sqlctbongda);
		$rctbongda = mysqli_fetch_array($ctbongda);
		?>
        <div class="col-12">
            <h1 class="tieu-de1">
				<?php echo $rctbongda['TieuDeVoThuat'];?>
               
            </h1>
            <div class="date-news ArticleDateTime"><?php echo $rctbongda['NgayDangVoThuat'];?></div>
            <h2 class="tieu-de2">
                <?php echo $rctbongda['PhuDeVoThuat'];?>
            </h2>
            <p><?php echo $rctbongda['ChiTietVoThuat'];?>
			</p>
            <img class="photo" src="<?php echo $rctbongda['ImageVoThuat'];?>">
            

        </div>
    </div>
</div>
<br/>
<?php
include('hang3.php');
?>
<br/>
<?php
include('footer.php');
?>
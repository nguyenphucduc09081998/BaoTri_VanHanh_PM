<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucBongRo = $_GET['MaTinTucBongRo'];
		var_dump("$MaTinTucBongRo");
		$sqlctbongda = "SELECT * FROM tintucbongro WHERE MaTinTucBongRo = $MaTinTucBongRo";
		$ctbongda = mysqli_query($db,$sqlctbongda);
		$rctbongda = mysqli_fetch_array($ctbongda);
		?>
        <div class="col-12">
            <h1 class="tieu-de1">
				<?php echo $rctbongda['TieuDeBongRo'];?>
               
            </h1>
            <div class="date-news ArticleDateTime"><?php echo $rctbongda['NgayDangBongRo'];?></div>
            <h2 class="tieu-de2">
                <?php echo $rctbongda['PhuDeBongRo'];?>
            </h2>
            <p><?php echo $rctbongda['ChiTietBongRo'];?>
			</p>
            <img class="photo" src="<?php echo $rctbongda['ImageBongRo'];?>">
            

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
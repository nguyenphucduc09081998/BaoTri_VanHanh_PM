<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucQuanVot = $_GET['MaTinTucQuanVot'];
		var_dump("$MaTinTucQuanVot");
		$sqlctbongda = "SELECT * FROM tintucquanvot WHERE MaTinTucQuanVot = $MaTinTucQuanVot";
		$ctbongda = mysqli_query($db,$sqlctbongda);
		$rctbongda = mysqli_fetch_array($ctbongda);
		?>
        <div class="col-12">
            <h1 class="tieu-de1">
				<?php echo $rctbongda['TieuDeQuanVot'];?>
               
            </h1>
            <div class="date-news ArticleDateTime"><?php echo $rctbongda['NgayDangQuanVot'];?></div>
            <h2 class="tieu-de2">
                <?php echo $rctbongda['PhuDeQuanVot'];?>
            </h2>
            <p><?php echo $rctbongda['ChiTietQuanVot'];?>
			</p>
            <img class="photo" src="<?php echo $rctbongda['ImageQuanVot'];?>">
            

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
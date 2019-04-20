<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucBongDaVLeague = $_GET['MaTinTucBongDaVLeague'];
		var_dump("$MaTinTucBongDaVLeague");
		$sqlctbongda = "SELECT * FROM tintucbongda WHERE MaTinTucBongDa = $MaTinTucBongDaVLeague";
		$ctbongda = mysqli_query($db,$sqlctbongda);
		$rctbongda = mysqli_fetch_array($ctbongda);
		?>
        <div class="col-12">
            <h1 class="tieu-de1">
				<?php echo $rctbongda['TieuDeBongDa'];?>
               
            </h1>
            <div class="date-news ArticleDateTime"><?php echo $rctbongda['NgayDangBongDa'];?></div>
            <h2 class="tieu-de2">
                <?php echo $rctbongda['PhuDeBongDa'];?>
            </h2>
            <p><?php echo $rctbongda['ChiTietBongDa'];?>
			</p>
            <img class="photo" src="<?php echo $rctbongda['ImageBongDa'];?>">
            

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
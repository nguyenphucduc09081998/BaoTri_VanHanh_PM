<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucChuyenNhuong = $_GET['MaTinTucChuyenNhuong'];
		var_dump("$MaTinTucChuyenNhuong");
		$sqlctbongda = "SELECT * FROM tintucchuyennhuong WHERE MaTinTucChuyenNhuong = $MaTinTucChuyenNhuong";
		$ctbongda = mysqli_query($db,$sqlctbongda);
		$rctbongda = mysqli_fetch_array($ctbongda);
		?>
        <div class="col-12">
            <h1 class="tieu-de1">
				<?php echo $rctbongda['TieuDeChuyenNhuong'];?>
               
            </h1>
            <div class="date-news ArticleDateTime"><?php echo $rctbongda['NgayDangChuyenNhuong'];?></div>
            <h2 class="tieu-de2">
                <?php echo $rctbongda['PhuDeChuyenNhuong'];?>
            </h2>
            <p><?php echo $rctbongda['ChiTietChuyenNhuong'];?>
			</p>
            <img class="photo" src="<?php echo $rctbongda['ImageChuyenNhuong'];?>">
            

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
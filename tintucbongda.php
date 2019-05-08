<?php
include('header.php');
?>
<br/>
<div class="container">
    <div class="row my-3">
		<?php
		$MaTinTucBongDa = $_GET['MaTinTucBongDa'];
		var_dump("$MaTinTucBongDa");
		$sqlctbongda = "SELECT * FROM tintucbongda WHERE MaTinTucBongDa = $MaTinTucBongDa";
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
			<?php
				if(!empty($rctbongda['VideoBongDa']))
				{?>
			<br/>
					<video width="1100" height="600" controls>
						<source src="<?php echo $rctbongda['VideoBongDa'];?>" type="video/mp4" >
 
						Your browser does not support HTML5 video.
					</video>
					<br/>
				<?php
				}
			?>
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
<?php
include('comment/showcomment.php');
?>
<?php
include('comment/comment.php');
?>
<br/>
<?php
include('footer.php');
?>
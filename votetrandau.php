<br/><br/><br/>
<?php
include ('servervote.php');
include('connect.php');
		$sqlbongda = "SELECT * FROM tiletrandau ORDER BY MaTiLeTranDau DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		$rbongda = mysqli_fetch_array($bongda);
?>
<div class="container">
            <form class="border border-success" method="POST" enctype="multipart/form-data">      
                    <div class="form-group">
                        <header class="bg-success text-center" > bình chọn kết quả giữa <?php  echo  $rbongda["Doi1"]; ?> và <?php echo $rbongda["Doi2"];?></header>
                    </div>
					
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" id="Radios1" value="1" onclick="">
                        <label class="form-check-label" for="Radios1">
                          <?php echo $rbongda["Doi1"];?> thắng
                        </label>
                    </div>
					
					<div class="form-check">
                        <input class="form-check-input" type="radio"  name="radio2" id="Radios2" value="2" onclick="">
                        <label class="form-check-label" for="Radios2">
                          <?php echo $rbongda["Doi2"];?> thắng
                        </label>
                    </div>
					
					<div class="form-check">
					
                        <input class="form-check-input" type="radio" name="radio3" id="Radios3" value="3" onclick="">
                        <label class="form-check-label" for="Radios3">
                         2 đội hòa
                        </label>
                    </div>
					
                      <button type="submit" class="btn btn-success" name="vote" >Bình chọn</button>
                      <button type="button" class="btn btn-link">Xem kết quả</button>
            </form>


           
    </div>
<br/>
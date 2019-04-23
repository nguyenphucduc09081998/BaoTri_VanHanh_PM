<br/><br/><br/>
<?php
include('connect.php');
		$sqlbongda = "SELECT * FROM tiletrandau ORDER BY MaTiLeTranDau DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		$rbongda = mysqli_fetch_array($bongda);
?>
<div class="container">
            <form class="border border-success">      
                    <div class="form-group">
                        <header class="bg-success text-center"> bình chọn kết quả giữa <?php echo $rbongda["Doi1"];?> và <?php echo $rbongda["Doi2"];?></header>
                    </div>
					
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="Radios1" value="option1" onclick="">
                        <label class="form-check-label" for="Radios1">
                          <?php echo $rbongda["Doi1"];?> thắng
                        </label>
                    </div>
					
					<div class="form-check">
                        <input class="form-check-input" type="radio"  name="radio" id="Radios2" value="option2" onclick="">
                        <label class="form-check-label" for="Radios2">
                          <?php echo $rbongda["Doi2"];?> thắng
                        </label>
                    </div>
					
					<div class="form-check">
					
                        <input class="form-check-input" type="radio" name="radio" id="Radios3" value="option3" onclick="">
                        <label class="form-check-label" for="Radios3">
                         2 đội hòa
                        </label>
                    </div>
					
                      <button type="button" class="btn btn-success">Bình chọn</button>
                      <button type="button" class="btn btn-link">Xem kết quả</button>
            </form>


           
    </div>
<br/>
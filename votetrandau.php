<br/><br/><br/>
<?php
include ('servervote.php');
include('connect.php');
		$sqlbongda = "SELECT * FROM question ORDER BY qid DESC";
		$bongda = mysqli_query($db,$sqlbongda);
		//$rbongda = mysqli_fetch_array($bongda);
		//$matiletrandau = $rbongda["MaTiLeTranDau"];
		//var_dump($matiletrandau);
		//$_SESSION['matiletrandau'] = $matiletrandau;
		if(mysqli_num_rows($bongda) > 0){
			//var_dump('dsdssd');
			$row=mysqli_fetch_array($bongda);
			$qid=$row["qid"];
			//var_dump($qid);?>
		<div class="container">
            <form class="border border-success" method="POST" enctype="multipart/form-data">      
                    <div class="form-group">
                        <header class="bg-success text-center" > <h2><?php echo $row["qtitle"]?></h2></header>
						
                    </div>
					<?php
					
					$sqlbongro = "select * from answer where qid='$qid' order by aid";
					$bongro = mysqli_query($db,$sqlbongro);
					?>
					<h1 color="red"><?php include('errors.php'); ?></h1>
					<?php
					while($rbongro = mysqli_fetch_array($bongro)){
						
						//$_SESSION['aid'] = $rbongro["aid"];
						?>
						
						<div class="form-check">
						
						<input type="checkbox" name="radio1" value="<?php echo $rbongro["aid"];?>">
                   
                        <label class="form-check-label" for="Radios1">
                          <?php echo $rbongro["atitle"];?> 
                        </label>
                    </div>

						<?php

					}
					?>

                    <button type="submit" class="btn btn-success" name="vote" >Bình chọn</button>
                    <a href="/result_vote.php?idresult_vote=<?php echo $qid;?>"><button type="button" class="btn btn-link">Xem kết quả</button></a>
            </form>


           
    </div>
				
		<?php		
		}
		
?>

<br/>
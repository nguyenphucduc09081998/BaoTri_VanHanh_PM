<?php
include('headeradmin.php');
?>
<br/><br/>
	<div class="container">    
        <div class="row">
	<?php
	include('connect.php');
		$sqlbongda = "SELECT * FROM tintucchuyennhuong ORDER BY MaTinTucChuyenNhuong DESC LIMIT 9";
		$bongda = mysqli_query($db,$sqlbongda);
		while($rbongda = mysqli_fetch_array($bongda))
		{	
		?>
			<div class="col-sm-4">
                <div class="panel panel-primary">      
                    <div class="panel-body"><img src="<?php echo $rbongda["ImageChuyenNhuong"];?>" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="inside-content">
                        <h3><?php echo $rbongda["TieuDeChuyenNhuong"];?></h3>
                        
                    </div>   
                    <div class="buttons">
                        <button type="button" class="btn btn-primary">Insert</button>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>     
                </div>
			</div>	
		<?php
		}					
		?>     
		</div>
    </div>
<br/><br/><br/><br/>

            
           
   
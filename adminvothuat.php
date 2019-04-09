<?php
include('headeradmin.php');
?>
<br/><br/>
	<div class="container">    
		<h1>Quan Ly Tin Tuc Vo Thuat</h1>
        <div class="row">
	
	<?php
	include('connect.php');
		$sqlbongda = "SELECT * FROM tintucvothuat ORDER BY MaTinTucVoThuat DESC ";
		$bongda = mysqli_query($db,$sqlbongda);
		while($rbongda = mysqli_fetch_array($bongda))
		{	
		?>
			<div class="col-sm-4">
                <div class="panel panel-primary">      
                    <div class="panel-body"><img src="<?php echo $rbongda["ImageVoThuat"];?>" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="inside-content">
                        <h3><?php echo $rbongda["TieuDeVoThuat"];?></h3>
                        
                    </div>   
                    <div class="buttons">
                        
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger"><a href="/deletetintucvothuat.php?deletetintucvothuat=<?php echo $rbongda['MaTinTucVoThuat'];?>">Delete</a></button>
                    </div>     
                </div>
			</div>	
		<?php
		}					
		?>     
		</div>
    </div>
<br/><br/><br/><br/>

            
           
   
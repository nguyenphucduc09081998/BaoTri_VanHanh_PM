<?php
include('headeradmin.php');
?>
<br/><br/>
	<div class="container">    
	<h1>Quan Ly Tin Tuc Quan Vot</h1>
        <div class="row">
		
	<?php
	include('connect.php');
		$sqlbongda = "SELECT * FROM tintucquanvot ORDER BY MaTinTucQuanVot DESC ";
		$bongda = mysqli_query($db,$sqlbongda);
		while($rbongda = mysqli_fetch_array($bongda))
		{	
		?>
			<div class="col-sm-4">
                <div class="panel panel-primary">      
                    <div class="panel-body"><img src="<?php echo $rbongda["ImageQuanVot"];?>" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="inside-content">
                        <h3><?php echo $rbongda["TieuDeQuanVot"];?></h3>
                        
                    </div>   
                    <div class="buttons">
                        
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger"><a href="/deletetintucquanvot.php?deletetintucquanvot=<?php echo $rbongda['MaTinTucQuanVot'];?>">Delete</a></button>
                    </div>     
                </div>
			</div>	
		<?php
		}					
		?>     
		</div>
    </div>
<br/><br/><br/><br/>

            
           
   
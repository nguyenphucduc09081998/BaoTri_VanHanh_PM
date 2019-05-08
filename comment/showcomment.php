<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/adminlte.min.css">
</head><br/>
<body class="hold-tansition sidebr-mini" >
<div class="wraper" style="background:#f4f6f9;">

 <?php
 	include('connect.php');	
	$sql = "SELECT * FROM comment ORDER BY Macomment DESC LIMIT 5";
	$sqlq = mysqli_query($db,$sql);

 ?>
  <div class="content-wrapper " >
 
    <section class="conent">
      <div class="container-luid">
  
        <div class="row" >
          <!-- Left col -->
          <section class="col-lg-7 conetedSortable">         
            <div class="cad dirct-chat iret-chat-primary">
              
              <div class="card-body">
                <div class="direct-chat-mssages">
                 <?php
				 while($row = mysqli_fetch_array($sqlq)){
					 $userrr = $row['username'];
					 
					 ?>
					 <br/>
					 <div class="direc-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-ame float-left" style="color:red;">User: <?php echo $row['username'];?></span>
                     <!--  <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>-->
                    </div>
                    <!-- /.direct-chat-info -->
					<?php
					$a = "SELECT * FROM user WHERE username ='$userrr'";
					$sqlqsda = mysqli_query($db,$a);
					$rowa = mysqli_fetch_array($sqlqsda)
					?>
                    <img class="direct-chat-img" src="<?php echo $rowa['imageuser'];?>" alt="image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $row['Discomment'];?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
					 <?php
				 }
				 ?>
                 
				  

                  </div>
              
                </div>
               
              </div>
              </div>
             
            </div>
            
          </section>
     
        </div>
       
      </div>
    </section>
 
  </div>

</div>
</body>
</html>

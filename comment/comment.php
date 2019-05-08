<!DOCTYPE html>
<html>
<head>
 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
 
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transitin sidebar-mini">
<div class="apper">
  <!-- Navbar -->
 
  <?php
   include ('sercomment.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="conent-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="container">
      <div class="container-fuid">
        <div class="row">
        
          <div class="col-md-6">
            <div class="ard cad-warning">    
              <!-- /.card-header -->
              <div class="car-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-grou has-sucess">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Comment</label>
					<div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="comment ..." name="texcomment" required>
				  <span class="input-group-append">
				  
                    <button type="submit" class="btn btn-info btn-flat" name="comment">comment</button>
                  </span>
                </div>
				
                </form>
              </div>
             
            </div>
           
          </div>
         
        </div>
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>

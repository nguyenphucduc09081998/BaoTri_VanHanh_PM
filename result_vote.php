<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
    <title>Result Vote</title>
</head>

<body>
    <?php
include('connect.php');
$a = $_GET['idresult_vote'];
$sql="select * from question where qid= '$a'";
$query= mysqli_query($db,$sql);
	$row=mysqli_fetch_array($query);?>
	<h2><?php echo $row['qtitle'];?></h2>
	<?php
	$sql2="select qid, SUM(acount) as total from answer group by qid having qid='$a'";
	$query2= mysqli_query($db,$sql2);
	$row2=mysqli_fetch_array($query2);
	$total=$row2['total'];
	//echo $total;
	
	$sql3="select * from answer where qid='".$a."' order by aid";
	$query3=mysqli_query($db,$sql3);?><?php
	if(mysqli_num_rows($query3) > 0)
	{
		while($row3=mysqli_fetch_array($query3))
		{
			//echo $row3['acount'];
			 $percent = ($row3['acount']/$total)*100;
			?>
			<h5> <?php echo $row3['atitle'];?> Số phiếu: <?php echo $row3['acount'];?> Chiếm: <?php echo $percent;?>%</h5>
		<?php
		}
	}
?>
</body>

</html>
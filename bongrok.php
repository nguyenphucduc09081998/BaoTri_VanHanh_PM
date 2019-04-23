
<?php
include('header.php');
?>
<br/>
<link rel="stylesheet" href="css/stylesDoAn.css">

<?php
include('br-k.php');
?>
<br/>
<?php
include('video.php');
?><br/><br/>
<?php
include('hang3.php');
?>
<br/>
<?php
include('footer.php');
?>
<div class="col-md-1 pull-right" style="">
	
		<button onclick="topFunction()" id="backtotop" title="Go to top" >
			<img src="/images/icons8-up-64.png" width="20" height="20">
		</button>	
	</div>
	
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("backtotop").style.display = "block";
    } else {
        document.getElementById("backtotop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

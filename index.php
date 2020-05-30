<html>
	<head>
	<title>SHOW ROOM</title>
	<link rel="stylesheet" type="text/css" href="cssindex.css"/>
	</head>
	
	<body>
		<?php include 'navheader.php'; ?>
		<div id="HOMEall">	

			<div id="HOMEcenter" NAME="HOMEcenter">
				
			<img class="mySlides" src="images/porscheBG.jpg" style="width:100%;height:100%; display:none">
            <img class="mySlides" src="images/benz2.jpg" style="width:100%;height:100%; display:none">
            <img class="mySlides" src="images/benz1.jpg" style="width:100%;height:100%; display:none">
            <img class="mySlides" src="images/lkjhg.jpg" style="width:100%;height:100%; display:none">
            <img class="mySlides" src="images/2017-C-CABRIOLET-HOMEPAGE-D.jpg" style="width:100%;height:100%; display:none">
            <img class="mySlides" src="images/porsche911.jpg" style="width:100%;height:100%; display:none">

			</div>
			
			<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
    }
            </script>
			
					

         <?php include'footer.php'; ?>

		</div>
		
	</body>
</html>


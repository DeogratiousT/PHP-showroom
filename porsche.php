<html>
	<head>

		<link rel="stylesheet" type="text/css" href="cssindex.css">

		<title>PORSCHE</title>
		<style>
					#all1
			{
				width:100%;
				height:100%;
				
			}
			
			#top
			{
				width:100%;
				height:20%;
				text-align:center;
				float:left;
				font:Times-New-Rroman;
				
			}
			
			#top1
			{
				width:40%;
				hight:100%;
				float:left;
			}
			
			#top1 h1
			{
				text-align:center;
				padding:27 0 0 14;
			}
		
			
			#top2
			{
				width:60%;
				height:100%;
				float:left;
			}
			
			#top2 img
			{
				float:left;
				width:30%;
				height:100%;
				padding:0px;
			}
			
			
			#middle
			{
				width:100%;
				height:80%;
				float:left;
				background-color:#A52A35;
				background-image:url(canvas.png);
			    background-repeat:no-repeat;
			    background-position:center;
			    max-width:100%;
				
			}
			
			
			 *
            {
	        margin:0px;
	        padding:3 0 0 0;
	        text-decoration:none;
            }

        #middle ul 
           {
	       text-align:center;
	       font-family:corsiva;
	       font-size:20px;
	       color:#000000;
           }
        #middle ul li
           {
	       width:120px;
	       height:40px;
	       float:left;
	       height-line:50px;
	       display:inline;
	       padding:12 2 2 2 ;
           }
           
         #middle ul li:hover
         {
			 color:#A52A2A#;
		 }
		 
		 a:link,a:visited{
         color:#A52A2A;

         }
            a:hover,a:active{
			background-color:#A52A2A;
            color:#ffffff;
             
        }
        #middle ul ul
           {
       	   display:none;
           }
        #middle ul ul li
           {
           position:relative;
           margin:0px;
           padding:0px;
           }
        #middle ul li:hover > ul
           {
	       display:block;
	       }
	       
	       #middle img
	       {
			   float:left;
		   }
		   
		   
		   
	       #all2
	       {
			   width:100%;
			   height:160%;
			   float:left;
		   }
	       
	       
	        #cont1a
	        {
				height:50%;
				width:50%;
				float:left;
		
	
			}
			
			  #cont1b
	        {
				height:50%;
				width:50%;
				float:left;
				background-color:#A52A2A;
	
			}
			
			#cont2a
	        {
				height:50%;
				width:50%;
				float:left;
				
			}
			
			#cont2b
	        {
				height:50%;
				width:50%;
				float:left;
				background-color:#A52A2A;
			}
			
			#contEvents
	        {
				height:30%;
				width:100%;
				float:left;
				background-color:#A52A35;
			}
			
			#contEvents img
			{
				width:50%;
				height:80%;
				float:left;
				clear:both;
			}
			
			#contAbout
	        {
				height:30%;
				width:100%;
				float:left;
				
			}
	
		</style>
	</head>
	
	<body>
		<div id="all1">

		<?php include 'navheader.php'; ?>

		<div id="top">
			<div id="top1"><h1>PORSCHE</h1></div>
			<div id="top2"><img src="Porsche-logo.jpg"></div>
		</div>	
			<div id="middle">
		<p> <ul>
            <li><a href="..\HOME\index.html">HOME</a></li>
		    <li style="color:#cf5c3f">MODELS
                <ul>    
		            <li><a href="#911">911 BOXSTER</a></li>
                    <li><a href="#canvas">CANVAS</a></li>
                </ul>
            </li>
            <li><a href="#contEvent">EVENTS</a> </li>
            <li><a href="#about">ABOUT</a></li>
           
       </ul> </p></br></br></br>
       
       </div>
       
		
		</div>
      
       
      <div id="all2">
       <div id="cont1a">
		   <p style="text-align:center; font-size:200%"><a name="911"><b>911 BOXSTER</b></a></p></br>
		   <p><img src="..\images\718 boxster.jpg" width="100%" height="71%"/></p>
	   </div>
       <div id="cont1b">
		   		   <p style="text-align:center;color:#FFFFFF; font-size:200%"><br><br><br><b>PORSCHE FOXSTER 911</b></p><br>
		           <p style="text-align:center; font-size:150%;color:#FFFFFF">POWER  -90hp [80kW] / 4400rmp [1]</br>
			Acceleration  -11.3 mph (s)</br>
			Kerb weight [1300kg] 2</br>
			Total displacement  1465 cc</p>
       </div>
       <hr/>
       
       <div id="cont2a">
		   <p style="text-align:center; font-size:200%"><a name="canvas"><b>CANVAS</b></a></p>
		    <p><img src="..\images\porsche-thumbwhite.jpg" width="100%" height="84%"/></p>
	   </div>
       <div id="cont2b">
		   		   <p style="text-align:center;color:#FFFFFF; font-size:200%"><br><br><br><b>PORSCHE CANVAS</b></p><br>
		   		   <p style="text-align:center; font-size:150%;color:#FFFFFF">POWER  -90hp [80kW] / 4400rmp [1]</br>
			Acceleration  -11.3 mph (s)</br>
			Kerb weight [1300kg] 2</br>
			Total displacement  1465 cc</p>
	   </div>
      
       <div id="contEvents">
		   <p style="text-align:center; font-size:200%; color:#ffffff"><a name="contEvent"><b>EVENTS</b></a></p>
		   <p><img src="..\images\AQAWSEDFXG.jpg"></p>
		   <p style="text-align:center;color:#FFFFFF; font-size:200%"><br>SPORTS DAY</b><br>
		   Big big day ahead.<br> 
		   For all competent Porsche drivers<br>
		   A great day for you to prove your prowess<br>
		   15th-17th July 2017 at the Porsche center<br>
		   </p>
       </div>
       <div id="contAbout">
		   <p style="text-align:center; font-size:200%; color:#000000"><a name="about"><b>ABOUT US</b></a></p>
		   		   <p style="text-align:center;color:#000000; font-size:200%"><br><br>
		   		   WE MAJORLY DEAL WITH AVERTISING PORSCHE PRODUCTS.<br>
		   		   WE ALSO GIVE ALL UPDATES AND EVENTS INVOLVING PORSCHE CAR MODELS.<br>
		   		   FOR MORE DETAILS , <a href="..\HOME\index.html">CONTACT US</a> </p><br><br>
	   </div>
    </div>


    <?php include'footer.php'; ?>

	</body>
</html>


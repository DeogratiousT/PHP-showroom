<html>
	<head>
		<title>Audi</title>
		<link rel="stylesheet" type="text/css" href="cssindex.css">
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
			
			
			#top img
			{
				width:20%;
				height:58%;
				
			}
			
			#middle
			{
				width:100%;
				height:80%;
				float:left;
				background-color:#A52A35;
				background-image:url(3.jpg);
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
			 color:#ffffff;
		 }
		 
		 a:link,a:visited{
         color:#cf5c3f;

         }
            a:hover,a:active{
            background-color:#cf5c3f;
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
				background-color:blue;
	
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
				background-color:red;
			}
			
			#contEvents
	        {
				height:30%;
				width:100%;
				float:left;
				background-color:#A52A35;
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
			    <p><h1>AUDI</h1></p>
			    <p><img src="Alogo.jpg"></p>
		</div>	
			<div id="middle">
		<p> <ul>
            <li><a href="..\HOME\index.html">HOME</a></li>
		    <li style="color:#cf5c3f">MODELS
                <ul>    
		            <li><a href="#benz 1">BENZ 1</a></li>
                    <li><a href="#benz 2">BENZ 2</a></li>
                </ul>
            </li>
            <li><a href="#contEvent">EVENTS</a></li>
            <li><a href="#about">ABOUT</a></li>
           
       </ul> </p></br></br></br>
       
       </div>
       
		
		</div>
      
       
      <div id="all2">
       <div id="cont1a">
		   <p style="text-align:center; font-size:200%"><a name="benz 1"><b>Benz 1</b></a></p></br>
		   <p><img src="..\images\bnz.jpg" width="100%" height="71%"/></p>
	   </div>
       <div id="cont1b">
		   <p>ylgbvhbzv jbxjvj czn</p>
       </div>
       
       <div id="cont2a">
		   <p style="text-align:center; font-size:200%"><a name="benz 2"><b>Benz 2</b></a></p>
		    <p><img src="..\images\bnz2.png" width="100%" height="84%"/></p>
	   </div>
       <div id="cont2b">
		   <p style="padding:8%">ylgbvhbzv jbxjvj czn u;</br>huwrhguv\jnjnn </br>mvn xzc;sh;cnj;n;z</br>qc nfj;a xj;zsng</br>cjqn;uhgcv.</p>
       </div>
      
       <div id="contEvents">
		   <p style="text-align:center; font-size:200%; color:#ffffff"><a name="contEvent"><b>EVENTS</b></a></p>
		   <p style="color:#ffffff; text-align:center">hakgcyqvsykqgyl\g lhfa,bcjbvuah</p>
       </div>
       <div id="contAbout">
		   <p style="text-align:center; font-size:200%; color:#000000"><a name="about"><b>ABOUT US</b></a></p>
		   <p style="text-align:center; color:#000000"> kyrabhgblhdsbvauqrjabv</p>
	   </div>
    </div>


<?php include'footer.php'; ?>

	</body>
</html>

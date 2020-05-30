<html>
	<head>

		<link rel="stylesheet" type="text/css" href="cssindex.css">

		<title>SHOW ROOM SIGN IN</title>
		<style>
			#all
			{
				width:100%;
				height:100%;
				border-radius:15px;
				background-color:#ADE6E5;
				
			}
			
			ab
			{ 
				text-align:center;
				
			}
			
		</style>
	</head>
	
	<body>
		<div id="all">
			<?php include 'navheader.php'; ?>
			</br></br></br></br></br></br></br>
		<table border="1px" cellspacing="5px" align="center">
			<tr>
				<th style="font-size:200%;padding:10px">SHOW ROOM USER ACCOUNT</th>
			</tr>
			<tr>
				<td style="font-size:150%;padding:20px;text-align:center">Enter user details to log in</br>
				    <input type="text" name="login" placeholder="Enter  Adm no" required autocomplete="off" maxlength="15" size="15"></input><br/>
                    <input type="password" name="password"placeholder="Enter password" required autocomplete="off"maxlength="10" size="15"></input><br/> 
                    <input type="submit" name="submit" value="LOGIN" style="background-color: #FFFFFF"></input>
                </td>
			</tr>
			<tr>
			<th style="font-size:150%;padding:25px">Don`t have a User Account <a href="signup.php">Create Account</a></th></tr>
			    <tr style="border:0px; text-align:center;cellpadding:10px;"><td border="0px"><ul style="list-style:none" >
			<li><a href="..\HOME\index.html">HOME</a></li>
		</ul>
		</td></tr>
		
		
		</table>
             
		</div>

		<?php include'footer.php'; ?>
	</body>
</html>

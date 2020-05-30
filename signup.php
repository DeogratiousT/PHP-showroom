<!DOCTYPE>
<html>
<head>
	<title>SHOW ROOM SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="cssindex.css">
</head>


<body>

	<?php include 'navheader.php'; ?>

	<br><br><br><br><br>	
<table border="1px" cellpadding="2px" align="center" cellspacing="5px" width="60%">
<tr>
    <th>
        <h1>SHOW ROOM</h1><br/>
        <u>SIGN-UP BY ENETERING YOUR DETAILS</u>
    </th>
</tr>
<br>
  <tr>
    <td>
    Already registerd?<ul style="list-style:none;float:center" >
			<li><a href="..\SIGN IN\SignIn.html">LOG IN</a></li>
		</ul>
    <hr>
 <table border="0px">
	 <tr>
		 <td>First name:</td>
		 <td><input type="text" name="firstname" placeholder="First name" required></input>
	 </tr>
	 <tr>
		 <td>Last Name :</td>
		 <td><input type="text" name="lastname" placeholder="Last name" required></input></td>
	 </tr>
	 <tr>
		 <td>Admission number:</td>
		 <td><input type="text" name="lastname" placeholder="0000/2016" required></input></td>
	 </tr>
	 <tr>
		 <td>Email adress:</td>
		 <td><input type="email" name="email"  placeholder="email" required></input></td>
	 </tr>
	 <tr>
		 <td>Password:</td>
		 <td><input type="password" placeholder="password"  required></td>
	 </tr>
	 <tr>
		 <td>Phone:</td>
		 <td><input type="text" name="telno" placeholder="telephone number"></td>
	 </tr>
	 <tr>
		 <td>Id number:</td>
		 <td><input type="text" name="id number"placeholder="id number"></td>
	 </tr>
 </table>   
    <hr>
    <input type="submit" value="submit" style="background-color: green">
    <ul style="list-style:none;float:center" >
			<li><a href="..\HOME\index.html">HOME</a></li>
		</ul>

    </td>
    </tr>
     
</table>


<?php include'footer.php'; ?>
</body>
</html> 



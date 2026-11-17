<!DOCTYPE html>
<html>
	


<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<?php include('header.php');?>


<body bgcolor="agba(12,f,f,0.6)">
	
	<center>
<div id="container">
	<form action="Logincon.php" method="post">
		<h1 style="font-size:50px; color:bolder">LOGIN</h1>
	<label>Username:</label>
	<input type="text" name="Username" required="Username"><br><br><br>
	<label>Password:</label>
	<input type="Password" name="Password" required="Password"><br><br><br>
	<label style="float:left; margin-left:17px;margin-right:-190px;">Usertype:</label>	
		<select name="usertype" style="font-weight: bolder;size:15px; height:40px;width:130px;">
		<option value="STUDENT" selected="selected" ><strong>STUDENT</strong></option>
		<option value="LECTURER"><strong>LECTURER</strong></option>
		<option value="ADMIN"><strong>ADMIN</strong></option>
	</select>
	<br><br><br>

	<button type="submit" name="submit" id="bot" style="margin-top:-50PX;">submit</button>

	</form>
</center>
	</body>


	
	
</html>
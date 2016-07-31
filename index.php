<html>
<?php
include 'config.php';



<head>
	<title> Vorlage </title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>


<form action="register.php" method="POST">
	Username: <input type="text" name="user"/></br>
	Password: <input type="text" name="pwd"/></br>
	Email: <input type="email" name="mail"/></br>
	<input type="submit" value="Sign Up"/>
	<input type="checkbox" name="vehicle1" value="Bike"> Lizenzbedingungen <br>
</form>
<br>



</body>
</html>
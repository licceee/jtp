<html>
<head>
	<title> Vorlage </title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jtp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
		else
			echo "Connected";
		if	(ISSET($_POST["user"]) && ! empty($_POST["user"]))
			$user = $_POST["user"];
		else
			echo "Unknown user";
		if	(ISSET($_POST["pwd"]) && ! empty($_POST["pwd"]))
			$password = $_POST["pwd"];
		else
			echo "Unknown user";

	$sql = "insert into t_user (user, pwd)
			values ('".$user."', '".$password."');";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>

<h3><a href="index.php">Back</a></h3>

</body>
</html>





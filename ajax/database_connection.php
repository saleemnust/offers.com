<?php
// establishing the MySQLi connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chaos";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		if (mysqli_connect_errno())
		{
    		die("Connection failed: " . $conn->connect_error);
		}
		else{
			//echo "database connection established";
			//$name_query = "SELECT f_name FROM logindata where f_name = 'fahad'";
			//$name_value = $conn->query($name_query);
			//$row = mysqli_fetch_assoc($name_value);
			//$p_name = $row['s_name'];
			//echo $p_name;
		}
?>

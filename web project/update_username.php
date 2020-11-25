<?php

function Update_UsernameJson_file()
{
	include 'database_connection.php';
	$query = "select * from verified_user";
	$result = $conn->query($query);

	$fp = fopen('username.json', 'w+');
	$array =  array();
	while ($row = mysqli_fetch_array($result)) 
	{
		$email = $row['email'];
		array_push($array, $email);
	}
	fwrite($fp, json_encode(array("email_address"=>$array)));
}
?>
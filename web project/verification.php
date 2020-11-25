<?php
session_start();
include 'database_connection.php';
include 'update_username.php';
include 'sendMail.php';

if(isset($_POST['get_started']))
{
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$code=substr(md5(mt_rand()),0,15);
	$insert_query="insert into verify (email,password,code) values('$email', '$pass','$code')";
	$insert_value = $conn->query($insert_query);

	$db_id=mysqli_insert_id($conn);

	$message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For Talkerscode.com";
    $from = 'your email';
    $body="Your Activation Code is $code. Please <a href=http://localhost/Projects/web-latest/web%20project/verification.php?id=$db_id&code=$code >Click here!</a> to activate your account.";
    $headers = "From:".$from;
    //sendEmail($email,$body,$headers);

	echo "An Activation Code Is Sent To You Check You Emails";
}
$_GET['code']=$code;
echo $_GET['code'];

if(isset($_GET['code']))
{
	//echo "after vereification";
	//$id=$_GET['id'];
	$code=$_GET['code'];
	//echo $id." ".$code;
	//$delete="delete from verified_user where code='$code'";
	//$delete_query_execute = $conn->query($delete);
	$select="select * from verify where code='$code'";
	$select_value = $conn->query($select);
	//echo mysqli_num_rows($select_value);
	if(mysqli_num_rows($select_value)==1)
	{
		while($row=mysqli_fetch_array($select_value))
		{
			$email=$row['email'];
			$password=$row['password'];
			$code=$row['code'];
		}

		$insert_user="insert into verified_user(user_id, fname, lname, email, password ) values('','$fname','$lname','$email', '$password')";
		$insert_query_execute = $conn->query($insert_user);
	    $delete="delete from verify where code='$code'" or mysqli_error();
		$delete_query_execute = $conn->query($delete);
		// to update usernames in the json files
		Update_UsernameJson_file();

		header("Location: http://localhost/web%20project/web-latest/web%20project/index.php"); /* Redirect browser */
		exit();
	}
	else
	{
		echo "You already have an account";
	}
}

?>

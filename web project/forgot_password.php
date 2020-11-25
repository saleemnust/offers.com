<!DOCTYPE html>
<html>
<head>
	<title>forgot password</title>
</head>
<body>
<form action="forgot_password.php" method="post">
<center>
	<h3>Please enter your valid email address here!</h3>
	<!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required-->
    <input type="email" autocomplete="on" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required><br><br>
    <button style="background-color: pink" name="forgot_pass_button">Send Password</button>
</center>
</form>
<?php
include 'database_connection.php';
include 'sendMail.php';
if(isset($_POST['forgot_pass_button'])){
$email_address = $_POST['email'];
//echo $email_address;
$query="select password from verify join verified_user on verify.email = verified_user.email where verified_user.email='$email_address'";
$result = $conn->query($query);
$row=mysqli_fetch_assoc($result);
//echo $row['password'];
$pass = $row['password'];

$from = "chaosknight751@gmail.com";
$headers = "From:".$from;
$body = "
Detail of your form that you have filled are as follows.<br>
<table width='600' border='1'>
<tr bgcolor='#0099FF'>
      <td>Email Address</td><br>
      <td>$email_address </td>
  </tr>
  <tr bgcolor='#0099FF'>
      <td>Password</td><br>
      <td>$pass</td>
  </tr>
   </table>
 	 Please <a href=http://localhost/Web%20project/web%20project/login.php >Click here to go to Sign In page!</a>";
sendEmail($email_address,$body,$headers);

echo "<center>";
echo "<h3>Your password has been sent to your email address!</h3>";
echo "<h4>Go to Sign In page Again</h4>";
echo "<a href='index.php'>Sign In page</a>";
echo "</center>";
}

?>

</body>
</html>
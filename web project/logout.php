<?php
session_start();
if(isset($_COOKIE['email_cookie']) && isset($_COOKIE['password_cookie']))
{
    setcookie("email_cookie", time()- 3600);
    setcookie("password_cookie", time()- 3600);
}
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>
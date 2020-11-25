<?php
session_start();
function login_user()
{
    include 'database_connection.php';
    $error=''; // Variable To Store Error Message
    if (isset($_POST['login'])) 

  {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        if($email=='' || $password=='')
        {
          $error = "Username or Password fields are empty";
           //header("Location:login.php?id=Some fields are empty");
        }
        else
        {
            $query = "SELECT * FROM verified_user WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($query);
            $row = mysqli_fetch_array($result);
            $fname = $row['fname'];
            $lname = $row['lname'];
            $full_name = $fname." ". $lname;
            //echo $full_name;
            //echo $row['email'];
            $row = mysqli_num_rows($result);
            if(mysqli_num_rows($result) == 1) 
            {
                   // session_register('logged_in_user');
                   // $_SESSION['logged_in_user'] = true;
                    echo "logged_in";
                    $_SESSION['logged_in_user']= $full_name;
                    $_SESSION['logged_in_user_email']= $email;
                    //echo $_SESSION['logged_in_user'];
                    header("Location: login.php");
                    
                    if(!empty($_POST["remember"])) 
                    {
                      setcookie ("email_cookie",$email,time()+ ( 60));
                      setcookie ("member_password",$password,time()+ ( 60));
                    } 
                    else 
                        {
                          if(isset($_COOKIE["email_cookie"])) 
                          {
                            setcookie ("email_cookie","");
                          }
                          if(isset($_COOKIE["member_password"])) 
                          {
                            setcookie ("member_password","");
                          }
                        header("Location: login.php");
                        }

            }
            else 
            { 
                    $error = "Username or Password is invalid";
                    echo "<center>";
                    echo "<div style='background-color: black; width: 300px; height: 30px;'>";
                    echo "<h5 style='color: red;'>Sorry you have entered wrong credentials, please try again!</h5>";
                    echo "</div>";
                    echo "</center>";
                    echo "<script type='text/javascript'>alert('Wrong Username or Password');
                      window.location='login.php';
                      </script>";
                        
             }
        }
  }
}
login_user();    

?>
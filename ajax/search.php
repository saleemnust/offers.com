<?php
include 'database_connection.php';

  $key=$_GET['key'];
  $array = array();
  $query="select * from offer where description like '%{$key}%'";
  $result = $conn->query($query);
  //$row=mysqli_fetch_assoc($result);
  //echo $row['password'];
 // $pass = $row['password']; 
   while($row=mysqli_fetch_assoc($result))
    {
      $array[] = $row['description'];
    }
    echo json_encode($array);
    //ajax_search_box();

?>

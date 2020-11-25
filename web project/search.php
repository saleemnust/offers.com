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
     // $data = echo  "<a href=$row['description']>$row['description'] </a>";
      array_push($array, $row['description']) ;
     // array_push($array, "hello") ;
     // array_push($array,  echo "<a href=$row['description']>hello</a>";) ;

      //echo "<a href=$row['description']> $row['description'] </a>";
       // $array[]= "<li>'$row['description']'</br>
         // <a href=$row['description']>$row['description']</a></li>";
    }
    echo json_encode($array);
    //echo json_encode('value');
    //ajax_search_box();

?>

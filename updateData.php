<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schooldb";

// db->connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "connection error <br>";
}else{
    echo"successfully connected <br>";
}


  $query = "UPDATE `boylist` SET `name` = 'kyawkyaw', `email` = 'kyaw@gmail.com' WHERE `id` = 2";
  
  if ($conn->query($query) === TRUE) { 
    echo "<center>Data update successful.</center> <br>";
  }else{
      echo "error in updatation. <br>";
  }



?>

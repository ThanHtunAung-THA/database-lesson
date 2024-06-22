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

// table->create
$sql = "CREATE TABLE IF NOT EXISTS boylist(
    ID INT(5) AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(20) NOT NULL,
    Phone INT(10),
    Age TINYINT,
    Email VARCHAR(20)
)
";

if ($conn->query($sql) === TRUE) { 
    echo "TABLE created successful <br>";
}else{
    echo "error <br>";
}

?>

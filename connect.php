<?php

$servername = "localhost";
$username = "root";
$password = "";

// db->connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    echo "connection error <br>";
}else{
    echo"successfully connected <br>";
}

// db->create
$sql = "CREATE DATABASE IF NOT EXISTS schooldb ";

if ($conn->query($sql) === TRUE) { 
    echo "database created successful <br>";
}else{
    echo "error <br>";
}

?>

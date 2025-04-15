<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// if($conn){
//     echo 'success';
// }
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
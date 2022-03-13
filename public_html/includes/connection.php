
<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Blog_Posts";

// Connecting to the DB

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo $connection->connect_error;
}


?>
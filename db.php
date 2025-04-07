<?php

$servername = "mysql-db"; // container name
$username = "root";
$password = "root";       // use same as MYSQL_ROOT_PASSWORD
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

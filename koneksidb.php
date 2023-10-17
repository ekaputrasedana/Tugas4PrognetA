<?php
$host = "prognet.localnet";
$username = "2205551061";
$password = "2205551061";
$database = "db_2205551061";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
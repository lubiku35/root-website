<?php

// Databse Connection

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "lubiku_databse";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

// Databse Connection Failed - Message

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
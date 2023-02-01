<?php

// Databse Connection Variables

$SERVER_NAME = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "lubiku_database";

// Database Connection

$conn = mysqli_connect($SERVER_NAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// If Failed Connection

if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}
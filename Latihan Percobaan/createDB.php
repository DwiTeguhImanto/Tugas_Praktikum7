<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $password);

// check connection
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// create database 
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database create successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
?>
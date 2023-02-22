<?php

// Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE mca";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully","<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the mca database
mysqli_select_db($conn, "mca");

// Create table
$sql = "CREATE TABLE books (
    id INT(6)  AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    editions INT(3) NOT NULL,
    publisher VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table books created successfully\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

// Close the database connection
mysqli_close($conn);

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DULIEU";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user_name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
full_name VARCHAR(50)NOT NULL,
quyen INT(5) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
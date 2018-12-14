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
$sql = "CREATE TABLE vayvon (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    tienchovay VARCHAR(50) NOT NULL,
    laisuat VARCHAR(30) NOT NULL,
    adress VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP,
    FOREIGN KEY idnoichovay(id)
   REFERENCES noichovay (id),
   FOREIGN KEY idsinhvien(id)
   REFERENCES sinhvien (id)
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
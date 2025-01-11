<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = mysqli_connect($servername,$username,  $password,$dbname);

if(!$conn){
    die("connection is failed" . mysqli_connect_error());
} else {
    echo "connection is succesfully";
}

$sql = "CREATE TABLE crud(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(60),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)){
    echo "Table is created succesfully";
} else {
    echo "Table creation is failed" . mysqli_error($conn);
}
?>
<?php
$conn = mysqli_connect("localhost","root",  "","php_crud");

if(!$conn){
    die("connection is failed" . mysqli_connect_error());
}
?>
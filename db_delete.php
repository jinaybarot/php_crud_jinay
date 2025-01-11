<?php
include "db_comman.php";

$id = $_GET['id'];

$sql = "DELETE FROM crud WHERE id = '$id'";


if(mysqli_query($conn, $sql)){
    header("location: index.php");
} else {
    echo "something went wrong";
}
?>
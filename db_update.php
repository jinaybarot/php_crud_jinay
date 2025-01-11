<?php
include "db_comman.php";

$id = $_GET['id'];
$sql = "SELECT * FROM crud WHERE id = $id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE crud SET firstname='$fname', lastname='$lname', email='$email' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


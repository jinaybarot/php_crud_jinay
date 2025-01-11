<?php
include "db_comman.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if ($id != '') {
        $sql = "UPDATE crud SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$id'";
    } else {
        $sql = "INSERT INTO crud (firstname, lastname, email)
        VALUES ('$firstname','$lastname','$email')";
    }

    if (mysqli_query($conn, $sql)){
        header("location: index.php");
    } else {
        echo "error in operation: " . mysqli_error($conn);
    }
}
?>
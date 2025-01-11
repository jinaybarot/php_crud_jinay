<?php
include "db_comman.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if ($firstname != '' && $lastname != '' && $email != '') {
        $sql = "INSERT INTO crud (firstname, lastname, email)
        VALUES ('$firstname','$lastname','$email')";
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "fail to insert data.";
        }
    } else {
        echo "there is some problen..";
    }
}
?>
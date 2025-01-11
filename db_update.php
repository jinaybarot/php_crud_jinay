<?php

include "db_comman.php";

$id = $firstname = $lastname = $email = "";

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM crud WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
        }
    }
?>
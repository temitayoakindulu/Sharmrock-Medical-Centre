<?php

include("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["first_name"] . " " . $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts
    (full_name, email, phone, message)

    VALUES
    ('$full_name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {

        header("Location: ../contact.php?success=1");
        exit();

    } else {

        echo "Error: " . $conn->error;

    }

    $conn->close();
}

?>
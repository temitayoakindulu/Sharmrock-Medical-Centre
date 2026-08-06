<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

// Check if an ID was passed
if (!isset($_GET["id"])) {
    header("Location: appointments.php");
    exit();
}

$id = $_GET["id"];

// Delete the appointment
$sql = "DELETE FROM appointments WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

    header("Location: appointments.php");

} else {

    echo "Error deleting appointment: " . $conn->error;

}

$conn->close();
?>
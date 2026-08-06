<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

if (!isset($_GET["id"])) {
    header("Location: messages.php");
    exit();
}

$id = $_GET["id"];

$sql = "DELETE FROM contacts WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

    header("Location: messages.php?deleted=1");
    exit();

} else {

    echo "Error deleting message.";

}

$conn->close();

?>
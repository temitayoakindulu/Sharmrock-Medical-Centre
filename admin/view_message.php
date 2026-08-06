<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

// Check if a message ID was passed
if (!isset($_GET["id"])) {
    header("Location: messages.php");
    exit();
}

$id = $_GET["id"];

// Get the message
$sql = "SELECT * FROM contacts WHERE id = '$id'";

$result = $conn->query($sql);

// If message doesn't exist
if ($result->num_rows == 0) {
    echo "Message not found.";
    exit();
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Message Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>

<i class="bi bi-envelope-fill"></i>

Message Details

</h3>

</div>

<div class="card-body">

<div class="row mb-3">

<div class="col-md-6">

<strong>Full Name</strong>

<p><?php echo $row["full_name"]; ?></p>

</div>

<div class="col-md-6">

<strong>Email</strong>

<p><?php echo $row["email"]; ?></p>

</div>

</div>

<div class="row mb-3">

<div class="col-md-6">

<strong>Phone</strong>

<p><?php echo $row["phone"]; ?></p>

</div>

<div class="col-md-6">

<strong>Date Sent</strong>

<p><?php echo $row["created_at"]; ?></p>

</div>

</div>

<strong>Message</strong>

<div class="border rounded p-3 bg-light">

<?php echo nl2br($row["message"]); ?>

</div>

<div class="mt-4">

<a href="messages.php" class="btn btn-success">

<i class="bi bi-arrow-left"></i>

Back to Messages

</a>

</div>

</div>

</div>

</div>

</body>

</html>
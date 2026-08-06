<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

// Check if an appointment ID was passed
if (!isset($_GET["id"])) {
    header("Location: appointments.php");
    exit();
}

$id = $_GET["id"];

// Get the appointment
$sql = "SELECT * FROM appointments WHERE id = '$id'";

$result = $conn->query($sql);

// If appointment doesn't exist
if ($result->num_rows == 0) {
    echo "Appointment not found.";
    exit();
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Appointment Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>

<i class="bi bi-person-vcard"></i>

Appointment Details

</h3>

</div>

<div class="card-body">
    <div class="row mb-3">

<div class="col-md-6">

<strong>Patient Name</strong>

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

<strong>Age</strong>

<p><?php echo $row["age"]; ?></p>

</div>

</div>

<div class="row mb-3">

<div class="col-md-6">

<strong>Gender</strong>

<p><?php echo ucfirst($row["gender"]); ?></p>

</div>

<div class="col-md-6">

<strong>Department</strong>

<p><?php echo ucwords(str_replace("-", " ", $row["department"])); ?></p>

</div>

</div>

<div class="row mb-3">

<div class="col-md-6">

<strong>Doctor</strong>

<p><?php echo ucwords(str_replace("-", " ", $row["doctor"])); ?></p>

</div>

<div class="col-md-6">

<strong>Appointment Date</strong>

<p><?php echo $row["appointment_date"]; ?></p>

</div>

</div>

<div class="row mb-4">

<div class="col-md-6">

<strong>Appointment Time</strong>

<p><?php echo $row["appointment_time"]; ?></p>

</div>

</div>

<strong>Reason For Visit</strong>

<div class="border rounded p-3 bg-light">

<?php echo nl2br($row["message"]); ?>

</div>
<div class="mt-4">

<a href="appointments.php" class="btn btn-success">

<i class="bi bi-arrow-left"></i>

Back to Appointments

</a>

</div>

</div>

</div>

</div>

</body>

</html>
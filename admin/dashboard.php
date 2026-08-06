<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

// Count total appointments
$sql = "SELECT COUNT(*) AS total FROM appointments";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalAppointments = $row["total"];

// Count total messages
$sql = "SELECT COUNT(*) AS total FROM contacts";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalMessages = $row["total"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-hospital-fill"></i>
            Shamrock Medical Centre
        </a>

        <div class="d-flex align-items-center">

            <span class="text-white me-3">
                <i class="bi bi-person-circle"></i>
                Welcome,
                <strong><?php echo $_SESSION["admin"]; ?></strong>
            </span>

            <a href="logout.php" class="btn btn-light btn-sm">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>

        </div>

    </div>
</nav>

<!-- Content -->

<div class="container py-5">

    <h2 class="fw-bold text-success mb-4">

        <i class="bi bi-speedometer2"></i>

            Admin Dashboard

    </h2>

    <p class="text-muted">

        Today is

        <strong>

            <?php echo date("l, d F Y"); ?>

        </strong>

    </p>

    <div class="row g-4">

        <!-- Total Appointment -->

        <div class="col-lg-6">

            <div class="card border-0 shadow rounded-4">

                <div class="card-body text-center p-5">

                    <i class="bi bi-calendar2-check display-2 text-success"></i>

                    <h5 class="mt-3">

                        Total Appointments

                    </h5>

                    <h1 class="display-3 fw-bold text-success">

                        <?php echo $totalAppointments; ?>

                    </h1>

                </div>

            </div>

        </div>

        <!-- Total Messages -->

<div class="col-lg-6">

    <div class="card border-0 shadow rounded-4">

        <div class="card-body text-center p-5">

            <i class="bi bi-envelope-fill display-2 text-primary"></i>

            <h5 class="mt-3">

                Total Messages

            </h5>

            <h1 class="display-3 fw-bold text-primary">

                <?php echo $totalMessages; ?>

            </h1>

        </div>

    </div>

</div>


    </div>

    <!-- Quick Actions -->

    <div class="card border-0 shadow rounded-4 mt-5">

        <div class="card-body">

            <h4 class="mb-4">

                <i class="bi bi-lightning-charge-fill text-warning"></i>

                Quick Actions

            </h4>

            <div class="row text-center g-3">

    <div class="col-md-3">
        <a href="appointments.php" class="btn btn-success w-100 py-4">
            <i class="bi bi-calendar-check fs-2"></i><br>
            Manage Appointments
        </a>
    </div>

    <div class="col-md-3">
        <a href="messages.php" class="btn btn-warning w-100 py-4 text-dark">
            <i class="bi bi-envelope-fill fs-2"></i><br>
            Manage Messages
        </a>
    </div>

    <div class="col-md-3">
        <a href="../index.php" class="btn btn-primary w-100 py-4">
            <i class="bi bi-globe fs-2"></i><br>
            Visit Website
        </a>
    </div>

    <div class="col-md-3">
        <a href="logout.php" class="btn btn-danger w-100 py-4">
            <i class="bi bi-box-arrow-right fs-2"></i><br>
            Logout
        </a>
    </div>

</div>

        </div>

    </div>

</div>

<footer class="bg-success text-white text-center py-3 mt-5">

    <small>

        &copy; <?php echo date("Y"); ?>

        Shamrock Medical Centre.
        All Rights Reserved.

    </small>

</footer>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

$sql = "SELECT * FROM appointments ORDER BY created_at DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Appointments</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold text-success">

            <i class="bi bi-calendar2-check-fill"></i>

            All Appointments

        </h2>

        <small class="text-muted">

            Manage all patient appointment bookings.

        </small>

    </div>

    <a href="dashboard.php" class="btn btn-success">

        <i class="bi bi-arrow-left-circle"></i>

        Dashboard

    </a>

</div>

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

            

                <table class="table table-hover table-striped align-middle">

                    <thead class="table-success">

                        <tr>

                            <th>ID</th>

                            <th>Patient</th>

                            <th>Phone</th>

                            <th>Department</th>

                            <th>Date</th>

                            <th>Time</th>

                            <th>Action</th>

                        </tr>

                    </thead>

 <tbody>
    <?php

while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["full_name"]; ?></td>

    <td><?php echo $row["phone"]; ?></td>

    <td><?php echo $row["department"]; ?></td>

    <td><?php echo $row["appointment_date"]; ?></td>

    <td><?php echo $row["appointment_time"]; ?></td>

    <td>

        <a href="view.php?id=<?php echo $row["id"]; ?>"
            class="btn btn-outline-primary btn-sm">

            <i class="bi bi-eye"></i>

            View

        </a>

        <a href="delete.php?id=<?php echo $row["id"]; ?>"
   class="btn btn-outline-danger btn-sm"
   onclick="return confirm('Are you sure you want to delete this appointment?');">

    <i class="bi bi-trash"></i>

    Delete

</a>

    </td>

</tr>

<?php

}

 ?>

                     </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>
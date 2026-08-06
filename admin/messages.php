<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

$sql = "SELECT * FROM contacts ORDER BY id DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h1><i class="bi bi-envelope-fill text-success"></i> All Messages</h1>

        <small class="text-muted">

            Manage all contact messages from website visitors.

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
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Action</th>
</tr>
</thead>

 <tbody>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

    <td><?= $row['id']; ?></td>

    <td><?= $row['full_name']; ?></td>

    <td><?= $row['email']; ?></td>

    <td><?= $row['phone']; ?></td>

    <td><?= $row['created_at']; ?></td>

    <td>

        <a href="view_message.php?id=<?= $row['id']; ?>"
            class="btn btn-primary btn-sm">

            <i class="bi bi-eye"></i>
            View

        </a>

        <a href="delete_message.php?id=<?= $row['id']; ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Delete this message?')">

            <i class="bi bi-trash"></i>
            Delete

        </a>

    </td>

</tr>

<?php } ?>

</tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>
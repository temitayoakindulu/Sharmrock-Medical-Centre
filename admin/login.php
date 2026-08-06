<?php
session_start();

if (isset($_SESSION["admin"])) {
    header("Location: dashboard.php");
    exit();
}

include("../config/database.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $_SESSION["admin"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {

        $error = "Invalid Username or Password.";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

<div class="container">

    <div class="row vh-100 justify-content-center align-items-center">

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <i class="bi bi-hospital text-success display-3"></i>

                        <h2 class="mt-3">Shamrock Medical Centre</h2>

                        <p class="text-muted">
                            Admin Login
                        </p>

                    </div>

                    <?php
                    if (!empty($error)) {
                    ?>

                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>

                    <?php
                    }
                    ?>

                    <form method="POST">

                        <div class="form-floating mb-3">

                            <input
                                type="text"
                                class="form-control"
                                id="username"
                                name="username"
                                placeholder="Username"
                                required>

                            <label for="username">
                                <i class="bi bi-person"></i>
                                Username
                            </label>

                        </div>

                        <div class="form-floating mb-4">

                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Password"
                                required>

                            <label for="password">
                                <i class="bi bi-lock"></i>
                                Password
                            </label>

                        </div>

                        <button class="btn btn-success w-100 py-3">

                            <i class="bi bi-box-arrow-in-right"></i>

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
<?php
session_start();

include("../config/database.php");

?>

<?php

include("../config/database.php");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];
    $department = $_POST["department"];
    $doctor = $_POST["doctor"];
    $message = $_POST["message"];

    // Check for empty required fields
if (
        empty($full_name) ||
        empty($email) ||
        empty($phone) ||
        empty($age) ||
        empty($gender) ||
        empty($department) ||
        empty($appointment_date) ||
        empty($appointment_time)
    ) {
        $_SESSION["error"] = "Please fill in all required fields.";
header("Location: ../appointment.php");
exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] = "Please enter a valid email address.";
header("Location: ../appointment.php");
exit();
    }

    if ($age < 1 || $age > 120) {
        $_SESSION["error"] = "Age must be between 1 and 120.";
header("Location: ../appointment.php");
exit();
    }

    if ($appointment_date < date("Y-m-d")) {
        $_SESSION["error"] = "Appointment date cannot be in the past.";
header("Location: ../appointment.php");
exit();
    }

    // SQL query with placeholders
    $sql = "INSERT INTO appointments
    (full_name, email, phone, age, gender, department, doctor, appointment_date, appointment_time, message)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the values to the placeholders
    $stmt->bind_param(
        "sssissssss",
        $full_name,
        $email,
        $phone,
        $age,
        $gender,
        $department,
        $doctor,
        $appointment_date,
        $appointment_time,
        $message
    );

    // Execute the query
    if ($stmt->execute()) {

        // Redirect back to the appointment page
        $_SESSION["success"] = "Your appointment has been booked successfully. We will contact you shortly.";

header("Location: ../appointment.php");
exit();

    } else {

        echo "Error: " . $stmt->error;

    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $conn->close();
}

?>
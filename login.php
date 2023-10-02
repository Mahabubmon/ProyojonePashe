<?php
session_start(); // Start a session to store error/success messages

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection parameters
$host = "localhost";  // Replace with your host
$dbUsername = "root";  // Replace with your database username
$dbPassword = "";  // Replace with your database password
$dbName = "user_database";  // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute a SQL query to check if the provided username and password are valid
$stmt = $conn->prepare("SELECT * FROM registration WHERE  username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Login successful
    $_SESSION['success_message'] = "Login successful!";
    header("Location: home.html"); // Replace "success.php" with the actual success page URL
    exit();
} else {
    // Login failed
    $_SESSION['error_message'] = "Invalid username or password.";
    header("Location: login.htm"); // Replace "login.php" with the actual login page URL
    exit();
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();


?>

<?php
// Retrieve the form data
$firstName = $_POST['firstName'];
$userName = $_POST['UserName'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$password = $_POST['Password'];

// Connect to the database
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "user_database";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute an SQL statement to insert the data into a table
$stmt = $conn->prepare("INSERT INTO registration (firsatName, userName, Phone, Email, Password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstName, $userName, $phone, $email, $password);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect the user to another page or display a success message
header("Location:login.html");
exit();


?>

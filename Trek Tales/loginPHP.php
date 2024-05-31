<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "users_db"; 

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if username and password match
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn,$sql);

if ($result->num_rows == 1) {
    // Authentication successful, redirect to home.html
    header("Location: home.html");
    exit();
} 
else {
    // Authentication failed, redirect back to login page
    header("Location: login.html");
    exit();
}

mysqli_close($conn);
?>

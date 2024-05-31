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

// Fetching values from HTML form
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

// Inserting data into MySQL table
$sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: home.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>

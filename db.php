<?php
$servername = "localhost";
$username = "root"; // Default for local server
$password = "";     // Default for local server
$dbname = "task_manager";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'mywebsite');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

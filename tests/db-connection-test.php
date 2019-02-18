<?php
$servername = "localhost";
$username = "root";
$password = "Il0veNikuM4n!";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}
	echo "Connected Successfully";
?>

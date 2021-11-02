<?php
$servername = "localhost";
$username = "u436559953_insightsbuzz";
$password = "Insightsbuzz@2021";
$dbname = "u436559953_crm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 
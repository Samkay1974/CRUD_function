<?php
header("Content-Type: application/json");

$host = "169.239.251.102";
$dbname = "mobileapps_2026B_samuel_ninson";
$username = "samuel.ninson";
$password = "Sam@Ashesi2021";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode([
        "success" => false,
        "error" => "Database connection failed"
    ]);
    exit();
}
?>

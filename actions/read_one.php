<?php
require_once("../db.php");

if (!isset($_GET['id'])) {
    echo json_encode([
        "success" => false,
        "error" => "ID required"
    ]);
    exit();
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode([
        "success" => true,
        "data" => $result->fetch_assoc()
    ]);
} else {
    echo json_encode([
        "success" => false,
        "error" => "not found"
    ]);
}
?>

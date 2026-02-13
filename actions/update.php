<?php
require_once("../db.php");

if (!isset($_POST['id']) || !isset($_POST['name']) || !isset($_POST['phone'])) {
    echo json_encode([
        "success" => false,
        "error" => "Missing parameters"
    ]);
    exit();
}

$id = intval($_POST['id']);
$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);

$sql = "UPDATE students SET name='$name', phone='$phone' WHERE id=$id";

if ($conn->query($sql)) {
    echo json_encode([
        "success" => true
    ]);
} else {
    echo json_encode([
        "success" => false,
        "error" => "Update failed"
    ]);
}
?>

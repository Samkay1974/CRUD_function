<?php
require_once("../db.php");

if (!isset($_POST['id'])) {
    echo json_encode([
        "success" => false,
        "error" => "ID required"
    ]);
    exit();
}

$id = intval($_POST['id']);

$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql)) {
    echo json_encode([
        "success" => true
    ]);
} else {
    echo json_encode([
        "success" => false,
        "error" => "Delete failed"
    ]);
}
?>

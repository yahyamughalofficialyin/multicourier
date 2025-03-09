<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$field = $_POST['field'] ?? '';
$value = trim($_POST['value'] ?? '');

// Only allow email or phone fields
if(!in_array($field, ['email', 'phone'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid field']);
    exit;
}

include "admin/v3.21.0/config.php";

if($field === 'email'){
    $stmt = $conn->prepare("SELECT Id FROM user WHERE Email = ?");
} elseif($field === 'phone'){
    $stmt = $conn->prepare("SELECT Id FROM user WHERE Phone = ?");
}

$stmt->bind_param("s", $value);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => ucfirst($field) . " already exists."]);
} else {
    echo json_encode(['success' => true, 'message' => ucfirst($field) . " is available."]);
}

$stmt->close();
$conn->close();
?>
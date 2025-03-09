<?php
session_start();

include "admin/v3.21.0/config.php";

// Get POST data
$description = $_POST['description'];
$type = $_POST['type'];
$weight = $_POST['weight'];
$addedBy = $_SESSION['user_id'];

// Generate unique ID for parcel
$id = uniqid();

// Insert into parcel table
$stmt = $conn->prepare("INSERT INTO parcel (id, description, weight, type, addedBy) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $id, $description, $weight, $type, $addedBy);

if ($stmt->execute()) {
    // Return the parcelId in the response
    echo json_encode(['parcelId' => $id]);
} else {
    echo json_encode(['error' => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
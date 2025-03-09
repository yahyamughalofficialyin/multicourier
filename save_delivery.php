<?php
session_start(); // Start the session to access session variables

include "admin/v3.21.0/config.php";

// Function to generate a unique 8-digit OrderNumber
function generateOrderNumber($conn) {
    do {
        $orderNumber = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        $checkQuery = $conn->prepare("SELECT OrderNumber FROM delivery WHERE OrderNumber = ?");
        $checkQuery->bind_param("s", $orderNumber);
        $checkQuery->execute();
        $checkResult = $checkQuery->get_result();
    } while ($checkResult->num_rows > 0); // Ensure the number is unique

    return $orderNumber;
}

// Get POST data
$pickupAddress = $_POST['pickupAddress']; // This will now be a Google Maps link
$recieverName = $_POST['recieverName'];
$recieverPhone = $_POST['recieverPhone'];
$deliveryAddress = $_POST['deliveryAddress']; // This will also be a Google Maps link
$paymentMethod = $_POST['paymentMethod'];
$addedBy = $_SESSION['user_id'];

// Get the weight of the parcel from the parcel table
$parcelId = $_POST['parcelId']; // Pass parcelId from the frontend
$weightQuery = $conn->prepare("SELECT weight FROM parcel WHERE id = ?");
$weightQuery->bind_param("s", $parcelId);
$weightQuery->execute();
$weightResult = $weightQuery->get_result();
$weightRow = $weightResult->fetch_assoc();
$weight = $weightRow['weight'];
$weightQuery->close();

// Determine the price based on user type
$userType = $_SESSION['user_type'];
$priceQuery = $conn->prepare("SELECT walkin, corporate FROM pricings ORDER BY timeAdded DESC LIMIT 1");
$priceQuery->execute();
$priceResult = $priceQuery->get_result();
$priceRow = $priceResult->fetch_assoc();

if ($userType === "walkin") {
    $price = $priceRow['walkin'];
} else {
    $price = $priceRow['corporate'];
}
$priceQuery->close();

// Calculate payment
$payment = $weight * $price;

// Generate unique ID for delivery
$deliveryId = uniqid();

// Generate unique 8-digit OrderNumber
$orderNumber = generateOrderNumber($conn);

// Insert into delivery table
$stmt = $conn->prepare("INSERT INTO delivery (id, parcelId, paymentMethod, payment, paymentStatus, status, pickupAddress, pickupLat, pickupLong, deliveryAddress, deliveryLat, deliveryLong, recieverName, recieverPhone, addedBy, OrderNumber) VALUES (?, ?, ?, ?, 'unpaid', 'booked', ?, '', '', ?, '', '', ?, ?, ?, ?)");
$stmt->bind_param("sssdssssss", $deliveryId, $parcelId, $paymentMethod, $payment, $pickupAddress, $deliveryAddress, $recieverName, $recieverPhone, $addedBy, $orderNumber);

if ($stmt->execute()) {
    echo "Delivery details saved successfully. Order Number: " . $orderNumber;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
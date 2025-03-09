<?php
session_start();
header('Content-Type: application/json');

$response = [];
$errors = [];

// Only accept POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
    echo json_encode($response);
    exit;
}

include "admin/v3.21.0/config.php";

// Retrieve POST data
$identifier = trim($_POST['identifier'] ?? '');
$password   = $_POST['password'] ?? '';

// Validate fields
if (empty($identifier)) {
    $errors['identifier'] = "Email or Phone is required.";
}
if (empty($password)) {
    $errors['password'] = "Password is required.";
}
if (!empty($errors)) {
    $response['success'] = false;
    $response['errors'] = $errors;
    echo json_encode($response);
    exit;
}

// Prepare a statement to select the user record by Email or Phone
$stmt = $conn->prepare("SELECT Id, FirstName, LastName, Email, Phone, password, type FROM user WHERE Email = ? OR Phone = ?");
$stmt->bind_param("ss", $identifier, $identifier);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $response['success'] = false;
    $response['message'] = "No account found with that Email/Phone.";
    echo json_encode($response);
    exit;
}

$user = $result->fetch_assoc();

// Verify the password
if (!password_verify($password, $user['password'])) {
    $response['success'] = false;
    $response['message'] = "Invalid password.";
    echo json_encode($response);
    exit;
}

// Login successful—set session variables as needed
$_SESSION['user_id']   = $user['Id'];
$_SESSION['user_name'] = $user['FirstName'] . " " . $user['LastName'];
$_SESSION['user_phone']   = $user['Phone'];
$_SESSION['user_email']   = $user['Email'];
$_SESSION['user_type'] = $user['type'];

$response['success'] = true;
$response['message'] = "Login successful. Redirecting...";
echo json_encode($response);
exit;
?>

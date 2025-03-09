<?php
header('Content-Type: application/json');
$response = array();
$errors = array();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
    echo json_encode($response);
    exit;
}

include "admin/v3.21.0/config.php";

// Retrieve and trim POST variables
$first_name     = trim($_POST['first_name']);
$last_name      = trim($_POST['last_name']);
$email          = trim($_POST['email']);
$phone          = trim($_POST['phone']);
$password_input = $_POST['password'];

// Validate First Name: required and only letters/spaces
if(empty($first_name)) {
    $errors['first_name'] = "First name is required.";
} elseif(!preg_match("/^[A-Za-z ]+$/", $first_name)) {
    $errors['first_name'] = "First name can only contain letters and spaces.";
}

// Validate Last Name: required and only letters/spaces
if(empty($last_name)) {
    $errors['last_name'] = "Last name is required.";
} elseif(!preg_match("/^[A-Za-z ]+$/", $last_name)) {
    $errors['last_name'] = "Last name can only contain letters and spaces.";
}

// Validate Email: required, valid format, and unique
if(empty($email)) {
    $errors['email'] = "Email is required.";
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format.";
} else {
    $stmt = $conn->prepare("SELECT Id FROM user WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
        $errors['email'] = "Email already exists.";
    }
    $stmt->close();
}

// Validate Phone: required, digits only, and unique
if(empty($phone)) {
    $errors['phone'] = "Phone number is required.";
} elseif(!preg_match("/^[0-9]+$/", $phone)) {
    $errors['phone'] = "Phone number can only contain digits.";
} else {
    $stmt = $conn->prepare("SELECT Id FROM user WHERE Phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
        $errors['phone'] = "Phone number already exists.";
    }
    $stmt->close();
}

// Validate Password: required and at least 8 characters long
if(empty($password_input)) {
    $errors['password'] = "Password is required.";
} elseif(strlen($password_input) < 8) {
    $errors['password'] = "Password must be at least 8 characters long.";
}

// If any validation errors exist, return them
if(!empty($errors)) {
    $response['success'] = false;
    $response['errors']  = $errors;
    echo json_encode($response);
    exit;
}

// Generate a random ID (32-character hex string)
try {
    $id = bin2hex(random_bytes(16));
} catch (Exception $e) {
    $id = uniqid();
}

// Hash the password
$hashed_password = password_hash($password_input, PASSWORD_DEFAULT);

// Set type to "walkin" by default
$type = "walkin";

// Prepare and execute the INSERT statement
$stmt = $conn->prepare("INSERT INTO user (Id, FirstName, LastName, Email, Phone, password, type) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $id, $first_name, $last_name, $email, $phone, $hashed_password, $type);

if($stmt->execute()){
    $response['success'] = true;
    $response['message'] = "Registration successful.";
} else {
    $response['success'] = false;
    $response['message'] = "Registration failed: " . $stmt->error;
}

$stmt->close();
$conn->close();
echo json_encode($response);
exit;
?>

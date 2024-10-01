<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Function to decrypt user ID
function decryptID($encryptedID) {
    $key = "secret_key_power"; // Secret key
    $decoded = base64_decode($encryptedID);
    $id = str_replace($key, '', $decoded);
    return (int)$id; 
}

// Check if CSRF token is valid
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    if (isset($_GET['csrf_token']) && isset($_SESSION['csrf_token'])) {
        if (hash_equals($_SESSION['csrf_token'], $_GET['csrf_token'])) {
            // CSRF token is valid, proceed with deletion
            $encryptedID = $_GET['id'];
            $_id = decryptID($encryptedID);
            $user = $userModel->findUserById($_id);
            
            if ($user) {
                $userModel->deleteUserById($_id);
                echo "User deleted successfully.";
            } else {
                echo "User not found.";
            }
        } else {
            echo "Invalid CSRF token!";
            exit;
        }
    } else {
        echo "CSRF token missing!";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

// After deletion, redirect to the list of users
header('Location: list_users.php');
unset($_SESSION['csrf_token']); // Regenerate CSRF token
?>

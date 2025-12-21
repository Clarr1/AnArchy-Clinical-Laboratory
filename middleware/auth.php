<?php 
require base_path('vendor/autoload.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

//secret key (must match the one in Patients_query.php)
$key = "secret_key";

// Get the token from cookie
$token = $_COOKIE['token'] ?? null;

if ($token) {
    try {
        // Decode and verify the JWT token
        $decoded = JWT::decode($token, new Key($key, 'HS256'));

        $userData = (array) $decoded->data;

        $email = $userData['email']; // You can display this in your view
        $access = $userData['access'];

            if($access == 'admin'){
                echo "Access denied!";
                exit;
            }

    } catch (Exception $e) {
        // Invalid or expired token
        echo "<script>alert('Session expired. Please log in again.');</script>";
        header("Location: /AnArchyClinical-Laboratory/patients/login");
        exit();
    }
} else {
    // No token found, redirect to login
    header("Location: /AnArchyClinical-Laboratory/patients/login");
    exit();
}



?>

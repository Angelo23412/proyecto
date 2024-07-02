<?php
session_start();
header('Content-Type: application/json');

$response = ['user_id' => null];

if (isset($_SESSION['user_id'])) {
    $response['user_id'] = $_SESSION['user_id'];
} else {
    $response['error'] = 'Usuario no ha iniciado sesión';
}

echo json_encode($response);
?>

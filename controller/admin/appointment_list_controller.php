<?php

require base_path("models/Admin_query.php");

$db   = new Database();
$conn = $db->connect();

$appointmentModel = new Admin($conn);


if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    $result = $appointmentModel->display_appointments();
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}

$result = $appointmentModel->display_appointments();
require base_path("views/admin/appointment_list.view.php");

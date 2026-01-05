<?php

require base_path("models/Admin_query.php");

$db   = new Database();
$conn = $db->connect();

$appointmentModel = new Admin($conn);

/* AJAX UPDATE REQUEST*/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

    $appointment_id = $_POST['appointment_id'] ?? null;
    $appointment_status = $_POST['appointment_status'] ?? null;

    header('Content-Type: application/json');

    if (!$appointment_id || !$appointment_status) {
        echo json_encode(['success' => false]);
        exit;
    }

    $success = $appointmentModel->update_status($appointment_id, $appointment_status);

    echo json_encode(['success' => $success]);
    exit;
}

/* NORMAL PAGE LOAD*/
$appointment_id = $_GET['appointment_id'] ?? null;

if (!$appointment_id) {
    echo "No appointment selected.";
    exit;
}

$result = $appointmentModel->get_appointment_details($appointment_id);

require base_path('views/admin/appointment_details.view.php');

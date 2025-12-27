<?php

require base_path("models/Admin_query.php");
// require base_path("middleware/auth.php");

$db   = new Database();
$conn = $db->connect();

$patients = new Admin($conn);
$appointment_id = $_GET['appointment_id'] ?? null;

if ($appointment_id) {
    $result = $patients->get_appointment_details($appointment_id);
    require base_path('views/admin/appointment_details.view.php');
} else {
    echo "No appointment selected.";
}


;?>
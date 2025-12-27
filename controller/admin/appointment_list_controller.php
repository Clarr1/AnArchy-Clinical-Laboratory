<?php

require base_path("models/Admin_query.php");
// require base_path("middleware/auth.php");

$db   = new Database();
$conn = $db->connect();

$appointmentModel = new Admin($conn);

$result = $appointmentModel->display_appointments();

if($result !== false){
    require base_path("views/admin/appointment_list.view.php");
}else{
    echo "Failed to retrive appoinment";
}


;?>
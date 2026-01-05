<?php


$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$uri = preg_replace('#^AnArchyClinical-Laboratory/#', '', $uri);

$routes = [
    // "models/patients_info" => "controller/models/Patients_query.php",
    "patients/register" => "controller/patients/register_patients_controller.php",
    "patients/login" => "controller/patients/login_patients_controller.php",
    "patients/appointment" => "controller/patients/appointment_controller.php",
    "patients/view-appointment" => "controller/patients/view_appointment_controller.php",
    "admin/appointment-list" => "controller/admin/appointment_list_controller.php",
    "admin/appointment-details" => "controller/admin/appointment_details_controller.php",
    "admin/login" => "controller/admin/login_admin_controller.php",
    "admin/register" => "controller/admin/register_admin_controller.php"
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    echo "Page not found.";
    http_response_code(404);
}

?>
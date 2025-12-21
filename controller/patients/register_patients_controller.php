<?php 
require base_path("models/Patients_query.php");

$db   = new Database();
$conn = $db->connect();

// model instance
$patients_model = new Patients($conn);

function handle_register($patients_model, $data){
        return $patients_model->register_patients(
        $data['first_name'],
        $data['last_name'],
        $data['middle_name'],
        (int)$data['age'],
        $data['sex'],
        $data['email'] ?? null,
        $data['patients_password']
    );  
}

//handle the request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = handle_register($patients_model, $_POST);

    if ($result) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Registration failed!');</script>";
    }
}

require base_path("views/patients/register.view.php");
?>
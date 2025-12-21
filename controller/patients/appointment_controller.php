<?php 
require base_path("models/Patients_query.php");

$db   = new Database();
$conn = $db->connect();


//appointment
$patients_model = new Patients($conn);

function handle_appoinment($patients_model, $data){
    return $patients_model->appointment(
        $data['fname'],
        $data['lname'],
        $data['mname'],
        (int)$data['age'],
        $data['sex'],
        $data['contact_number'],
        $data['patient_address'],
        $data['appointment_date'],
        $data['reason']
    );
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = handle_appoinment($patients_model, $_POST);

    if ($result) {
        echo "<script>alert('Appoinment successful!');</script>";
    } else {
        echo "<script>alert('Appoinment failed!');</script>";
    }
}

// If token is valid, load your view
require base_path("views/patients/appointment.view.php");

?>

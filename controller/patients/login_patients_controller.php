<?php 
require base_path("models/Patients_query.php");

$db   = new Database();
$conn = $db->connect();

$login_model = new Patients($conn);

function handle_login($login_model, $data){
    if(empty($data['email'])){
        echo "<script>alert('Enter email!');</script>";
        return null;
    }else if(empty($data['patients_password'])){
        echo "<script>alert('Enter password!');</script>";
        return null;
    }else{
        return $login_model->login_patients($data['email'], $data['patients_password']);
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $result = handle_login($login_model, $_POST);

    if ($result === true) {
        // echo "<script>alert('Login successful!');</script>";
        header("Location: /AnArchyClinical-Laboratory/patients/appointment");
exit();
    }else if ($result === false) {
        echo "<script>alert('Login failed!');</script>";
    }
}


require base_path("views/patients/login.view.php");?>
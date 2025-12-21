<?php 

require base_path("models/Admin_query.php");

$db   = new Database();
$conn = $db->connect();

$login_admin_model = new Admin($conn);

function handle_login_admin($login_admin_model, $data){
    if(empty($data['admin_email'])){
        echo "<script>alert('Enter email!');</script>";
        return null;
    }else if(empty($data['admin_password'])){
        echo "<script>alert('Enter password!');</script>";
        return null;
    }else{
        return $login_admin_model->login_admin($data['admin_email'], $data['admin_password']);
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $result = handle_login_admin($login_admin_model, $_POST);

    if ($result === true) {
        // echo "<script>alert('Login successful!');</script>";
        header("Location: /AnArchyClinical-Laboratory/admin/appointment-list");
exit();
    }else if ($result === false) {
        echo "<script>alert('Login failed!');</script>";
    }
}




require base_path("views/admin/login_admin_view.php"); ?>
<?php 

require base_path("models/Admin_query.php");

$db   = new Database();
$conn = $db->connect();

// model instance
$register_admin_model = new Admin($conn);

function handle_admin_register($register_admin_model, $data){
        return $register_admin_model->register_admin(
        $data['first_name'],
        $data['last_name'],
        $data['middle_name'],
        (int)$data['age'],
        $data['sex'],
        $data['admin_email'] ?? null,
        $data['admin_password'],
        $data['position']
    );  
}

//handle the request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = handle_admin_register($register_admin_model, $_POST);

    if ($result) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Registration failed!');</script>";
    }
}

require base_path("views/admin/register_admin_view.php");
?>

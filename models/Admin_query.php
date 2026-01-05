<?php

require base_path('vendor/autoload.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class Admin{
    private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }
        //Query admin
        public function display_admin_accounts(){
            $query = "SELECT * FROM admin_accounts";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // admin register
    public function register_admin(
    string $fname,
    string $lname,
    string $mname,
    int $age,
    string $sex = null,
    string $email,
    string $admin_password,
    string $position,
    string $access = 'admin'
    )
    { 
    try {
        $hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin_accounts 
                  (fname, lname, mname, age, sex, email, admin_password, position,access) 
                  VALUES 
                  (:fname, :lname, :mname, :age, :sex, :email, :admin_password, :position, :access)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':mname', $mname);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':admin_password', $hashed_password);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':access', $access);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "<pre>Insert failed: " . $e->getMessage() . "</pre>";
        return false;
        }
    }

        // display all appointments
    public function display_appointments(){
        try{

            $query = "SELECT * FROM appointment";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

        }catch(PDOException $e){

            echo "<pre>Error: " . $e->getMessage() . "</pre>";
            return false;

        }
    }

    //admin login

    public function login_admin($email, $admin_password){
        try{
        
        $query = "SELECT email, admin_password FROM admin_accounts WHERE email = :email LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('email', $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            //verify password
            if(password_verify($admin_password, $row['admin_password'])){
                $key = "secret_key";

               $payload = [
                    'iss' => 'http://localhost',
                    'aud' => 'http://localhost',
                    'iat' => time(),
                    'nbf' => time(),
                    'exp' => time() + 3600, // 24 hours// 1 hour expiration
                    'data' => [
                        'email' => $row['email'],
                        'access' => $row['access']
                    ]
                ];

                 $token = \Firebase\JWT\JWT::encode($payload, $key, 'HS256');

                setcookie("token", $token, [
                    'expires' => time() + 3600,
                    'path' => '/',
                    'secure' => false,      // only send over HTTPS
                    'httponly' => true,    // not accessible by JavaScript
                    'samesite' => 'Lax' // prevent CSRF
                ]);
                    return true;
        
            }else{
                return false; //incorrect password
            }
        }else{
            return false; //email not found
        }

        }catch(PDOException $e){
            echo "<pre>Login failed: " . $e->getMessage() . "</pre>";
            return false;
        }
    }

    // display appointmet details
    public function get_appointment_details(){
        
        try{

            if (isset($_GET['appointment_id'])) {
            // Show one appointment
                $appointment_id = $_GET['appointment_id'];
                $query = "SELECT * FROM appointment WHERE appointment_id = :appointment_id";
                $stmt = $this->conn->prepare($query);
                $stmt->execute(['appointment_id' => $appointment_id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC); // fetch single record

                return $result;

            }else{
                echo "No record found";
            }

        }catch(PDOException $e){

        }

    }

public function update_status($appointment_id, $appointment_status)
{
    try {
        $query = "UPDATE appointment 
                  SET appointment_status = :appointment_status 
                  WHERE appointment_id = :appointment_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':appointment_id', $appointment_id, PDO::PARAM_INT);
        $stmt->bindParam(':appointment_status', $appointment_status, PDO::PARAM_STR);

        return $stmt->execute();
    } catch (PDOException $e) {
        return false;
    }
}


}


?>
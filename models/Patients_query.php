<?php

require base_path('vendor/autoload.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


// Test a simple query
class Patients{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }
    //Query patients
    public function display_patients(){
        $query = "SELECT * FROM patients_accounts";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

//Query for register
public function register_patients(
    string $fname,
    string $lname,
    string $mname,
    int $age,
    string $sex = null,
    string $email,
    string $patients_password,
    string $access = 'user' // 0 means it's user
) {
    try {
        $hashed_password = password_hash($patients_password, PASSWORD_DEFAULT);

        $query = "INSERT INTO patients_accounts 
                  (fname, lname, mname, age, sex, email, patients_password, access) 
                  VALUES 
                  (:fname, :lname, :mname, :age, :sex, :email, :patients_password, :access)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':mname', $mname);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':patients_password', $hashed_password);
        $stmt->bindParam(':access', $access);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "<pre>Insert failed: " . $e->getMessage() . "</pre>";
        return false;
        }
    }

// handle login

public function login_patients($email, $patients_password){

    try{
        
        $query = "SELECT email, patients_password FROM patients_accounts WHERE email = :email LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('email', $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            //verify password
            if(password_verify($patients_password, $row['patients_password'])){
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


    // appoinment query

    public function appointment(
        string $fname,
        string $lname,
        string $mname, 
        int $age,
        string $sex,
        int $contact_number,
        string $patient_address,
        string $appointment_date,
        string $reason
    )
        {
            try{
                $query = "INSERT INTO appointment(fname, lname, mname, age, sex, patients_address, appointment_date, reason) VALUES(:fname, :lname, :mname, :age, :sex, :patients_address, :appointment_date, :reason)";

                    $stmt = $this->conn->prepare($query);

                    $stmt->bindParam(':fname', $fname);
                    $stmt->bindParam(':lname', $lname);
                    $stmt->bindParam(':mname', $mname);
                    $stmt->bindParam(':age', $age);
                    $stmt->bindParam(':sex', $sex);
                    $stmt->bindParam(':patients_address', $patient_address);
                    $stmt->bindParam(':appointment_date', $appointment_date);
                    $stmt->bindParam(':reason', $reason);
                    $stmt->execute();

                    return true;

            }catch(PDOException $e){

                echo "<pre>Insert failed: " . $e->getMessage() . "</pre>";
                return false;

            }
        }
}

?>

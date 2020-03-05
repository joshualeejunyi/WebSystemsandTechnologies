<?php
session_start();
authenticateUser();
function authenticateUser() {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $success = true;

    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        die($errorMsg);
        $success = false;
    } else {
        $sql = "SELECT * FROM members WHERE ";
        $sql .= "email='$email'";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $fname = $row["fname"];
            $lname = $row["lname"];
            $password = $row["password"];
            
            if (!password_verify($pwd, $password)) {
                $errorMsg = "Email not found or password doesn't match...";
                $success = false;
            }
            
        } else {
            $errorMsg = "Email not found or password doesn't match...";
            $success = false;
        }
        $result->free_result();
    }
    
    $conn->close();
    
    if($success == true) {
        $_SESSION["fname"] = $fname;
        $_SESSION["lname"] = $lname;
        $_SESSION["user"] = true;
        header('location: account.php');
    } 
    
}
?>
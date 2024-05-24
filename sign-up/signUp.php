<?php
require "../connection.php";

// Check if form is submitted
if(isset($_POST['add'])){ 
    $username = $_POST["username"];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $allemail = $conn->prepare("SELECT * FROM users ");
    $allemail->execute();


    // Check if fields are empty
    if(empty($username) || empty($email) || empty($password)){
       // If any field is empty, show an error message
       header("location: sign-up.php?error=You must fill in all fields");
       exit;
    } else {
        // Check if email already exists

        $existing = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $existing->execute([':email' => $email]);
        if($existing->rowCount() > 0){
            // If email already exists in the database, show an error message
            header("location: sign-up.php?error=The email is already registered");
            exit;
        } else {
            // Hash the password
            //$hashed_password = password_hash($password, PASSWORD_BCRYPT);
            if($allemail->rowCount() > 0){
                            // Insert user data into the database
                $insert = $conn->prepare("INSERT INTO users (username, email, pass_word, _role) VALUES (:username, :email, :pass, :ID_role)");
                $insert->execute([
                    ':username' => $username,
                    ':email' => $email,
                    ':pass' =>$password,
                    ':ID_role' => "User"
                ]);
            }else{
                            // Insert user data into the database
                $insert = $conn->prepare("INSERT INTO users (username, email, pass_word, _role) VALUES (:username, :email, :pass, :ID_role)");
                $insert->execute([
                    ':username' => $username,
                    ':email' => $email,
                    ':pass' =>$password,
                    ':ID_role' => "Admin"
                ]);
            }

            
            // Redirect to login page after successful registration
            header("Location: ../log-in/log_in.php");
            echo "good";
             echo $allemail->rowCount() ;
            exit; // Terminate further script execution
        }
    }
}
?>

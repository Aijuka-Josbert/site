<?php

 //error_checking;
//echo $password; ch3cks for errors
    //die(); 

$con=include('config/db_connect.php');

session_start();
//echo "here";

if(isset($_POST['signUp'])){
    $firstName = $conn->real_escape_string($_POST['fname']);
    $lastName = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $hashedPassword = md5($password);
    //file txt
    $open = fopen('register3.txt',"a");
    if (!$open) {
        echo "error ";
    }
    fwrite($open, "First name: " . $firstName . "\n" . "Last name: " . $lastName . "\n" ."Email: " . $email . "\n" . "Password: " .$hashedPassword . "\n");
    fclose($open);
    echo "Account created successful";
    header("Location: register.php");


    // //mysql en fellows
    $checkEmail = "SELECT * FROM users WHERE email='$email' ";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email already exists";
    } else {
        $insertQuery = "INSERT INTO users (FirstName, LastName, Email, Passwords) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";
        echo $insertQuery;        
        if($conn->query($insertQuery) === TRUE){
            //echo "Registration successful"; // Debugging output
            header("Location: register.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $hashedPassword = md5($password);
   
    if (file_exists('register3.txt')) {
        $file = file_get_contents('register3.txt');
        $details = explode("\n", $file);
        $stored_email = "";
        $stored_password = "";
        foreach ($details as $detail) {
            $detail = trim($detail);
            if (str_starts_with($detail, "Email: ")) {
                $stored_email = str_replace("Email: ", "", $detail);
            }
            if (str_starts_with($detail, "Password: ")) {
                $stored_password = str_replace("Password: ", "", $detail);
            }
            if ($stored_email === $email && $stored_password === $hashedPassword) {
                echo "login successful";
                header("Location: index.php");
                exit;
            }
        }
        echo "Invalid password or Email";
    } else {
        echo "File not found";
    }


    $check ="SELECT email, Passwords FROM users WHERE email ='$email' AND passwords= '$hashedPassword'";
       $query=$conn->query($check);
            if ($query->num_rows === 1) {
                $row = $query->fetch_assoc();

                // Debugging: Print the fetched row to verify its structure
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";

               // if (isset($row['passwords'])) {
                    //  Print the stored password hash
                    // echo "Stored password hash: " . $row['passwords'] . "<br>";
                    // echo "Entered password: " . $password . "<br>";
                //   echo $row;
                //   die();
                            $_SESSION['email'] = $row['email'];                
                            header("Location: index.php");
                            exit();
                      } else {
                           echo "Not Found, Incorrect Email or Password! ):😂";
                        }                  
}
<?php

    // Connect To The Database

    include 'php/connection.php';

    // Get Data From Form

    $full_name = explode(" ", $_POST["full-name"]);
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Split Full Name Into First & Last Name

    $first_name = $full_name[0];
    $last_name = $full_name[1];

    // Encrypt Password

    $encrypted_password = md5($password);

    // Check That User Email Doesn't Exist Already

    $select_stmt = "SELECT * FROM users WHERE Email = '$email'";
    $user_details = $conn->query($select_stmt);

    if ($user_details->num_rows > 0) {

        header('Location: error.php');
        exit();
        
    }

    // Run A SQL Command Against The Database
    // Insert User Details

/*     $insert_stmt = "INSERT INTO users (FirstName, LastName, Email, Password)
            VALUES ('$first_name', '$last_name', '$email', '$encrypted_password')"; */

    $conn->query($insert_stmt);

    // Redirect User To Login Page
    
    $url = 'login.php';
    header('Location: ' . $url);
    exit();

?>
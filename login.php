<?php

// Connect To The Database

include 'php/connection.php';

// Use Sessions

session_start();

// Extract User Data From Form

$email = $_POST['email'];
$password = $_POST['password'];

$encrypted_password = md5($password);

// Check If Such User Exists, With The Same Email & Password

$sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$encrypted_password'";
$user = $conn->query($sql);

// Store User Name In A Session If User Exists & Should The App

if ($user->num_rows == 1) {

    $user_details = $user->fetch_object();

    $_SESSION['user'] = $user_details->FirstName;
    $_SESSION['user_id'] = $user_details->ID;
    header('Location: add-order.php');
    exit();

}
    

else {

    header('Location: error.php');
    exit();

}

?>
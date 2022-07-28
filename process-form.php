<?php

// Connect To Database

include 'php/connection.php';


// Use Sessions

session_start();

// Get Order Details From The Form

$location = $_POST['location'];
$occupation = $_POST['occupation'];
$date = $_POST['date'];
$time = $_POST['time'];
$idcard = $_POST['idcard'];

$user_id = $_SESSION['user_id'];

// Insert Order Details Into The Database

$sql = "INSERT INTO orders (user_id, location, occupation, date, time, idcard) 
        VALUES ('$user_id', '$location', '$occupation', '$date', '$time', '$idcard')";


$conn->query($sql);

// Redirect User To The Homepage

header('Location: details.php');

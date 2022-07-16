<?php

// Connect To Database

include 'php/connection.php';

// Get Movie Details From The Form

$location = $_POST['location'];
$occupation = $_POST['occupation'];
$date = $_POST['date'];
$time = $_POST['time'];
$idcard = $_POST['idcard'];
$user_id = $_SESSION['user_id'];

// Insert Movie Details Into The Database

$sql = "INSERT INTO orders (location, occupation, date, time, idcard, user_id) 
        VALUES ('$location', '$occupation', '$date', '$time', '$idcard' ,'$user_id')";
        

$conn->query($sql);

// Redirect User To The Homepage

header('Location: details.php');

?>
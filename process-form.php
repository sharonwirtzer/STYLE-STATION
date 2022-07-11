<?php

// Connect To Database

include 'php/connection.php';

// Get Movie Details From The Form

$location = $_POST['location'];
$occupation = $_POST['occupation'];
$date = $_POST['date'];
$time = $_POST['time'];
$idcard = $_POST['idcard'];

// Insert Movie Details Into The Database

$sql = "INSERT INTO orders (location, occupation, date, time, idcard) 
        VALUES ('$location', '$occupation', '$date', '$time', '$idcard')";
        

$con->query($sql);

// Redirect User To The Homepage

header('Location: details.php');

?>
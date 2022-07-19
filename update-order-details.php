<?php

// Connect To The Database

include 'php/connection.php';

// Get Order ID

$id = $_POST['id'];

// Get All Data From Form

$location = $_POST['location'];
$occupation = $_POST['occupation'];
$date = $_POST['date'];
$time = $_POST['time'];
$idcard = $_POST['idcard'];

// Update Order Details

$sql = "UPDATE orders 
        SET location = '$location', occupation = '$occupation',date = '$date', time = '$time', idcard = '$idcard'
        WHERE id = '$id'";

$conn->query($sql);

// Redirect User To The Home Page

header('Location: details.php');

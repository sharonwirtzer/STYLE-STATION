<?php

// Connect To The Database

include 'php/connection.php';

// Delete Movie

$id = $_REQUEST['id'];

$sql = "DELETE FROM orders WHERE id = '$id'";
$conn->query($sql);

// Redirect User To The Home Page

header('Location: details.php');

?>
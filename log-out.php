<?php

// Use Sessions

session_start();

if (isset($_SESSION['FirstName'])) {

    session_destroy();
    header('Location: index.php');
    exit();
    
}

?>
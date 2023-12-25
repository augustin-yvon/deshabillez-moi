<?php
require_once '../Model/User.php';

session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $user->logOut();
}

// $fileName = $_SESSION['actual_page'];

// if ($fileName == 'index.php') {
//     $fileName = '../pages/login.php';
// }

// header("Location: $fileName");

header("Location: ../pages/login.php");
exit();

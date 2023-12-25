<?php
require_once '../Model/User.php';

session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $user->logOut();
}

header("Location: ../View/login.php");
exit();

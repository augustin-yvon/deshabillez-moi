<?php
require_once '../Model/User.php';

session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $user->logOut();
}

$fileName = $_SESSION['actual_page'];

if ($fileName == 'profile.php' || $fileName == 'index.php' || $fileName == 'admin.php') {
    $fileName = '../index.php';
}else{
    $fileName = "../View/" . $fileName;
}
header("Location: $fileName");
exit();
?>
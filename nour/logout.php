<?php
session_start();

if (isset($_COOKIE['Remember'])) {
    setcookie('Remember', '', -7000000);
    unset($_COOKIE['Remember']);
}
session_destroy();
header('location:login.php');
<?php
include 'conn.php';
session_start();

$_SESSION = array();

session_destroy();
header('Location: user.php');
exit;
?>

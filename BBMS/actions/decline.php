<?php include '../connection/connection.php'; 

session_unset();
session_destroy();

header("Location: ../login/login.php");



?>
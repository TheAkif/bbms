<?php include '../connection/connection.php'; ?>
<?php session_start(); ?>
<?php session_unset(); ?>
<?php session_destroy(); ?>
<?php header("Location: ../login/login.php");?>

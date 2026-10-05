<?php require_once __DIR__ . '/helpers.php'; ?>
<?php

session_start();

session_destroy();

header('location:home.php'); exit;

?>
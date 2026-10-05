<?php
// Include at the top of every admin page: only logged-in admins may continue.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['vid'])) {
    header('Location: index.php');
    exit;
}

<?php
// Database connection + small security helpers used across the site.

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';

mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$conn) {
    die('Could not connect to the database. Please check config.php.');
}
mysqli_set_charset($conn, 'utf8mb4');

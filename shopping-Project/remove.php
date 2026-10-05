<?php require_once __DIR__ . '/helpers.php'; ?>
<?php
session_start();
if (empty($_SESSION['aid'])) {
    header('Location: loginn.php');
    exit;
}
$cid = (int) $_SESSION['aid'];

include('./conn.php');

// First of all target in id from database table id. 

$ids = (int) ($_GET['id'] ?? 0);

// Delete Query

$deletequery = " DELETE FROM `cart` WHERE id={$ids} AND cid={$cid} ";

$query = mysqli_query($conn, $deletequery);

// Path or Location after deleting Data. 
// header('location:display.php'); exit;
if ($query) {

?>
    <script>
        window.location.href = 'cart.php'; //Will take you to Google.
    </script>
    <!-- header('location:loginn.php'); exit; -->
<?php

} else {
?>
    <script>
        alert('No!.');
    </script>

<?php
}

?>
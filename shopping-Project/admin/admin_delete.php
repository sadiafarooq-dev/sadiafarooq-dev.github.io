<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<?php

include('../conn.php');

// First of all target in id from database table id. 

$ids = (int) ($_GET['did'] ?? 0);

// Delete Query

$deletequery = " DELETE FROM `admin_register` WHERE id={$ids} ";

$query = mysqli_query($conn, $deletequery);

// Path or Location after deleting Data. 
// header('location:display.php'); exit;
if ($query) {

?>
    <script>
        window.location.href = 'admin.php'; //Will take you to Google.
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
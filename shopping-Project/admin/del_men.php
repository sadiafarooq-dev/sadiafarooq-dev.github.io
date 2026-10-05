<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<?php

    include ('../conn.php');

// First of all target in id from database table id. 

    $ids = (int) ($_GET['id'] ?? 0);

// Delete Query

    $deletequery = " DELETE FROM `details` WHERE id={$ids} ";

    $query = mysqli_query($conn, $deletequery);

// Path or Location after deleting Data. 
    // header('location:display.php'); exit;
    if($query){
    
header('location:display_men.php'); exit;

    }
    else{
        ?>
<script>
    alert('No!.');
</script>

<?php
    }

?>
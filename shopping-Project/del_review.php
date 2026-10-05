<?php require_once __DIR__ . '/helpers.php'; ?>
<?php
    session_start();
    if (empty($_SESSION['vid'])) {   // admins only
        header('Location: admin/index.php');
        exit;
    }

    include ('conn.php');

    $ids = (int) ($_GET['id'] ?? 0);


    $deletequery = " DELETE FROM `prod_reviews` WHERE id={$ids} ";

    $query = mysqli_query($conn, $deletequery);

    if($query){
    
header('location:product_review.php'); exit;

    }
    else{
        ?>
<script>
    alert('No!.');
</script>

<?php
    }

?>
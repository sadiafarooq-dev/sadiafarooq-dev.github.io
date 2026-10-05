<?php require_once __DIR__ . '/helpers.php'; ?>
UPDATE `cart` SET `id`='[value-1]',`pid`='[value-2]',`cid`='[value-3]',`name`='[value-4]',`description`='[value-5]',`price`='[value-6]',`image`='[value-7]',`quantity`='[value-8]' WHERE 1

<?php


if (isset($_POST['submit'])) {

    $idupdate = (int) ($_GET['id'] ?? 0);
    $name = esc($_POST['name'] ?? '');
    $dcrp = esc($_POST['description'] ?? '');
    $d_price = esc($_POST['dead-price'] ?? '');
    $s_price = esc($_POST['sale-price'] ?? '');
    $total = esc($_POST['amount'] ?? '');
    $categorry = esc($_POST['list'] ?? '');
    $sub_ctrgry = esc($_POST['sub_catgry'] ?? '');

    if (!empty($_FILES['profile']['name'])) {
        $image = $_FILES["profile"];
        $filename = esc(save_upload($image) ?: $row["image"]);   // safe, random file name (keeps old image if the upload is not a valid image)
    } else {
        $filename = esc($row["image"]);
    }


    $query = "UPDATE `details` SET `name`='$name',`description`='$dcrp',`dead`='$d_price',`sale`='$s_price',`total`='$total',`category`='$categorry',`sub-category`='$sub_ctrgry',`image`='$filename' WHERE  id ='$idupdate'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location:add_men.php'); exit;
    } else {
?>
        <script>
            alert("Sorry! Data not Inserted..");
        </script>

<?php
    }
}

?>
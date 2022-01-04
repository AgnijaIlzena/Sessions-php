<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>


<?php

if(!$_SESSION['login']){
    header("location:login.php");
    exit();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<section class="cookies container-fluid">
    <div class="row">
<ul>
<?php
foreach ($_SESSION['cart'] as $itemId) {
        if (isset($catalog[$itemId])) {
        ?>
        <li><?= $catalog[$itemId]['name'] ?></li>
        <?php
        }
    }
    ?>

</ul>

    </div>
</section>
<?php require 'inc/foot.php'; ?>

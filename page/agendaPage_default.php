<?php include('../page/template/header.php'); ?>

    <div class="p-2">
        <?php $today = getdate();


        echo "Nous sommes le " . checkday($today) . ' ' . date('d M',);

        ?>
    </div>
<?php include('../page/template/footer.php'); ?>
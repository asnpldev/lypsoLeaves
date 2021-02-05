<?php include('../page/template/header.php'); ?>

    <div class="card-header">
        AGENDA
    </div>
    <div class="card-body">
        <?php $today = getdate();


        echo "Nous somme le " .checkday($today) . " 5";

        ?>
    </div>

<?php include('../page/template/footer.php'); ?>
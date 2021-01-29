
<?php include ('../page/template/header.php'); ?>

    <div class="card-header">
        Gestion des congés
    </div>
    <div class="card-body">




        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>NOM : Prénom</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($actualRequests as $actualRequest){
                ?>
                <tr>
                    <td></td>
                    <td><?php echo $actualRequest['start'] ?></td>
                    <td><?php echo $actualRequest['end'] ?></td>
                    <td><?php echo $actualRequest['status']?></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<?php include ('../page/template/footer.php'); ?>
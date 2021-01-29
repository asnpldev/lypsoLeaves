
<?php include ('../page/template/header.php'); ?>

    <div class="card-header">
        Gestion des congés
    </div>
    <div class="card-body">




        <table class="table table-bordered">
            <thead>
            <tr>
                <th>NOM : Prénom</th>
                <th>Departement</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($actualRequests as $actualRequest){
                ?>
                <tr>
                    <td><?php echo strtoupper($actualRequest['lastname']) . " " . ucfirst(strtolower($actualRequest['firstname']))?></td>

                    <td><?php echo $actualRequest['nom'] ?></td>
                    <td><?php echo date('d/m/y', strtotime($actualRequest['start']))?></td>
                    <td><?php echo date('d/m/y', strtotime($actualRequest['end'])) ?></td>

                    <td><a class="btn bg-olive btn-xs">Accepter</a>
                        &nbsp;
                        <a class="btn bg-navy btn-xs">Annuler</a>
                        &nbsp;
                        <a class="btn bg-danger btn-xs">Annuler</a>

                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<?php include ('../page/template/footer.php'); ?>
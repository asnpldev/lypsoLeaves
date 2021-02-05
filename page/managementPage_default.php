<?php include('../page/template/header.php'); ?>

    <div class="card-header">
        Gestion des congés
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">

                <br>
                <?php foreach ($actualRequests as $actualRequest) {;
                    ?>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm"
                                         src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png"
                                         alt="user image">
                                    <span class="username">
                          <?php echo strtoupper($actualRequest['lastname']) . " " . ucfirst(strtolower($actualRequest['firstname'])) ?>

                        </span>
                                    <span class="description">À fait une demande de congés</span>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="user-block">


                                    <i class="fas fa-calendar-week"></i>

                                    <code><?php echo date('d/m/y', strtotime($actualRequest['start'])) ?></code>

                                    ➜ <code><?php echo date('d/m/y', strtotime($actualRequest['end'])) ?></code>

                                    <br><span class="description"
                                              style="margin-left: 0px;">Département: <code><?php echo $actualRequest['nom'] ?></code></span>


                                </div>
                            </div>
                            <div class="col-md-3">
                        <span style="float: right">
                        <a href="?route=management&action=accept&id=<?= $actualRequest['vacid'] ?>" class="badge bg-olive">Valider</a>&nbsp;
                        <a href="?route=management&action=decline&id=<?= $actualRequest['vacid'] ?>" class="badge bg-navy">Supprimer</a>
                            </span>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="col-lg-6">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Responsable</th>
                            <th>Nom/Prénom</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    </div>

<?php include('../page/template/footer.php'); ?>
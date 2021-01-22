<?php include('template/header.php');
?>

    <br>

    <div class="container font__inter">



        <div class="row">
            <div class="col-lg-6">
                <div class="jumbotron">
                    <h3 class="text-secondary">Connexion</h3>
                    <hr>
                    <?php if (!empty($message)) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php echo $message ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php } ?>
                    <form method="POST" action="?route=authenticate&action=login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="text" class="form-control" name="login" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Entrez votre login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe </label>
                            <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>

                        <button style="float: right;" type="submit" class="btn btn-primary">Connexion</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>

<?php include('template/footer.php'); ?>
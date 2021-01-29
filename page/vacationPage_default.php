<?php include ('../page/template/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= ENV['APP_NAME'] ?></title>
</head>
<body>
<form role="form" method="POST" action="?route=vacation&action=store">
    <div class="box-body">
        <div class="form-group">
            <label for="inputStartDate">Date de début de congé</label>
            <input type="date" class="form-control" id="inputStartDate" placeholder="Choose Date">
            <label for="inputEndDate">Date de fin de congé</label>
            <input type="date" class="form-control" id="inputEndDate" placeholder="Choose Date">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>

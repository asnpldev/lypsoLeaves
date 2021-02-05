<?php include('../page/template/header.php'); ?>
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <form role="form" method="POST" action="?route=vacation&action=store">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputStartDate">Date de début de congé</label>
                                <input type="date" name="inputStartDate" class="form-control" placeholder="Choose Date">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEndDate">Date de fin de congé</label>
                                <input type="date" name="inputEndDate" class="form-control" placeholder="Choose Date">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>N° de la demande</th>
                        <th>Date de début de congé</th>
                        <th>Date de fin de congé1</th>
                    </tr>
                    <?php
                    $html="";
                    var_dump($vacationRequest);
                    foreach ($vacationRequest as $vacationRequests)
                    {
                        $html.="<tr>\n";
                        $html.="<th>";
                        $html.=$vacationRequests['id'];
                        $html.="</th>\n";
                        $html.="<th></th>\n";
                        $html.="<th></th>\n";
                        $html.="</tr>";
                    }
                    echo $html

                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
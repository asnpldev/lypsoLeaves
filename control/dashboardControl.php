<?php

function dashboardControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            dashboardControl_defaultAction();
        break;
    }
}


function dashboardControl_defaultAction()
{
    $tabTitle="Tableau de bord";


    $actualConges = actualConges();
    include('../page/dashboardPage_default.php');
}



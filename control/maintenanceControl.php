<?php

function MaintenanceControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            MaintenanceControl_defaultAction();
        break;
    }
}


function MaintenanceControl_defaultAction()
{
    $tabTitle="Maintenance";


    include('../page/MaintenancePage_default.php');
}



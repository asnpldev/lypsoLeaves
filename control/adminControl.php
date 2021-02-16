<?php

function adminControl($userAction){
    switch ($userAction){
        case 'users':
            adminControl_userAction();
            break;
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            adminControl_defaultAction();
        break;
    }
}

function adminControl_userAction()
{
    $tabTitle="Utilisateurs";


    include('../page/adminPage_users.php');
}



function adminControl_defaultAction()
{
    $tabTitle="Administration";

    $treatmentCount = treatmentWaitingRowCount();
    $allTreatmentsCount = treatmentAllRowCount();
    $userCount = userRowCount();
    include('../page/adminPage_default.php');
}



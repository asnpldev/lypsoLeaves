<?php

function adminControl($userAction){
    switch ($userAction){
        case 'newuser':
            adminControl_newUserAction();
            break;
        case 'users':
            adminControl_userAction();
            break;
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            adminControl_defaultAction();
        break;
    }
}


function adminControl_newUserAction()
{
    $tabTitle="Nouvel utilisateur";
    include('../page/adminPage_newuser.php');
}



function adminControl_userAction()
{
    $tabTitle="Utilisateurs";


    $userLists = admin_user_getAll();
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



<?php

function adminControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            adminControl_defaultAction();
        break;
    }
}


function adminControl_defaultAction()
{
    $tabTitle="Admin";


    include('../page/admin_AdminPage_default.php');
}



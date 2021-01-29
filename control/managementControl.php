<?php


function managementControl($userAction)
{
    switch ($userAction) {
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            managementControl_defaultAction();
            break;
    }
}


function managementControl_defaultAction()
{
    $tabTitle = "Management";
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}



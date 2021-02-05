<?php


function managementControl($userAction)
{
    switch ($userAction) {
        // case à ajouter pour chaque nouvelle action souhaitée
        case 'accept':
            $tempId = $_GET['id'];
            managementData_AcceptRequest($tempId);
            managementControl_defaultAction();
            break;
        case 'decline';
            $tempId = $_GET['id'];
            managementData_DeclineRequest($tempId);
            managementControl_defaultAction();
            break;
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



<?php


function managementControl($userAction)
{
    switch ($userAction) {
        case 'accept':
            $tempId = $_GET['id'];
            managementData_AcceptRequest($tempId);
            managementControl_MessageAction(0, "La demande #".$tempId." à bien été accepté !");
            break;
        case 'decline';
            $tempId = $_GET['id'];
            managementData_DeclineRequest($tempId);
            managementControl_MessageAction(0, "La demande #".$tempId." à bien été refusée!");
            break;
        default:
            managementControl_defaultAction();
            break;
    }
}


function managementControl_MessageAction(int $id, string $content)
{
    $tabTitle = "Management";
    $type=$id;
    $message=$content;
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}


function managementControl_defaultAction()
{
    $tabTitle = "Management";
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}



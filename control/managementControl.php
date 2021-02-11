<?php


function managementControl($userAction)
{
    switch ($userAction) {
        case 'accept':
            $tempId = $_GET['id'];
            managementData_AcceptRequest($tempId);
            managementControl_MessageAction(0, "La demande #".$tempId." à bien été accepté !", $tempId);
            break;
        case 'decline';
            $tempId = $_GET['id'];
            managementData_DeclineRequest($tempId);
            managementControl_MessageAction(0, "La demande #".$tempId." à bien été refusée!", $tempId);
            break;
        case 'cancel';
            $tempId = $_GET['id'];
            managementData_CancelRequest($tempId);
            managementControl_MessageAction(1, "La demande #".$tempId." à été placée en attente !", $tempId);
            break;
        default:
            managementControl_defaultAction();
            break;
    }
}


function managementControl_MessageAction(int $id, string $content, int $tempId)
{
    $tabTitle = "Management";
    $type=$id;
    $message=$content;
    $cancelId=$tempId;
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}


function managementControl_defaultAction()
{
    $tabTitle = "Management";
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}



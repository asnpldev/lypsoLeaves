<?php


function managementControl($userAction)
{
    switch ($userAction) {
        case 'overview':
            if ($_SESSION['user']->getPermPower() >= MANAGEMENT_OVERVIEW) {
                if (isset($_GET['id'])) {

                    $getId = $_GET['id'];
                    managementOverview_viewAction($getId);


                }
            } else {
                managementControl_MessageActionDefault(2, "Erreur, vous n'avez pas la permission de visiter la page d'agenda!");

            }
            break;
        case 'filter':
            if (isset($_POST['searchbar'])) {

                if (strlen($_POST['searchbar']) >= 30) {

                    managementControl_MessageAction(2, 'Vous ne pouvez pas chercher plus de 25 caractères', 0);
                } else if (strlen($_POST['searchbar']) <= 0) {
                    managementControl_MessageAction(2, 'Vous ne pouvez pas faire une recherche vide', 0);
                } else {
                    $sb = htmlspecialchars($_POST['searchbar']);
                    managementControl_searchAction($sb);
                }


            }
            break;
        case 'accept':
            if ($_SESSION['user']->getPermPower() >= MANAGEMENT_MANAGE) {
                if (isset($_GET['id'])) {
                    $tempId = $_GET['id'];
                    managementData_AcceptRequest($tempId);
                    managementData_StoreManagerAcceptRequest($tempId, $_SESSION['user']->getId());
                    managementControl_MessageAction(0, "La demande #" . $tempId . " à bien été accepté !", $tempId);
                } else {

                    managementControl_defaultAction();

                }
            } else {

                managementControl_MessageActionDefault(2, "Erreur, vous n'avez pas la permission!");
            }

            break;
        case 'decline';
            if ($_SESSION['user']->getPermPower() >= MANAGEMENT_MANAGE) {
                if (isset($_GET['id'])) {
                    $tempId = $_GET['id'];
                    managementData_DeclineRequest($tempId);
                    managementData_StoreManagerAcceptRequest($tempId, $_SESSION['user']->getId());
                    managementControl_MessageAction(0, "La demande #" . $tempId . " à bien été refusée!", $tempId);
                } else {

                    managementControl_defaultAction();

                }
            } else {

                managementControl_MessageActionDefault(2, "Erreur, vous n'avez pas la permission!");
            }
            break;
        case 'cancel';
            if ($_SESSION['user']->getPermPower() >= MANAGEMENT_MANAGE) {
                if (isset($_GET['id'])) {
                    $tempId = $_GET['id'];
                    managementData_CancelRequest($tempId);
                    managementControl_MessageAction(1, "La demande #" . $tempId . " à été placée en attente !", $tempId);
                } else {

                    managementControl_defaultAction();

                }
            } else {

                managementControl_MessageActionDefault(2, "Erreur, vous n'avez pas la permission!");
            }
            break;
        default:
            managementControl_defaultAction();
            break;
    }
}


function managementOverview_viewAction($id)
{

    $tabTitle = "Absence #" . $id;
    $datas = managementData_overviewRequest($id);
    $managerData = managementData_overviewManagerRequest($id);
    include('../page/managementPage_overview.php');
}

function managementControl_MessageActionDefault(int $id, string $content)
{
    $tabTitle = "Management";
    $type = $id;
    $message = $content;
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}


function managementControl_MessageAction(int $id, string $content, int $tempId)
{
    $tabTitle = "Management";
    $type = $id;
    $message = $content;
    $cancelId = $tempId;
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}

function managementControl_searchAction($sb)
{
    $tabTitle = "Management";
    $filter = $sb;
    $actualRequests = managementRequests_getSearch($sb);
    include('../page/managementPage_default.php');
}


function managementControl_defaultAction()
{
    $tabTitle = "Management";
    $actualRequests = managementRequests_getAll();
    include('../page/managementPage_default.php');
}



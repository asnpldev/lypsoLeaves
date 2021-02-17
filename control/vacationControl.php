<?php

function vacationControl($userAction)
{
    switch ($userAction) {

        case 'store':
            vacationControl_storeAction();
            break;
        case 'requests':
            vacationControl_requestAction();
            break;
        case 'history':
            vacationControl_historyAction();
            break;
        default:
            vacationControl_defaultAction();
            break;
    }
}

function vacationControl_requestAction()
{
    $tabTitle = "Vos demandes en attente";
    $vacationRequest = user_findVacations();
    include('../page/vacationPage_requests.php');
}

function vacationControl_defaultAction()
{
    $tabTitle = "Demandes d'absence";
    $vacationRequest = user_findVacations();
    include('../page/vacationPage_default.php');
}

function vacationControl_storeAction()
{


    if (!empty($_POST['inputStartDate']) and !empty($_POST['inputEndDate']) and !empty($_POST['inputReason'])) {


        if (strlen($_POST['inputComment']) > 50) {

            $message = "Votre commentaire ne dois pas dépasser 50 caractères !";
            $type = 1;

        } else {

            $datas['start'] = $_POST['inputStartDate'];
            $datas['end'] = $_POST['inputEndDate'];
            $datas['reason'] = $_POST['inputReason'];
            $datas['comment'] = htmlspecialchars($_POST['inputComment']);

            $dbExec = vacation_storeAction($datas);

            if ($dbExec > 0) {
                $message = "Votre demande d'absence à été envoyée avec succès.";
                $type = 0;
            } else {
                $message = "Il y a un problème dans la demande d'absence, veuillez vérifier quelle soit bien valide !";
                $type = 1;
            }
        }
    } else {

        $message = "Il y a un problème dans la demande d'absence, veuillez vérifier quelle soit bien valide !";
        $type = 1;

    }

    $tabTitle = "Demandes d'absence";
    $vacationRequest = user_findVacations();
    include('../page/vacationPage_default.php');
}

function vacationControl_historyAction()
{
    $tabTitle = "Historique des demandes";
    $vacationHistoryRequest = user_findHistoryVacation();
    include('../page/vacationPage_history.php');
}


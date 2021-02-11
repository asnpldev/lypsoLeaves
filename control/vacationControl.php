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
    $tabTitle = "Demande de congés";
    $vacationRequest = user_findVacations();
    include('../page/vacationPage_default.php');
}

function vacationControl_storeAction()
{

    $datas['start'] = $_POST['inputStartDate'];
    $datas['end'] = $_POST['inputEndDate'];

    $dbExec = vacation_storeAction($datas);

    if ($dbExec > 0) {
        $message = "Votre demande de  congé à été envoyée avec succès.";
        $type = 0;
    } else {
        $message = "Il y a un problème dans la demande de congé, veuillez vérifier quelle soit bien valide !";
        $type = 1;
    }


    $tabTitle = "Demande de congés";
    $vacationRequest = user_findVacations();
    include('../page/vacationPage_default.php');
}




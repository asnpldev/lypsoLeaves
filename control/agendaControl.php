<?php

function agendaControl($userAction)
{
    switch ($userAction) {
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            agendaControl_defaultAction();
            break;
    }
}


function agendaControl_defaultAction()
{
    $tabTitle = "Agenda";


    $message = "";

    if (!empty($_POST['start']) and !empty($_POST['end'])) {

        $dateStart = $_POST['start'];
        $dateEnd = $_POST['end'];
        $checkingActualVacations = imCheckingVacation($dateStart, $dateEnd);
        $totalReturn = count($checkingActualVacations); //Compte combien il y à d'élements retournés par la requête
        $countStart = new DateTime($dateStart);
        $countEnd = new DateTime($dateEnd);
        $countRowsDays = $countStart->diff($countEnd)->format('%a');
        $message = "Requête éffectuée avec succès!";
        $type = 0;

    } else {

        $message = "Aucun";
        $type = 1;

    }


    include('../page/agendaPage_default.php');
}


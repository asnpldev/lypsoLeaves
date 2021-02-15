<?php

function agendaControl($userAction)
{
    switch ($userAction) {
        // case à ajouter pour chaque nouvelle action souhaitée
        case 'default':
            agendaControl_defAction();
            break;
        default:
            agendaControl_defaultAction();
            break;
    }
}


function agendaControl_defaultAction()
{
    $tabTitle = "Origin";




    if(isset($_POST['start']) AND isset($_POST['end'])){

        $dateStart = $_POST['start'];
        $dateEnd = $_POST['end'];
        $checkingActualVacations = imCheckingVacation($dateStart, $dateEnd);

        $countStart = new DateTime($dateStart);
        $countEnd = new DateTime($dateEnd);
        $countRowsDays = $countStart->diff($countEnd)->format('%a');

    }



    include('../page/agendaPage_default.php');
}

function agendaControl_defAction()
{


    $actualConges = actualConges();
    $tabTitle = "Tableau de bord";
    include('../page/agendaActualPage_default.php');
}



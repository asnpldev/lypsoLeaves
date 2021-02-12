<?php

function agendaControl($userAction){
    switch ($userAction){
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
    $tabTitle="Tableau de bord";
    include('../page/agendaPage_default.php');
}

function agendaControl_defAction()
{

    $actualConges=actualConges();
    $tabTitle="Tableau de bord";
    include('../page/agendaActualPage_default.php');
}



<?php

function agendaControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
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



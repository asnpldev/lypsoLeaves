<?php

function viewControl($userAction)
{
    switch ($userAction) {
        case 'overview':
            if ($_SESSION['user']->getPermPower() >= VIEW_PAGE) {
                if (isset($_GET['id'])) {

                    $getId = $_GET['id'];
                    managementOverview_viewAction($getId);


                }
            } else {
                managementControl_MessageActionDefault(2, "Erreur, vous n'avez pas la permission de visiter la page d'agenda!");

            }
            break;
        default:
            dashboardControl_defaultAction();
            break;
    }
}




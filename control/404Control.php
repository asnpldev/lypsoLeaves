<?php

function ErrorExpControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
        default:
            ErrorExp_defaultAction();
        break;
    }
}


function ErrorExp_defaultAction()
{
    $tabTitle="404";


    include('../page/404Page_default.php');
}



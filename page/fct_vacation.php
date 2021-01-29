<?php

function vacation_getStatusLabel($statusId)
{
    $data = [0=>'En attente',
        '1'=>'Accepté',
        '2'=>'Refusé'];
    return $data[$statusId];
}
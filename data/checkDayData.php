<?php


function checkday($element)
{
    switch ($element['weekday']) {
        case 'Monday';
            return 'Lundi';
            break;
        case 'Tuesday':
            return 'Mardi';
            break;
        case 'Wednesday':
            return 'Mercredi';
            break;
        case 'Thursday';
            return 'Jeudi';
            break;
        case 'Friday':
            return 'Vendredi';
            break;
        case 'Saturday':
            return 'Samedi';
            break;
        case 'Sunday':
            return 'Dimanche';
            break;


        default:
            break;
    }

}

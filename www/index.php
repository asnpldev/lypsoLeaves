<?php


//DB CONNECTION
include('../config/env.php');


//DATAS
include('../data/Connection.php');
include('../data/userData.php');
include('../data/vacationData.php');
include('../data/managementData.php');
include('../data/checkDayData.php');
include('../data/adminData.php');
include('../data/pendingData.php');

//PERMISSION SYSTEM
include('../permissions/config.php');


//CLASS
include('../data/User.php');


//CONTROLLERS
include('../control/authenticateControl.php');
include('../control/dashboardControl.php');
include('../control/vacationControl.php');
include('../control/managementControl.php');
include('../control/agendaControl.php');
include('../control/404Control.php');
include('../control/adminControl.php');


session_start();

$route = '';

if (isset($_GET['route'])) {
    $route = $_GET['route'];
}

$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


if (!isset($_SESSION['user'])) {
    $route = 'authenticate';
}


switch ($route) {
    case 'dashboard':
        dashboardControl($action);
        break;
    case 'management':
        if ($_SESSION['user']->getPermPower() >= MANAGEMENT_PAGE) {
            managementControl($action);
        } else { header('location:.?route=dashboard'); }

        break;
    case 'vacation':
        if ($_SESSION['user']->getPermPower() >= VACATION_PAGE) {
            vacationControl($action);
        } else {header('location:.?route=dashboard'); }

        break;
    case 'agenda':
        if ($_SESSION['user']->getPermPower() >= AGENDA_PAGE) {
            agendaControl($action);
        } else { header('location:.?route=dashboard'); }

        break;
    case 'authenticate':
        authenticateControl($action);
        break;

    case 'admin':
        if ($_SESSION['user']->getPermPower() >= ADMIN_PAGE) {
            adminControl($action);
        } else { header('location:.?route=dashboard'); }

        break;
    default:
        ErrorExpControl($action);
        break;
}
//}



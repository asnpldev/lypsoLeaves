<?php


//error_reporting(E_ALL);
//ini_set('display_errors',true);
//ini_set('display_startup_errors',true);

//DB CONNECTION
include('../config/env.php');


//DATAS
include('../data/Connection.php');
include('../data/userData.php');
include('../data/vacationData.php');
include('../data/managementData.php');

//CLASS
include('../data/User.php');


//CONTROLLERS
include('../control/authenticateControl.php');
include('../control/dashboardControl.php');
include('../control/vacationControl.php');
include('../control/managementControl.php');
session_start();

$route='';

if (isset($_GET['route'])) {
    $route=$_GET['route'];
}

$action='';

if (isset($_GET['action'])) {
    $action=$_GET['action'];
}


if (!isset($_SESSION['user'])){
    $route='authenticate';
}

switch ($route){
    case 'dashboard':
        dashboardControl($action);
    break;
    case 'management':
        managementControl($action);
    break;
    case 'user':
//        userControl($action);
    break;
    case 'vacation':
        vacationControl($action);
    break;
    case 'authenticate':
        authenticateControl($action);
    break;
    default :
        echo "<p>La route spécifiée n'existe pas !</p>";
    break;
}




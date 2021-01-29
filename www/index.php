<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('display_startup_errors',true);


include('../config/env.php');
include('../data/Connection.php');
include('../data/userData.php');
include('../control/authenticateControl.php');
include('../control/dashboardControl.php');
include('../control/vacationControl.php');
include ('../page/fct_date.php');
include ('../page/fct_vacation.php');

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
    case 'department':
//        departmentControl($action);
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




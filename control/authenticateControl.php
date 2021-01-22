<?php

function authenticateControl($userAction)
{
    switch ($userAction) {
        case "login":
            authenticateControl_loginAction();
            break;
        case "logout":
            authenticateControl_logoutAction();
            break;

        default:
            authenticateControl_defaultAction();
            break;

    }
}

function authenticateControl_defaultAction()
{
    $tabTitle = "Connexion";
    $message = '';
    include('../page/authenticatePage_default.php');
}

function authenticateControl_loginAction()
{
    $mail = $_POST['login'];
    $pwd = hash('sha1', $_POST['pwd']);


    $user = userData_findOneWithCredentials($mail, $pwd);

    if (empty($user)) {
        $message = "Vos identifiants sont incorrects. Merci de réessayer";
        $tabTitle = "Connexion";
        include('../page/authenticatePage_default.php');

    } else {
        if ($user[0]['actif']) {
            $_SESSION['id'] = $user[0]['id'];
            $_SESSION['nom'] = $user[0]['nom'];
            $_SESSION['prenom'] = $user[0]['prenom'];



            header('location:?route=dashboard');

        } else {
            $message = "Vous n'êtes pas autorisé à accéder à l'application. Veuillez contacter votre administrateur.";
            $tabTitle = "Connexion";
            include('../page/authenticatePage_default.php');
        }
    }


}

function authenticateControl_logoutAction()
{
    unset($_SESSION);
    session_destroy();
    header('location:?route=authenticate');
}
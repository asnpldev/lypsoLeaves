<!DOCTYPE html>

<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= ENV['APP_NAME'] ?> &mdash; <?= $tabTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../page/css/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>body {font-family: 'Inter';}
        ::-webkit-scrollbar {width: 10px;}
        ::-webkit-scrollbar-track {background: #f1f1f1;}
        ::-webkit-scrollbar-thumb {background: #1F2937;}
        ::-webkit-scrollbar-thumb:hover {background: #1D4ED8;}</style>


</head>
<body>
<nav class="bg-gray-900">
    <div class="max-w-12xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                     <span
                             class="text-gray-500 font-regular px-2 inline-flex text-sm leading-5 rounded-md mr-5">Connecté(e) en tant que :  <?= $_SESSION['user']->getFmName() . ' ' . $_SESSION['user']->getFName() ?></span>


                </div>

            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <a href="?route=authenticate&action=logout"
                       class="text-gray-100 font-bold bg-gray-900 px-2 inline-flex text-xs leading-5 rounded-md mr-1">Deconnexion</a>


                    <div class="ml-3 relative">
                        <div>
                            <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="../page/img/boy.svg">
                            </button>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

</nav>


<?php include('../page/template/menu.php'); ?>



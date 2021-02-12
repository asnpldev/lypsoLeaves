<?php

$temp = $_GET['route'];
?>

<div class="grid grid-cols-12">
    <div class="col-span-3">

        <div class="grid grid-cols-12">


            <div class="col-span-6 bg-gray-800 p-3 h-screen">


                <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                    <a href="?route=dashboard"
                       class="<?php if ($temp == "dashboard") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900 "><i
                                class="fas fa-columns mr-4"></i> Tableau
                        de bord</a>
                </div>

                <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                    <a href="?route=management"
                       class="<?php if ($temp == "management") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                class="fas fa-tasks mr-4"></i>Management</a>
                </div>

                <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                    <a href="?route=vacation"
                       class="<?php if ($temp == "vacation") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                class="fas fa-map-marker mr-4"></i>Demande de congés</a>
                </div>

                <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                    <a href="?route=agenda"
                       class="<?php if ($temp == "agenda") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                class="fas fa-calendar-week mr-4"></i>Agenda</a>
                </div>


                <?php if ($_SESSION['user']->getAdmin() == 1) { ?>

                    <div class="my-12">
                        <hr class="border-gray-300 ml-6 w-1/6">
                    </div>


                    <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                        <a href="?route=admin"
                           class="<?php if ($temp == "admin") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                    class="fas fa-tools mr-4"></i>Administration</a>
                    </div>

                    <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                        <a href="?route=maintenance"
                           class="<?php if ($temp == "maintenance") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                    class="fas fa-pause mr-4"></i>Maintenance</a>
                    </div>

                    <div class="my-12">
                        <hr class="border-gray-300 ml-6 w-1/6">
                    </div>


                    <div class="w-full text-left m-4 transition duration-200 ease-in-out transform hover:translate-x-2">
                        <a href="?route=sandbox"
                           class="<?php if ($temp == "sandbox") { ?>text-indigo-300<?php } else { ?> text-gray-300 <?php } ?> px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-900"><i
                                    class="fas fa-umbrella-beach mr-4"></i>Sandbox</a>
                    </div>
                <?php } ?>


            </div>
            <div class="col-span-6 bg-gray-200">

                <?php
                switch ($temp) {
                    case 'management':
                        include('modules/managementModule.php');
                        break;
                    case 'dashboard':
                        include('modules/dashboardModule.php');
                        break;
                    case 'vacation':
                        include('modules/vacationModule.php');
                        break;
                    case 'admin':
                        include('modules/adminModule.php');
                        break;
                    case 'agenda':
                        include('modules/agendaModule.php');
                        break;

                    default:
                        include('modules/defaultModule.php');
                        break;

                }


                ?>

            </div>
        </div>


    </div>
    <div class="col-span-9">

<?php

$temp = $_GET['route'];
?>

<div class="grid grid-cols-12">
    <div class="col-span-3">

        <div class="grid grid-cols-12">


            <div class="col-span-6 bg-gray-800 h-screen p-3">


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

                    default:
                        include('modules/defaultModule.php');
                        break;

                }


                ?>

            </div>
        </div>


    </div>
    <div class="col-span-9">

<?php include('../page/template/header.php'); ?>


<?php //$today = getdate();
//
//
//        echo "Nous sommes le " . checkday($today) . ' ' . date('d M',);
//
//        ?>


    <div class="bg-gray-50">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                <?= $tabTitle ?>
            </h3>
            <p class="mt-1 max-w-2xl text-sm font-regular text-gray-500">

                <small>
            <nav class="font-sm" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">

                    <li class="flex items-center">
                        <a href="?route=management">Management</a>

                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="?route=agenda">Agenda</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li>
                        <span class="text-gray-500" aria-current="page">Rechercher une demande</span>
                    </li>
                </ol>
            </nav>
            </small>
            </p>
        </div>
    </div>


    <div class="mt-5 bg-gray-50 border-t border-gray-300 md:mt-0 md:col-span-2">

        <div class="overflow-hidden sm:rounded-md">

            <div class="grid grid-cols-12">

                <div class="col-span-6">
                    <form role="form" method="POST" action="?route=agenda&action=checkvacation">
                        <div class="grid grid-cols-12">
                            <div class="col-span-6 p-2 mb-3">

                                <label for="first_name" class="block text-sm font-medium text-gray-700"> Date de
                                    début</label>
                                <input type="date" name="start" autocomplete="off"
                                       class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                            </div>
                            <div class="col-span-6 p-2 border-r border-gray-300">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Date de
                                    fin</label>
                                <input type="date" name="end" autocomplete="off"
                                       class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                            </div>


                            <div class="col-span-12 border-r border-gray-300">
                                <div class="px-4 py-3 bg-gray-100 text-right">
                                    <button type="submit"
                                            class="inline-flex justify-center transition duration-200 ease-in-out transform hover:translate-x-2 py-1 px-2 border border-transparent shadow-sm text-sm font-medium rounded text-indigo-600 bg-indigo-200 hover:bg-indigo-400 hover:text-indigo-900 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Confirmer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-span-6">
                    <form role="form" method="POST" action="?route=agenda&action=checkvacation">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="col-span-6 p-2">

                                <label for="first_name" class="block text-sm font-medium text-gray-700"> Rechercher
                                    (OFF)</span>
                                </label>
                                <input type="text" placeholder="Exemple: Sebastien" name="searchAgenda"
                                       autocomplete="off"
                                       class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                            </div>
                            <!--                                    <div class="col-span-6  p-2">-->
                            <!--                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Date de-->
                            <!--                                            fin<sup><i-->
                            <!--                                                        class="fas fa-asterisk text-blue-500 text-xs"></i></sup></label>-->
                            <!--                                        <input type="date" name="end" autocomplete="family-name"-->
                            <!--                                               class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">-->
                            <!---->
                            <!--                                    </div>-->


                            <div class="col-span-12">
                                <div class="px-4 py-3 bg-gray-100 text-right">
                                    <button type="submit"
                                            class="inline-flex justify-center transition duration-200 ease-in-out transform hover:translate-x-2 py-1 px-2 border border-transparent shadow-sm text-sm font-medium rounded text-indigo-600 bg-indigo-200 hover:bg-indigo-400 hover:text-indigo-900 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Chercher
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>


    </div>


<?php


//Script qui calcul le temps (en jours entre les deux dates)
if (isset($countRowsDays)) {
    $intDays = (int)$countRowsDays;
} ?>


<?php

if (isset($_POST['start']) and isset($_POST['end']) and isset($intDays)) { ?>


    <div class="px-4 py-3 bg-gray-100 border-t border-gray-300 sm:px-6">


        <?= $totalReturn ?> résultat(s) pour : <?= date('d/m/y', strtotime($_POST['start'])) ?>

        <i class="fas fa-long-arrow-alt-right text-gray-700"></i>

        <?= date('d/m/y', strtotime($_POST['end'])) ?> <small>(<?= $intDays ?> Jours d'intervalle)</small>


    </div>
<?php }

?>

    <div class="p-3">
        <div class="grid grid-cols-12 gap-1">
            <?php


            //Boucle qui cherche toutes les demandes acceptés entre les dates sélectionnées.
            if (isset($checkingActualVacations)) {
                foreach ($checkingActualVacations as $checkingActualVacation) {


                    ?>

                    <div class="col-span-3">

                        <div class="bg-blue-50 rounded p-7 text-gray-700 transform transition duration-200 hover:scale-105 hover:bg-blue-100">
                            <a href="?route=management&action=overview&id=<?= $checkingActualVacation['vacation_id'] ?>"
                               class="p-8">

                                <i class="fas fa-calendar-day text-2xl text-gray-500 mr-1 float-left"></i>


                                <span class="bg-gray-300 px-2.5 rounded-full float-left">Du <?= date('d/m/y', strtotime($checkingActualVacation['start'])) ?>
                                au
                               <?= date('d/m/y', strtotime($checkingActualVacation['end'])) ?></span>
                                <br>
                                <span href="#"
                                      class="text-blue-600"><?= $checkingActualVacation['lastname'] . ' ' . $checkingActualVacation['firstname'] ?></span>
                                &mdash; <small><?= $checkingActualVacation['nom'] ?></small>
                            </a>
                        </div>


                    </div>


                    <?php
                }
            }
            ?>

        </div>
    </div>


<?php include('../page/template/footer.php'); ?>
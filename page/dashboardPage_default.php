<?php include('../page/template/header.php'); ?>


<!--    <div class="bg-blue-600">-->
<!--        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">-->
<!--            <div class="flex items-center justify-between flex-wrap">-->
<!--                <div class="w-0 flex-1 flex items-center">-->
<!--                    <span class="flex p-2 rounded-lg bg-blue-800">-->
<!---->
<!---->
<!---->
<!--                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"-->
<!--                             stroke="currentColor">-->
<!--                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
<!--                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>-->
<!--                            </svg>-->
<!--                    </span>-->
<!--                                <p class="ml-3 font-medium text-white truncate">-->
<!--                        <span class="hidden md:inline">-->
<!--                            Votre connexion à été enregistrée pour une raison de sécurité.-->
<!--                          </span>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">-->
<!--                    <a href="?route=faq&action=iplogger"-->
<!--                       class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-blue-600 bg-white hover:bg-indigo-50">-->
<!--                        Voir plus-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <div class="p-2">
        <div class="grid grid-cols-12">

            <div class="col-span-6">
                <?php if (isset($actualConges[0])) { //SI LA PERSONNE EST EN CONGES

                    $absenceStart = new DateTime(date('Y-m-d'));
                    $absenceEnd = new DateTime($actualConges[0]['end']);
                    $days = $absenceStart->diff($absenceEnd)->format('%a');


                    ?>

                    <div class="grid grid-cols-12 gap-10 w-full p-5 bg-gradient-to-r from-purple-500 to-blue-700 h-28 rounded-3xl">
                        <div class="col-span-4">
                            <i class="far fa-sparkles text-6xl ml-20 mt-2 text-white"></i>
                            <!--<img src="../page/img/gotcongee.png" class="ml-10 w-28">-->
                        </div>
                        <div class="col-span-8">
                            <h4 class="font-semibold text-white text-xl">Vous êtes actuellement en absence</h4>
                            <p class="text-white">Le début de votre absence est
                                du <?= date('d/m/y', strtotime($actualConges[0]['start'])) ?>
                                jusqu'au <?= date('d/m/y', strtotime($actualConges[0]['end'])) ?>, il vous reste
                                encore <?= $days ?> jour(s) d'absence(s)</p>
                        </div>


                    </div>

                    <br>


                    <?php
                } else { //SINON ?>


                    <div class="grid grid-cols-12 gap-10 w-full text-white p-5 bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl h-28">
                        <div class="col-span-4">
                            <i class="fa fa-book text-6xl ml-20 mt-2  text-gray-700"></i>
                        </div>
                        <div class="col-span-8">
                            <h4 class="font-semibold text-white text-xl">Aucune absence en ce moment</h4>
                            <p class="text-white">Besoin de prendre une absence ? Cliquez <a href="?route=vacation"
                                                                                             class="bg-white px-2 rounded text-gray-900 font-bold">ici</a>
                            </p>
                        </div>


                    </div>


                <?php } ?>
            </div>
            <div class="col-span-6">


            </div>

        </div>


<!--        --><?php
//
//        foreach ($iplogger as $log) {
//            ?>
<!---->
<!---->
<!--            <div class="flex items-center">-->
<!--                <div class="flex-shrink-0 h-10 w-10">-->
<!---->
<!---->
<!--                    <span class="bg-blue-700 px-1 py-0.5 text-white text-xs rounded uppercase float-left mt-2.5 mr-1.5 h-7 w-7  text-center">-->
<!---->
<!--                        <i class="far fa-clock mt-1.5"></i>-->
<!--                    </span>-->
<!--                </div>-->
<!--                <div class="ml-1">-->
<!--                    <div class="text-sm font-medium text-gray-900">-->
<!--                        --><?php //echo $_SESSION['user']->getLogin(); ?>
<!--                    </div>-->
<!--                    <div class="text-sm text-gray-500">-->
<!--                        <span class="text-blue-500">--><?//= $log['ip'] ?><!--</span>-->
<!--                        &mdash; --><?//= $log['city'] ?><!--, --><?//= $log['region'] ?><!--, --><?//= $log['country'] ?>
<!--                        | --><?//= date('d/m/Y \à H:i:s', strtotime($log['log_date'])); ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        --><?php //}
//
//        ?>


    </div>




<?php include('../page/template/footer.php'); ?>
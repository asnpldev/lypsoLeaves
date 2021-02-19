<?php include('../page/template/header.php'); ?>


    <div class="p-2">
        <div class="grid grid-cols-12">

            <div class="col-span-6">
                <?php if ($_SESSION['user']->getPermPower() >= DASHBOARD_AGENDA_OVERVIEW) { ?>
                    <?php


                    if (isset($actualConges[0])) { //SI LA PERSONNE EST EN CONGES


                        $first_date = new DateTime(date('Y-m-d H:i:s'));
                        $second_date = new DateTime($actualConges[0]['end']);
                        $interval = $first_date->diff($second_date);
                        $days = $interval->format('%d jour(s) et %Hh%Im ');


                        ?>

                        <div class="grid grid-cols-12 gap-10 w-full p-5 bg-gradient-to-r from-purple-500 to-blue-700 h-28 rounded-3xl">
                            <div class="col-span-4">
                                <i class="far fa-sparkles text-6xl ml-20 mt-2 text-white"></i>
                                <!--<img src="../page/img/gotcongee.png" class="ml-10 w-28">-->
                            </div>
                            <div class="col-span-8">
                                <h4 class="font-semibold text-white text-xl">Vous êtes actuellement en absence</h4>
                                <p class="text-white">Le début de votre absence est
                                    du <?= date('d/m/Y', strtotime($actualConges[0]['start'])) ?>
                                    jusqu'au <?= date('d/m/Y', strtotime($actualConges[0]['end'])) ?>, il vous reste
                                    encore <?= $days ?></p>
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


                    <?php }
                } ?>
            </div>
            <div class="col-span-6">

            </div>

        </div>


    </div>


<?php include('../page/template/footer.php'); ?>
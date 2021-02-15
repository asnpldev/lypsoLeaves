<?php include('../page/template/header.php'); ?>

    <div class="p-2">

        <div class="grid grid-cols-12">

            <div class="col-span-6">
                <?php if (isset($actualConges[0])) { //SI LA PERSONNE EST EN CONGES

                    $absenceStart = new DateTime(date('Y-m-d'));
                    $absenceEnd = new DateTime($actualConges[0]['end']);
                    $days = $absenceStart->diff($absenceEnd)->format('%a');


                    ?>

                    <div class="grid grid-cols-12 gap-10 w-full p-5 bg-gradient-to-r from-purple-400 to-blue-500 rounded-3xl">
                        <div class="col-span-4">
                            <img src="../page/img/gotcongee.png" class="ml-3 w-min">
                        </div>
                        <div class="col-span-8">
                            <h4 class="font-semibold text-white text-xl">&mdash; Vous êtes actuellement en absence</h4>
                            <p class="text-white">Le début de votre absence est
                                du <?= date('d/m/y', strtotime($actualConges[0]['start'])) ?>
                                jusqu'au <?= date('d/m/y', strtotime($actualConges[0]['end'])) ?>, il vous reste
                                encore <?= $days ?> jour(s) d'absence(s)</p>
                        </div>


                    </div>

                    <br>


                    <?php var_dump($actualConges);
                } else { //SINON ?>


                    <div class="grid grid-cols-12 gap-10 w-full p-5 bg-gradient-to-r from-red-500 to-yellow-500 rounded-3xl">
                        <div class="col-span-4">
                            <img src="../page/img/lamp.png" class="ml-3 w-min">
                        </div>
                        <div class="col-span-8">
                            <h4 class="font-semibold text-white text-xl">&mdash; Aucune absence en ce moment</h4>
                            <p class="text-white">Besoin de prendre une absence ? Cliquez <a href="?route=vacation"
                                                                                             class="bg-white px-2 rounded text-red-400 font-bold">ici</a>
                            </p>
                        </div>


                    </div>


                <?php } ?>
            </div>
            <div class="col-span-6">
                aaa

            </div>

        </div>


    </div>


    <!-- SELECTION

     <div class="col-span-6 sm:col-span-3">-->
    <!--        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>-->
    <!--        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">-->
    <!--            <option class="bg-gray-50">United States</option>-->
    <!--            <option>Canada</option>-->
    <!--            <option>Mexico</option>-->
    <!--        </select>-->
    <!--    </div>-->

<?php include('../page/template/footer.php'); ?>
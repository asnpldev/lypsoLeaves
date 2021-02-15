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
                        <a href="?route=dashboard">::</a>

                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="?route=vacation">//</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li>
                        <span class="text-gray-500" aria-current="page">??</span>
                    </li>
                </ol>
            </nav>
            </small>
            </p>
        </div>
    </div>


    <div class="h-96 p-2">
        <div class="overscroll-y-contain">


            <form action="?route=agenda&action=checkvacation" method="POST">
                <label for="start">Début : </label>
                <input class="border border-gray-500 rounded-full py-0.5 px-2 mr-5" type="date" placeholder="début"
                       name="start">

                <label for="end">Fin : </label>
                <input class="border border-gray-500 rounded-full py-0.5 px-2 mr-5" type="date" placeholder="fin"
                       name="end">


                <input type="submit" class="py-0.5 px-2 rounded-full bg-green-600 cursor-pointer">
            </form>
            <br><br>


            <?php
            if (isset($countRowsDays)) {
                $intDays = (int)$countRowsDays;
            }

            if (isset($_POST['start']) and isset($_POST['end']) and isset($intDays)) {
                echo "Résultat pour " . $_POST['start'] . " > " . $_POST['end'] . " (soit " . $intDays . " jours)<br><br>";
            }


            //            for ($i = 0; $i <= $intDays; $i++) { ?>
            <!--                <div class="bg-blue-200 inline-block p-10 w-max rounded">-->
            <!--                    --><? //= $i ?>
            <!--                </div>-->
            <div class="grid grid-cols-12 gap-1">
                <!--            --><?php //}
                //

                if (isset($checkingActualVacations)) {
                    foreach ($checkingActualVacations as $checkingActualVacation) {


                        ?>

                        <div class="col-span-3">
                            <div class="bg-blue-50 p-10 rounded  text-gray-700">
                                <i class="fas fa-calendar-day text-xl mr-5 float-left"></i>
                                <br>
                                Du
                                <span class="bg-gray-300 px-2.5 rounded-full"><?= date('d/m/y', strtotime($checkingActualVacation['start'])) ?>
                                au
                               <?= date('d/m/y', strtotime($checkingActualVacation['end'])) ?></span>
                                <br>
                                <a href="#" class="text-blue-600"><?= $checkingActualVacation['lastname'] . ' ' . $checkingActualVacation['firstname'] ?></a>
                                &mdash; <small><?= $checkingActualVacation['nom']?></small>
                            </div>
                        </div>


                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>


<?php include('../page/template/footer.php'); ?>
<?php include('template/header.php') ?>


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
                        <a href="?route=dashboard">Management</a>

                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="?route=vacation">Agenda</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li>
                        <span class="text-gray-500"
                              aria-current="page">Détails de l'absence #<?= $datas['vacid'] ?></span>
                    </li>
                </ol>
            </nav>
            </small>
            </p>
        </div>
    </div>


    <div class="grid grid-cols-12 border-t border-gray-200">
        <div class="col-span-2">


            <div class="p-2">
                <div class="bg-gray-50 px-6 py-8 rounded-lg text-center">
                    <div class="mb-3">
                        <?php if ($datas['sx'] == "M") { ?>
                            <img class="w-auto mx-auto rounded-full" src="../page/img/boy.svg" alt="">
                        <?php } else { ?>
                            <img class="w-auto mx-auto rounded-full" src="../page/img/girl.svg">
                        <?php } ?>
                    </div>
                    <h2 class="text-xl font-medium text-gray-700"><?= ucfirst(strtolower($datas['firstname'])) . ' ' . ucfirst(strtolower($datas['lastname'])) ?></h2>
                    <span class="text-gray-500 block mb-5"><?= $datas['nom'] ?></span>

                    <a href="#" class="px-4 py-2 text-indigo-600 bg-indigo-100 rounded-full">Voir</a>
                </div>
            </div>





        </div>
        <div class="col-span-10 p-2">
            <div class="bg-gray-50">






                    <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                        <div class="w-full lg:w-1/4">
                            <div class="widget w-full p-4 rounded-lg bg-gray-50  dark:bg-gray-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs uppercase font-light text-gray-500">
                                            Date de début
                                        </div>
                                        <div class="text-xl font-bold">
                                            <?= date('d/m/y', strtotime($datas['start'])) ?>
                                        </div>
                                    </div>
                                    <i class="far fa-calendar-alt text-xl text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 ">
                            <div class="widget w-full p-4 rounded-lg bg-gray-50  dark:bg-gray-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs uppercase font-light text-gray-500">
                                            Date de fin
                                        </div>
                                        <div class="text-xl font-bold">
                                            <?= date('d/m/y', strtotime($datas['end'])) ?>
                                        </div>
                                    </div>
                                    <i class="far fa-calendar-alt text-xl text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 ">
                            <div class="widget w-full p-4 rounded-lg bg-gray-50  dark:bg-gray-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs uppercase font-light text-gray-500">
                                            Jours d'intervalle
                                        </div>
                                        <div class="text-xl font-bold">
                                            <?php
                                            $countStart = new DateTime($datas['start']);
                                            $countEnd = new DateTime($datas['end']);
                                            $countRowsDays = $countStart->diff($countEnd)->format('%a');
                                            echo $countRowsDays;



                                            ?>
                                        </div>

                                    </div>
                                    <i class="far fa-clock text-xl text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4">
                            <div class="widget w-full p-4 rounded-lg bg-gray-50  dark:bg-gray-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs uppercase font-light text-gray-500">
                                            Demande validée par
                                        </div>
                                        <div class="text-xl font-bold">
                                            <a href="#" class="text-indigo-600 ">usersio</a>
                                        </div>
                                    </div>
                                    <i class="far fa-check-circle text-xl text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                <br>

                <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../page/img/snowbg.jpg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>







            </div>
        </div>

    </div>


<?php


//var_dump($datas);
?>


<?php include('template/footer.php') ?>
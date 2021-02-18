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

    <div class="m-2 h-64 rounded-md overflow-hidden bg-cover bg-center"
         style="background-image: url('../page/img/snowbg.jpg')">
        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
            <div class="px-10 max-w-xl">
                <h2 class="text-2xl text-white font-semibold"><?= ucfirst(strtolower($datas['firstname'])) . ' ' . ucfirst(strtolower($datas['lastname'])) ?>
                    <sup><span class="fa-stack text-xs">
                      <i class="fas fa-certificate fa-stack-2x text-blue-500"></i>
                      <i class="far fa-check fa-stack-1x "></i>
                    </span></sup>


                </h2>
                <p class="mt-2 text-gray-400 mb-4">Fait partit du pôle : <span
                            class="text-gray-300 font-extrabold"><?= $datas['nom'] ?></span></p>
                <a href="#"
                   class="mt-3 items-center mt-4 px-3 py-2 bg-blue-600 text-white transition duration-200 ease-in-out text-sm uppercase font-medium rounded hover:bg-blue-800">
                    Voir l'utilisateur
                    <i class="fas fa-chevron-right pl-5"></i>
                </a>

            </div>
        </div>
    </div>


    <div class="flex flex-col lg:flex-row w-full ">
    <div class="w-full lg:w-1/4 m-2 ">
        <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col">
                    <div class="text-xs uppercase font-light text-gray-500">
                        Date de début
                    </div>
                    <div class="text-xl font-bold">
                        <?= date('d/m/y \<\s\m\a\l\l\>(H:i)\<\/\s\m\a\l\l\>', strtotime($datas['start'])) ?>
                    </div>
                </div>
                <i class="far fa-calendar-alt text-xl text-gray-500"></i>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-1/4 m-2 ">
        <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col">
                    <div class="text-xs uppercase font-light text-gray-500">
                        Date de fin
                    </div>
                    <div class="text-xl font-bold">
                        <?= date('d/m/y \<\s\m\a\l\l\>(H:i)\<\/\s\m\a\l\l\>', strtotime($datas['end'])) ?>
                    </div>
                </div>
                <i class="far fa-calendar-alt text-xl text-gray-500"></i>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-1/4 m-2 ">
        <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col">
                    <div class="text-xs uppercase font-light text-gray-500">
                        Intervalle
                    </div>
                    <div class="text-xl font-bold">
                        <?php


                        $datetime1 = new DateTime($datas['start']);
                        $datetime2 = new DateTime($datas['end']);
                        $interval = $datetime1->diff($datetime2);
                        if ((int)$interval->format('%a') <= 0) {

                            $countRowsDays = $interval->format('%hh%im ');

                        } elseif ((int)$interval->format('%H') <= 0 and (int)$interval->format('%i') <= 0) {

                            $countRowsDays = $interval->format('%a jours');

                        } else {

                            $countRowsDays = $interval->format('%a jours ->  %Hh%im ');

                        }


                        echo $countRowsDays;


                        ?>
                    </div>

                </div>
                <i class="far fa-clock text-xl text-gray-500"></i>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-1/4 m-2 ">
    <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
    <div class="flex flex-row items-center justify-between">
    <div class="flex flex-col">
    <div class="text-xs uppercase font-light text-gray-500">
        Demande validée par
    </div>
    <div class="text-xl font-bold">
    <a href="?route=profile&userid=<?= $managerData['user_id'] ?>"
       class="text-blue-600 ">
        <?php if (!isset($managerData['id'])) {
                    echo '<span class="text-black">Opérateur inconnu</span>';
        } else {
    if ($managerData['id'] == $_SESSION['user']->getId()) {
        echo '<small>' . $managerData['login'] . ' (Vous)</small>';
    } else {
        echo $managerData['login'];
    } }?></a>
    </div>
    </div>
    <i class="far fa-check-circle text-xl text-gray-500"></i>
    </div>
    </div>
    </div>

    </div>

    <div class="flex flex-col lg:flex-row w-full ">
        <div class="w-full 1/2 m-2 ">
            <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex flex-col">
                        <div class="text-xs uppercase font-light text-gray-500">
                            Raison de l'absence
                        </div>
                        <div class="text-xl font-bold">
                            <?= $datas['reason'] ?>
                        </div>
                    </div>
                    <i class="far fa-stream text-xl text-gray-500"></i>
                </div>
            </div>
        </div>
        <div class="w-full 1/2 m-2 ">
            <div class="widget w-full p-4 rounded-lg bg-gray-100  dark:bg-gray-900 dark:border-gray-800">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex flex-col">
                        <div class="text-xs uppercase font-light text-gray-500">
                            COMMENTAIRE (Facultatif)
                        </div>
                        <div class="text-xl font-bold">

                            <?php if (empty($datas['comment'])) {
                                echo 'Aucun commentaire';
                            } else {
                                echo $datas['reason'];
                            } ?>
                        </div>
                    </div>
                    <i class="far fa-comment-alt text-xl text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>


    <br>


    </div>


    <?php


//var_dump($datas);
    ?>


    <?php include('template/footer.php') ?>
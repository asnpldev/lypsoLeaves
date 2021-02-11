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
                        <a href="?route=dashboard">Administration</a>

                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>

                    <li>
                        <span class="text-gray-500" aria-current="page">Dashboard</span>
                    </li>
                </ol>


            </nav>
            </small>
            </p>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-5 m-2">

        <div class="col-span-3">

            <div class="w-full text-center 2xl:font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 text-white rounded-md p-12 transition duration-200 ease-in-out hover:bg-gray-900 ">
                <div class="absolute text-9xl opacity-20 text-white text-center mt-1"><i
                            class="fas fa-user-astronaut"></i></div>
                <span class="text-5xl"><?= $userCount['count'] ?> </span><br>
                <small class="text-2xl font-bold">Utilisateurs</small>
            </div>

        </div>
        <div class="col-span-4">

            <div class="w-full text-center 2xl:font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500  text-white rounded-md p-12 transition duration-200 ease-in-out hover:bg-gray-900">
                <div class="absolute text-9xl opacity-20 text-white text-center mt-1 w-max"><i
                            class="fas fa-pen"></i></div>
                <span class="text-5xl"><?= $treatmentCount['count'] ?></span><br>
                <small class="text-2xl font-bold">Demandes en attente</small>
            </div>

        </div>
        <div class="col-span-5">

            <div class="w-full text-center 2xl:font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500  text-white rounded-md p-12 transition duration-200 ease-in-out hover:bg-gray-900">
                <div class="absolute text-9xl opacity-20 text-white text-center mt-1 w-max"><i
                            class="fas fa-globe-europe ml-24"></i></div>
                <span class="text-5xl"><?= $allTreatmentsCount['count'] ?></span><br>
                <small class="text-2xl font-bold">Demandes au total</small>
            </div>

        </div>





    </div>

    <hr class="border-gray-200 w-full m-2 mt-5">


<?php include('template/footer.php') ?>
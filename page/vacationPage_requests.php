<?php include('../page/template/header.php'); ?>


<div class="grid grid-cols-12">

    <div class="col-span-12">

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
                            <a href="?route=dashboard">Tableau de bord</a>

                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                            </svg>
                        </li>
                        <li class="flex items-center">
                            <a href="?route=vacation">Demande de congés</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                            </svg>
                        </li>
                        <li>
                            <span class="text-gray-500" aria-current="page">Demandes en attentes</span>
                        </li>
                    </ol>
                </nav>
                </small>
                </p>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class=" overflow-hidden border-b border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom : Prénom
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SUJET
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date début
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date fin
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Département
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <?php if (empty($vacationRequest)) { ?>


                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Oops !</div>
                                    <div class="text-sm text-gray-500">

                                        Aucune demande en attente..

                                </td>


                            </tr>

                            <?php } else {

                            foreach ($vacationRequest as $vacationRequests) {?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <?php if ($vacationRequests['sx'] == "M") { ?>

                                                <img class="h-10 w-10 rounded-full" src="../page/img/boy.svg"
                                                     alt="">
                                            <?php } else { ?>
                                                <img class="h-10 w-10 rounded-full"
                                                     src="../page/img/girl.svg">


                                            <?php } ?>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <?= $vacationRequests['lastname'] . ' '. $vacationRequests['firstname']?> (Vous)
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                <?= $vacationRequests['login'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Demande de congé</div>

                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?= $vacationRequests['start']?>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?= $vacationRequests['end']?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-600">
                                      En attente
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?= $vacationRequests['nom']//départment de la personne?>
                                </td>

                            </tr><?php } }?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>


</div>



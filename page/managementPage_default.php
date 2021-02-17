<?php include('../page/template/header.php'); ?>


    <!-- <div class="bg-yellow-600">
         <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
             <div class="flex items-center justify-between flex-wrap">
                 <div class="w-0 flex-1 flex items-center">
                      <span class="flex p-2 rounded-lg bg-yellow-800">
                         <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor" aria-hidden="false"><path stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="2"
                                                                              d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                      </span>

                      <p class="ml-3 font-medium text-white truncate">
                          <span class="hidden md:inline"> Attention, le site est actuellement en maintenance ! (Accès réservé uniquement aux administrateurs) </span>
                      </p>
                 </div>
                 <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                     <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-yellow-600 bg-white hover:bg-blue-50">Changer </a>
                 </div>
             </div>
         </div>
     </div>-->


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

                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="?route=management">Management</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </li>
                    <li>
                        <span class="text-gray-500" aria-current="page">Gestion</span>
                    </li>
                </ol>
            </nav>
            </small>
            </p>
        </div>
    </div>

<?php if (isset($message)) {
    if ($type == 0) {
        ?>
        <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
            <div class="pr-2">
                <i class="fas fa-check-circle text-indigo-600"></i>
            </div>
            <div>
                <div class="text-sm pb-2 pt-0.5 text-indigo-600 font-bold">
                    &mdash; Succès
                    <span class="float-right " onclick="closeNotif();"><i
                                class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    <?= $message ?>
                </div>
                <br>
                <a href="?route=management&action=cancel&id=<?= $cancelId ?>"
                   class="bg-gray-200 p-1 px-2 hover:bg-indigo-500 hover:text-white transition duration-200 cursor-pointer ease-in-out rounded-md text-sm text-gray-500 w-min">
                    Annuler
                </a>
            </div>
        </div>

    <?php } else if ($type == 1) { ?>
        <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
            <div class="pr-2">
                <i class="fas fa-save text-green-800"></i>
            </div>
            <div>
                <div class="text-sm pb-2 pt-0.5 text-green-800 font-bold">
                    &mdash; Backup (Redo)
                    <span class="float-right " onclick="closeNotif();"><i
                                class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    <?= $message ?>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
            <div class="pr-2">
                <i class="fas fa-times text-red-800"></i>
            </div>
            <div>
                <div class="text-sm pb-2 pt-0.5 text-red-800 font-bold">
                    &mdash; Erreur
                    <span class="float-right " onclick="closeNotif();"><i
                                class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    <?= $message ?>
                </div>
            </div>
        </div>
    <?php }
} ?>


    <div class="bg-gray-50 border-t border-gray-200">
        <div class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            FILTRES

            <?php if (isset($filter)) { ?>
                <span class="ml-3 text-red-600 bg-red-100 px-2 py-0.5 text-xs rounded-full"><a href="?route=management"><i
                                class="fas fa-times-circle mr-0.5"></i></a><?= $filter ?></span>
            <?php } ?>
            <form action="?route=management&action=filter" METHOD="post" class="float-right">
                <input type="search" autocomplete="off" placeholder="Rechercher" name="searchbar"
                       class="px-2.5  h-6 border-gray-300 border rounded bg-gray-100 focus:border-transparent">
                <input type="submit" value="Chercher" class="rounded px-2 py-0.5 text-xs cursor-pointer">
            </form>


        </div>


    </div>

    <div class="overflow-y-auto" style="max-height: 750px;">
        <div class="flex flex-col ">
            <div class="overflow-x-auto">
                <div class="align-middle inline-block min-w-full">
                    <div class="overflow-hidden border-b border-t border-gray-200">
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
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pôle
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                                    &nbsp;&nbsp;&nbsp; édition
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">

                            <?php if (empty($actualRequests)) { ?>


                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Demandes</div>
                                        <div class="text-sm text-gray-500">

                                            Aucune demande correspond à votre recherche ou aucune demande en attente,
                                            veuillez revenir plus tard..

                                    </td>


                                </tr>

                            <?php } else {
                                foreach ($actualRequests as $actualRequest) {


                                    ?>
                                    <tr><!--class="hover:bg-gray-50"  -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <?php if ($actualRequest['sx'] == "M") { ?>

                                                        <img class="h-10 w-10 rounded-full" src="../page/img/boy.svg"
                                                             alt="">
                                                    <?php } else { ?>
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="../page/img/girl.svg">


                                                    <?php } ?>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <?php echo strtoupper($actualRequest['lastname']) . " " . ucfirst(strtolower($actualRequest['firstname'])) ?>
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        <?= $actualRequest['login'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Demandes d'absence
                                                #<?= $actualRequest['vacid'] ?></div>
                                            <div class="text-sm text-gray-500">
                                                Du <?php echo date('d/m/y', strtotime($actualRequest['start']))
                                                ?>
                                                au
                                                <?php echo date('d/m/y', strtotime($actualRequest['end'])) ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-600">
                  En attente
                </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?php echo $actualRequest['nom'] ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="?route=management&action=accept&id=<?= $actualRequest['vacid'] ?>"
                                               class="text-green-600 bg-green-100 px-2 inline-flex text-xs leading-5 rounded-full"><i
                                                        class="fas fa-check mt-1"></i>&nbsp; Accepter</a>
                                            <a href="?route=management&action=decline&id=<?= $actualRequest['vacid'] ?>"
                                               class="text-indigo-600 bg-indigo-100 px-2 inline-flex text-xs leading-5 rounded-full"><i
                                                        class="fas fa-ban mt-1"></i>&nbsp; Refuser</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>


                            <!-- More items... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('../page/template/footer.php'); ?>
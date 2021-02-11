<?php include('../page/template/header.php'); ?>


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
                    <span class="float-right " onclick="closeNotif();"><i class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    <?= $message ?>
                </div>
            </div>
        </div>

    <?php } else if ($type == 1) { ?>
        <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
            <div class="pr-2">
                <i class="fas fa-exclamation-circle text-red-600"></i>
            </div>
            <div>
                <div class="text-sm pb-2 pt-0.5 text-red-600 font-bold">
                    &mdash; Erreur
                    <span class="float-right " onclick="closeNotif();"><i class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    <?= $message ?>
                </div>
            </div>
        </div>

    <?php }
} ?>


<div class="overflow-y-auto" style="max-height: 750px;">
    <div class="flex flex-col ">
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
                <div class="overflow-hidden border-b border-t border-gray-200 ">
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
                                Département
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
                                    <div class="text-sm text-gray-900">Demande de congés</div>
                                    <div class="text-sm text-gray-500">

                                        Aucune demande en attente, veuillez revenir plus tard..

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
                                        <div class="text-sm text-gray-900">Demande de congés #<?= $actualRequest['vacid']?></div>
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
    </div></div>


<?php include('../page/template/footer.php'); ?>
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
                        <span class="text-gray-500" aria-current="page">Utilisateurs</span>
                    </li>
                </ol>


            </nav>
            </small>
            </p>  </div>
    </div>

    <div class="bg-gray-50 border-t border-gray-200">
        <div class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            FILTRES

            <?php if (isset($filter)) { ?>
                <span class="ml-3 text-red-600 bg-red-100 px-2 py-0.5 text-xs rounded-full"><a href="?route=management"><i
                                class="fas fa-times-circle mr-0.5"></i></a><?= $filter ?></span>
            <?php } ?>
            <!--            <form  METHOD="post" class="float-right"><!--action="?route=management&action=filter"-->
            <!--                <input type="search" placeholder="Rechercher" name="searchbar"-->
            <!--                       class="px-2.5  h-6 border-gray-300 border rounded bg-gray-100 focus:border-transparent">-->
            <!--                <input type="submit" value="Chercher" class="rounded px-2 py-0.5 text-xs cursor-pointer">-->
            <!--            </form>-->


        </div>


    </div>



    <div class="bg-gray-50 border-t border-gray-200">
        <div class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ACTIONS
            <a href="?route=admin&action=newuser" class="ml-3 text-purple-600 bg-purple-100 px-2 py-0.5 text-xs rounded-full"><i class="far fa-user-plus mr-1"></i>Créer un utilisateur</a>
            <a href="#" class="ml-3 text-purple-600 bg-purple-100 px-2 py-0.5 text-xs rounded-full"><i class="far fa-server mr-1"></i>Gérer les accès administrateur</a>

        </div>


    </div>

    <div class="flex flex-col">

        <div class="align-middle inline-block min-w-full">
            <div class="overflow-hidden border-b border-t border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NOM : PRENOM
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            État
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pôle
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ACTIONS
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <?php

                    foreach ($userLists as $userList) { ?>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <?php if ($userList['sx'] == "M") { ?>

                                            <img class="h-10 w-10 rounded-full" src="../page/img/boy.svg"
                                                 alt="">
                                        <?php } else { ?>
                                            <img class="h-10 w-10 rounded-full"
                                                 src="../page/img/girl.svg">


                                        <?php } ?>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <?= $userList['lastname'] . ' ' . $userList['firstname'] ?>
                                            <?php if ($userList['admin'] == 1) { ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Administrateur</span>
                                            <?php } ?>


                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <?= $userList['login'] ?>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if ($userList['active'] == 1) { ?>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Activé</span>
                                <?php } else { ?>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"> Désactivé</span>
                                <?php } ?>


                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?= $userList['nom'] ?>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="?route=admin&action=manage&id=<?= $userList['uid'] ?>"
                                   class="text-indigo-600 hover:text-indigo-900 border-r border-gray-300 pr-4 mr-4">Modifier</a>
                                <a href="?route=admin&action=view&id=<?= $userList['uid'] ?>"
                                   class="text-indigo-600 hover:text-indigo-900">Voir</a>
                            </td>

                        </tr>
                    <?php }

                    ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>


<?php include('template/footer.php') ?>
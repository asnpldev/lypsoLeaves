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
                            <a href="?route=management">Demande de congés</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                            </svg>
                        </li>
                        <li>
                            <span class="text-gray-500" aria-current="page">Formulaire de création</span>
                        </li>
                    </ol>
                </nav>
                </small>
                </p>
            </div>
        </div>


        <div class="mt-10 sm:mt-0 bg-gray-50">

            <?php if (isset($message)) {
                if ($type == 0) {
                    ?>
                    <div class="bg-green-200 mx-6 w-1/2 border-l-4 p-2.5 rounded border-green-600 ">
                    <span class="text-green-600 "><i
                                class="fas fa-check-circle mr-3 text-green-600"></i> <?= $message ?></span>

                    </div><?php } else if ($type == 1) { ?>
                    <div class="bg-red-200 mx-6 w-1/2 border-l-4 p-2.5 rounded border-red-600 ">
                        <span class="text-red-600 "><i
                                    class="fas fa-exclamation-triangle mr-3 text-red-600"></i> <?= $message ?></span>

                    </div>

                <?php }
            } ?>


            <div class="mt-5 md:mt-0 md:col-span-2">
                <form role="form" method="POST" action="?route=vacation&action=store">
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Date de
                                        début</span></label>
                                    <input type="date" name="inputStartDate" autocomplete="given-name"
                                           class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Date de
                                        fin</label>
                                    <input type="date" name="inputEndDate" autocomplete="family-name"
                                           class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">
                                </div>


                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-1 px-2 border border-transparent shadow-sm text-sm font-medium rounded text-white bg-blue-500 hover:bg-blue-700 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Confirmer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>


</div>



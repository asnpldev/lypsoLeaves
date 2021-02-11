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
            <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
                <div class="pr-2">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div>
                    <div class="text-sm pb-2 pt-0.5 text-green-600 font-bold">
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


            <div class="mt-5 md:mt-0 md:col-span-2">
                <form role="form" method="POST" action="?route=vacation&action=store">
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3">

                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Date de début</span></label>
                                    <input type="date" name="inputStartDate" autocomplete="given-name" class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                                </div>
                                <div class="col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Date de fin</label>
                                    <input type="date" name="inputEndDate" autocomplete="family-name" class="mt-1 p-1.5 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                                </div>
                                <div class="col-span-6"></div>


                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center transition duration-200 ease-in-out transform hover:translate-x-2 py-1 px-2 border border-transparent shadow-sm text-sm font-medium rounded text-indigo-600 bg-indigo-200 hover:bg-indigo-400 hover:text-indigo-900 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Confirmer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>


</div>


<?php include('template/footer.php');
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
                            <a href="?route=vacation">Historique des demandes</a>
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
    </div>
</div>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= ENV['APP_NAME'] ?> &mdash; <?= $tabTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../page/css/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<style>body {
        font-family: 'Inter';
    }</style>
<body class="hold-transition login-page">


<?php if (isset($message)) {

    ?>
    <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
        <div class="pr-2">
            <i class="fas fa-exclamation-triangle text-red-600"></i>
        </div>
        <div>
            <div class="text-sm pb-2 pt-0.5 text-red-600 font-bold">
                &mdash; Erreur
                <span class="float-right " onclick="closeNotif();"><i
                            class="fas fa-times cursor-pointer"></i> </span>
            </div>
            <div class="text-sm text-gray-600 w-96 tracking-tight ">
                <?= $message ?>
            </div>

        </div>
    </div>
<?php } ?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-24 w-auto" src="../page/img/password.png">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Connexion au pannel
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                <?= ENV['APP_NAME'] ?>
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    <?= ENV['APP_VERSION'] ?>
                </a>
                &mdash; <small><?= ENV['APP_AUTHOR'] ?></small>
            </p>
        </div>
        <form class="mt-8 space-y-6" action=".?route=authenticate&action=login" method="post">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="login" type="text" autocomplete="email" required
                           class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Login">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Mot de passe">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox"
                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded transition duration-200 ease-in-out ">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Se souvenir
                    </label>
                </div>


            </div>

            <div>
                <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm transform hover:translate-x-1 font-medium rounded-md text-white bg-blue-600 transition duration-200 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-blue-500 transition duration-200 ease-in-out group-hover:text-blue-400 transform hover:translate-x-1"
                 xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd"/>
            </svg>
          </span>
                    Connexion
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const notifc = document.querySelector('.notif')
        menuBtn.addEventListener('click', () => {
            notifc.classList.toggle('hidden');
        })
    })

    function closeNotif() {
        const closeNotif = document.querySelector('.disapear');
        closeNotif.classList.toggle('hidden')
    }
</script>
</body>
</html>

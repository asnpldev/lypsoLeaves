<?php include('../page/template/header.php'); ?>


    <div class="p-2">

        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->

        <div class="disapear w-2/6 w-max absolute top-0 right-1 shadow-2xl rounded-lg bg-white mx-auto mt-1 p-4 notification-box flex">
            <div class="pr-2">
                <i class="fas fa-exclamation-circle text-red-600"></i>
            </div>
            <div>
                <div class="text-sm pb-2 pt-0.5 text-red-600 font-bold">
                    &mdash; Erreur de connexion à la page (IP: <?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }

                    echo $ip;
                    ?>)
                    <span class="float-right " onclick="closeNotif();"><i class="fas fa-times cursor-pointer"></i> </span>
                </div>
                <div class="text-sm text-gray-600 w-96 tracking-tight ">
                    Page actuellement indisponible !
                </div>
            </div>
        </div>
        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->
        <!-- ERREUR DE CHARGEMENT -->

        <?php function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        }

        echo generateRandomString();

        ?>



    </div>


<?php include('../page/template/footer.php'); ?>
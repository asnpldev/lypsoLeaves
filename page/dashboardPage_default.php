<?php include('../page/template/header.php'); ?>


    <div class="p-2">


        <?php

        foreach ($iplogger as $log) {
            ?>


            <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">


                    <span class="//avatar px-1 py-0.5 text-white text-xs rounded uppercase float-left mt-2.5 mr-1.5 h-7 w-7  text-center"></span>
                </div>
                <div class="ml-1">
                    <div class="text-sm font-medium text-gray-900">
                        <?= $_SESSION['user']->getLogin(); ?>
                    </div>
                    <div class="text-sm text-gray-500">
                        <span class="text-blue-500"><?= "xx.xxx.xxx.xxx (Masqué)"//$log['ip'] ?></span>
                        &mdash; <?= $log['city'] ?>, <?= $log['region'] ?>, <?= $log['country'] ?>
                        | <?= date('d/m/Y \à H:i:s', strtotime($log['log_date'])); ?>
                    </div>
                </div>
            </div>

        <?php }

        ?>


    </div>


<?php include('../page/template/footer.php'); ?>
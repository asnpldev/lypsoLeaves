<?php include('../page/template/header.php'); ?>

    <!--    <div class="p-2">-->
    <!--        --><?php //$today = getdate();
//
//
//        echo "Nous sommes le " . checkday($today) . ' ' . date('d M',);
//
//        ?>
    <!--    </div>-->


    <a href="?route=agenda&month=1&year=2021">aa</a>


    <br><br>
    <style>


        tr .case {

            width: 100px;

        }


    </style>
    <div class="m-auto mt-40 w-max">
        <?php


        function calendrier($mois, $annee)
        {
            $loadvac = loadvac();
            //echo $loadvac['start'] . " "  . $loadvac['end'] . "<br>";
            $checkstart['date'] = date($loadvac['start']);
            $checkstart['d'] = date('d', strtotime($loadvac['start']));
            $checkstart['m'] = date('m', strtotime($loadvac['start']));
            $checkstart['y'] = date('y', strtotime($loadvac['start']));


            $checkend['date'] = date($loadvac['end']);
            $checkend['d'] = date('d', strtotime($loadvac['end']));
            $checkend['m'] = date('m', strtotime($loadvac['end']));
            $checkend['y'] = date('y', strtotime($loadvac['end']));


            $checkstart['date'] = new DateTime($loadvac['start']);
            $checkend['date'] = new DateTime($loadvac['end']);
            $days = $checkend['date']->diff($checkstart['date'])->format('%a');


            $pata = $days + 1;
            $test = $checkstart['d'];

            $arr = [];
            while ($pata > 0) {
                $pata = $pata - 1;

                $test = $test + 1;
                $arr[] = $test;


            }


            $nbJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
            echo "<br><br>Recherche pour:  " . $mois . "/" . $annee . "<br><br>";
            echo "<table>";
            echo "<tr class='bg-indigo-300 border border-gray-500 text-indigo-800'><th class='p-2.5'>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>";

            for ($i = 1; $i <= $nbJours; $i++) {

                $jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);
                $jourParSemaine = jddayofweek($jour);
                if ($i == $nbJours) {
                    if ($jourParSemaine == 1) {

                        echo "<tr>";
                    }

                    echo "<td class='case bg-gray-50 border border-gray-500 text-indigo-800 text-center p-3'>" . $i . "</td>";


                } elseif ($i == 1) {
                    echo "<tr>";
                    if ($jourParSemaine == 0) {

                        $jourParSemaine = 7;
                    }


                    for ($k = 1; $k != $jourParSemaine; $k++) {

                        echo "<td></td>";
                    }

                    echo "<td class='case bg-gray-50 border border-gray-500 text-indigo-800 text-center p-3'>" . $i . "</td>";

                    if ($jourParSemaine == 7) {

                        echo "</tr>";
                    }


                } else {


                    if ($jourParSemaine == 1) {

                        echo "<tr>";
                    }


                    echo "<td class='case bg-gray-50 border border-gray-500 text-indigo-800 text-center p-3'>" . $i . "</td>";


                    if ($jourParSemaine == 0) {

                        echo "</tr>";

                    }

                }

            }

            echo "</table>";


        }


        ?>


        <?php

        if (isset($_GET['month']) and isset($_GET['year'])) {

            $mois = $_GET['month'];
            $annee = $_GET['year'];

            calendrier($mois, $annee);
        }

        ?>
    </div>
    <br><br>


<?php include('../page/template/footer.php'); ?>
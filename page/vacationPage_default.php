<?php include('../page/template/header.php'); ?>


            <form role="form" method="POST" action="?route=vacation&action=store">



                                <label for="inputStartDate">Date de début de congé</label>
                                <input type="date" name="inputStartDate" placeholder="Choose Date">
                        >

                                <label for="inputEndDate">Date de fin de congé</label>
                                <input type="date" name="inputEndDate" placeholder="Choose Date">





                    <button type="submit">Confirmer</button>

            </form>


                <table>
                    <tr>
                        <th>N° de la demande</th>
                        <th>Date de début de congé</th>
                        <th>Date de fin de congé1</th>
                    </tr>
                    <?php
                    $html="";
                    foreach ($vacationRequest as $vacationRequests)
                    {
                        $html.="<tr>\n";
                        $html.="<th>".$vacationRequests['id']."</th>";
                        $html.="<th>".$vacationRequests['start']."</th>";
                        $html.="<th>".$vacationRequests['end']."</th>";
                        $html.="</tr>";
                    }
                    echo $html
                    ?>
                </table>


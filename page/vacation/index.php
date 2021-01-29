<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Début</th>
            <th>Fin</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($vacations as $vacation){
        ?>
            <tr>
                <td><?= date_us2fr($vacation['start']) ?></td>
                <td><?= date_us2fr($vacation['end']) ?></td>
                <td><?= vacation_getStatusLabel($vacation['status']) ?></td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php


require_once('C:/wamp64/www/projetPHP/admin/model/Reservation.php');

?>


<h1>Liste des réservations</h1>

<table width="100%" class="table table-striped table-bordered table-hover m-4" id="dataTables-example">
    <thead>
    <tr>

        <th>Nom</th>
        <th>E-mail</th>
        <th>Numéro de Téléphone</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Personne</th>
    </tr>
    </thead>
    <tbody>
    <?php

    if(empty($listReservation)) {
        echo 'Aucun reservations';
    } else {
        foreach($listReservation as $Reservation){  ?>
            <tr class="odd gradeX" >
                <td class="center"><?php echo $Reservation->nom; ?></td>
                <td class="center"><?php echo $Reservation->email; ?></td>
                <td class="center"><?php echo $Reservation->num_tel; ?></td>
                <td class="center"><?php echo $Reservation->date; ?></td>
                <td class="center"><?php echo $Reservation->time; ?></td>
                <td class="center"><?php echo $Reservation->personne; ?></td>
                <td><a href='?controller=Utilisateur&action=supprimer&id=<?php echo $Reservation->id;?> '> <i class="fa fa-edit fa-fw"></i> Supprimer</a></td>

            </tr>

        <?php } }?>
    </tbody>
</table>

<?php
require_once('C:/wamp64/www/projetPHP/admin/model/Utilisateur.php');



?>
<link rel="stylesheet" href="../../css/index.css" >
<div class="col-lg-12">
    <h1 class="page-header">Affichage Utilisateur</h1>
</div>
<a class="btn btn-primary active" href='?controller=Utilisateur&action=afficherFormulaire'<i class="fa fa-edit fa-fw"></i> Ajouter</a>
<table width="100%" class="table table-striped table-bordered table-hover m-4" id="dataTables-example">
    <thead>
    <tr>

        <th>Nom</th>
        <th>Prénom</th>
        <th>Sexe</th>
        <th>Date de naissance</th>
        <th>Adresse</th>
        <th>Numéro de téléphone</th>
        <th>Email</th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php

    if(empty($Utilisateurs)) {
        echo 'Aucun utilisateur';
    } else{
    foreach($Utilisateurs as $Utilisateur){  ?>

        <tr class="odd gradeX" >

            <td class="center"><?php echo $Utilisateur->nom; ?></td>
            <td class="center"><?php echo $Utilisateur->prenom; ?></td>
            <td class="center"><?php echo $Utilisateur->sexe; ?></td>
            <td class="center"><?php echo $Utilisateur->date_naissance; ?></td>
            <td class="center"><?php echo $Utilisateur->adresse; ?></td>
            <td class="center"><?php echo $Utilisateur->num_tel; ?></td>
            <td class="center"><?php echo $Utilisateur->email; ?></td>

            <td><a href='?controller=Utilisateur&action=modifierFormulaire&id=<?php echo $Utilisateur->id;?> '> <i class="fa fa-edit fa-fw"></i> Modifier</a></td>
            <td><a href='?controller=Utilisateur&action=supprimer&id=<?php echo $Utilisateur->id;?> '> <i class="fa fa-edit fa-fw"></i> Supprimer</a></td>

        </tr>

    <?php } }?>

    </tbody>
</table>
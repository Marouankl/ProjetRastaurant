<?php
require_once('C:/wamp64/www/projetPHP/admin/model/Produit.php');
?>
<link rel="stylesheet" href="../../css/index.css" >
<div class="col-lg-12">
    <h1 class="page-header">Affichager Produits</h1>
</div>
<a class="btn btn-primary active" href='?controller=Produit&action=afficherFormulaire'<i class="fa fa-edit fa-fw"></i> Ajouter</a>
<table width="100%" class="table table-striped table-bordered table-hover m-4" id="dataTables-example">
    <thead>
    <tr>

        <th>Nom</th>
        <th>Categorie</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Images</th>
    </tr>
    </thead>
    <tbody>
    <?php

    if(empty($Produits)) {
        echo 'Aucun Produit';
    } else{
        foreach($Produits as $Produit){  ?>

            <tr class="odd gradeX" >
                <td class="center"><?php echo $Produit->nom; ?></td>
                <td class="center"><?php echo $Produit->categorie; ?></td>
                <td class="center"><?php echo $Produit->description; ?></td>
                <td class="center"><?php echo $Produit->prix; ?></td>
                <td class="center"><img width="100" height="100" src="../img/menu/<?php echo $Produit->img; ?>"></td>


                <td><a href='?controller=Produit&action=modifierFormulaire&id=<?php echo $Produit->id_produit?> '> <i class="fa fa-edit fa-fw"></i> Modifier</a></td>
                <td><a href='?controller=Produit&action=supprimer&id=<?php echo $Produit->id_produit;?> '> <i class="fa fa-edit fa-fw"></i> Supprimer</a></td>

            </tr>

        <?php } }?>

    </tbody>
</table>
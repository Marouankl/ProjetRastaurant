<doctype html>


    <html>

    <head>

<link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <link href="../../css/ajout_mod.css" rel="stylesheet">
    </head>

<body>
<div class="container mt-5">
    <div class="card">
        <h1 class="card-header text-center">Ajouter Produits</h1>
        <div class="card-body">
      <form role="form" action='?controller=Produit&action=ajouter'  method="POST">



    <div class="form-group">
        <label><b>Categorie</b></label>
        <select class="form-control" name="categorie">
            <option value="1">Plat</option>
            <option value="2">Déssert</option>

        </select>
    </div>

    <div class="form-group">
        <label><b>Nom</b></label>
        <input type="text" class="form-control" name="nom"  placeholder="Nom">
    </div

    <div class="form-group">
        <label><b>Description </b></label>
        <input type="text" class="form-control" name="description"  placeholder="Description">
    </div>

    <div class="form-group">
        <label><b>Prix </b></label>
        <input type="text" class="form-control" name="prix"  placeholder="Prix">
    </div>

    <div class="form-group">
        <label><b>Images </b></label>
        <input type="file" class="form-control" name="img" id="img"   placeholder="Images">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter</button>
    </div>

    <div class="form-group">
        <a href='?controller=Produit&action=index' class="form-control">Retour</a>
    </div>
</form>

        </div>
    </div>

</body>
</html>
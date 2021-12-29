
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
            <h1 class="card-header text-center">Ajouter utilisateur</h1>
            <div class="card-body">
                <form role="form" action='?controller=Utilisateur&action=ajouter'  method="POST">


                    <div class="form-group">
                        <label><b>Nom</b></label>
                        <input type="text" class="form-control" name="nom"  placeholder="Nom">
                    </div

                    <div class="form-group">
                        <label><b>Prénom </b></label>
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                    </div>


                    <div class="form-group">
                        <label><b>Votre E-mail </b></label>
                        <input type="email" name="email" class="form-control" placeholder="Votre E-mail">
                    </div>

                    <div class="form-check">
                        <label><b>sexe </b></label>
                        <div>
                            <input type="checkbox" name="sexe" class="form-check-input position-static" value="F">
                            <label for="f">Femme</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sexe" class="form-check-input position-static" value="H">
                            <label for="h">Homme</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><b>date_naissance </b></label>
                        <input type="date" name="date_naissance" class="form-control" placeholder="Date_naissance">
                    </div>
                    <div class="form-group">
                        <label><b>adresse </b></label>
                        <input type="text" name="adresse" class="form-control" placeholder="Adresse ">
                    </div>
                    <div class="form-group">
                        <label><b>num_tel</b></label>
                        <input type="number" name="num_tel" class="form-control"placeholder="Numero de telephone">
                    </div>
                    <div class="form-group">
                        <label><b>Votre mot de passet</b></label>
                        <input type="password" name="password" class="form-control"  placeholder="Votre mot de passet"><br /><br />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter</button>
                    </div>

                    <div class="form-group">
                        <a href='?controller=Utilisateur&action=index' class="form-control">Retour</a>
                    </div>
                </form>

            </div>
        </div>

    </body>
    </html>
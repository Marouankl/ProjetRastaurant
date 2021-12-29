<?php require_once('C:/wamp64/www/projetPHP/admin/model/Utilisateur.php'); ?>


<!doctype html>
    <header>

        <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <link href="../../css/ajout_mod.css" rel="stylesheet">
    </header>

  <body>
    <div class="container mt-5">
        <div class="card">
            <h1 class="card-header text-center">Modifier utilisateur</h1>
            <div class="card-body">
                <form role="form" action='?controller=Utilisateur&action=modifier'  method="POST">

                    <div class="form-group">
                        <label>
                            <input hidden type="text" name="id"  value='<?php echo $User->id ?>' placeholder="Id">
                        </label>
                    </div

                    <div class="form-group">
                        <label><b>Nom</b></label>
                        <label>
                            <input type="text" class="form-control"  value='<?php echo $User->nom ?>' name="nom"  placeholder="Nom">
                        </label>
                    </div

                    <div class="form-group">
                        <label><b>Prénom </b></label>
                        <label>
                            <input type="text" name="prenom" class="form-control" value='<?php echo $User->prenom ?>' placeholder="Prénom">
                        </label>
                    </div>

                    <div class="card-body">
                    <div class="form-group">
                        <label><b>Votre E-mail </b></label>
                        <label>
                            <input type="email" name="email" class="form-control" value='<?php echo $User->email ?>' placeholder="Votre E-mail">
                        </label>
                    </div>

                    <div class="form-check">
                        <label><b>sexe </b></label>
                        <div>
                            <label>
                                <input type="checkbox" name="sexe" value='<?php echo $User->sexe ?>'  class="form-check-input position-static" value="F" checked>
                            </label>
                            <label for="f">Femme</label>
                        </div>

                        <div>
                            <label>
                                <input type="checkbox" name="sexe" value='<?php echo $User->sexe ?>'  class="form-check-input position-static" value="H">
                            </label>
                            <label for="h">Homme</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label><b>date_naissance </b></label>
                        <label>
                            <input type="date" name="date_naissance" class="form-control" value='<?php echo $User->date_naissance ?>' placeholder="Date_naissance">
                        </label>
                    </div>

                    <div class="form-group">
                        <label><b>adresse </b></label>
                        <label>
                            <input type="text" name="adresse" class="form-control" value='<?php echo $User->adresse ?>'  placeholder="Adresse ">
                        </label>
                    </div>

                    <div class="form-group">
                        <label><b>num_tel</b></label>
                        <label>
                            <input type="number" name="num_tel" class="form-control" value='<?php echo $User->num_tel ?>' placeholder="Numero de telephone">
                        </label>
                    </div>

                    <div class="form-group">
                        <label><b>Votre mot de passet</b></label>
                        <label>
                            <input type="password" name="password" class="form-control" value='<?php echo $User->password ?>'  placeholder="Votre mot de passet">
                        </label><br /><br />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Modifier/button>
                    </div>

                    <div class="form-group">
                        <a href='?controller=Utilisateur&action=index' class="form-control">Retour</a>
                    </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
  </body>
</html>
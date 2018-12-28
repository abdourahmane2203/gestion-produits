<?php
require_once 'include/functions.php';
session_start();
    if (!empty($_POST)){

        $errors = array();

        if (empty($_POST['nom']) || !preg_match('/^[a-zA-Zéèçà]+$/', $_POST['nom'])){
            $errors['nom'] = "Votre nom n'est pas valide";
        }

        if (empty($_POST['prenom']) || !preg_match('/^[a-zA-ZéèÉÇç][A-Za-zéçÇÉÁáàè]+([-_\s][a-zA-ZéèÉÇç][A-Za-zéçÇÉÁáàè]+)?/', $_POST['prenom'])){
            $errors['prenom'] = "Vous n'avez pas saisi votre prénom";
        }

        if (empty($_POST['telephone']) || !preg_match('/^[0-9\+]+$/', $_POST['telephone']) ){
            $errors['telephone'] = "Numéro de téléphone non valide";
        }
        if (empty($_POST['adresse'])){
            $errors['adresse'] = "Renseignez bien votre adresse de domicile";
        }

        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email non valide";
        }
        else{
            require_once('include/db.php');
            $req = $db->prepare("SELECT id_client FROM client WHERE email=?");
            $req->execute([$_POST['email']]);
            $client = $req->fetch();
            if($client){
                $errors['email'] = 'Cet email est dejà utilisé veillez choisir un autre';
            }
        }

        if (empty($_POST['mdp']) || $_POST['mdp'] != $_POST['mdp-confirm']){
            $errors['mdp'] = "Donnez un mot de passe valide";
        }

        if (empty($errors)){
            $req = $db->prepare("INSERT INTO client SET nom=?, prenom=?, telephone=?, adresse=?, email=?, mdp=?, status_client=?");
            $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
            $status_client = 'activé';
            $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['adresse'], $_POST['email'], $mdp, $status_client]);
            $client_id = $db->lastInsertId();

            $_SESSION['flash']['success'] = "Votre compte a été bien créé, veillez vous connecter";
            header('location: login.php');
            exit();
        }

    }

?>
<?php require 'include/header.php' ?>
<div class="container spacer"><br>
    <?php if(!empty($errors)) : ?>
    <div class="alert alert-danger">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul>
            <?php foreach($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
    <div class="container col-md-4 col-xs-12 col-md-offset-3 spacer">
        <div class="panel panel-default">
            <div class="panel-heading">Inscription</div>

            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom" class="control-label">Nom :</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                    </div>

                    <div class="form-group">
                        <label for="prenom" class="control-label">Prénom :</label>
                        <input type="text" name="prenom" class="form-control" id="prenom">
                    </div>

                    <div>

                        <div class="form-group">
                            <label for="telephone" class="control-label">Numéro de téléphone :</label>
                            <input type="text" name="telephone" class="form-control" id="telephone">
                        </div>

                        <div class="form-group">
                            <label for="adresse" class="control-label">Adresse de domicile :</label>
                            <input type="text" name="adresse" class="form-control" id="adresse">
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label">Email :</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="mdp" class="control-label">Mot de passe :</label>
                            <input type="password" name="mdp" class="form-control" id="mdp">
                        </div>

                        <div class="form-group">
                            <label for="mdp-confirm" class="control-label">Confirmer le mot de passe :</label>
                            <input type="password" name="mdp-confirm" class="form-control" id="mdp-confirm">
                        </div>

                        <div>
                        <div>
                        <button class="btn btn-primary">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php require 'include/footer.php' ?>
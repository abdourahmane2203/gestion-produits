<?php
require_once 'include/functions.php';
require_once 'include/header.php';
logged_only();
require_once 'include/db.php';
if(!empty($_POST)){
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $email = $_POST['email'];
 $telephone = $_POST['telephone'];
 $adresse = $_POST['adresse'];
if(!empty($_POST['mdp']) && !empty($_POST['mdp-confirm'])){ //debut if 1
  if($_POST['mdp'] == $_POST['mdp-confirm']){ // debut if 2
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $ps = $db->prepare("UPDATE client SET nom=?, prenom=?, telephone=?, adresse=?, mdp=? WHERE email=?");
    $ps->execute([$nom, $prenom, $telephone, $adresse, $mdp, $email]);
    header('location: account.php');
        exit();
  } // fin if 2
  else echo 'Les mots de passe ne correspondent pas';
    } // fin fi 1
else {
    $ps = $db->prepare("UPDATE client SET nom=?, prenom=?, telephone=?, adresse=? WHERE email=?");
    $ps->execute([$nom, $prenom, $telephone, $adresse, $email]);
    header('location: account.php');
    exit();
}
}
//
?>



<div class="container col-md-4 col-xs-12 col-md-offset-3 spacer">
    <div class="panel panel-default">
        <div class="panel-heading">Modifier mes informations personnelles</div>

        <div class="panel-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom" class="control-label">Nom :</label>
                    <input type="text" name="nom" class="form-control" id="nom" value="<?= $_SESSION['auth']->nom;?>">
                </div>

                <div class="form-group">
                    <label for="prenom" class="control-label">Prénom :</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" value="<?= $_SESSION['auth']->prenom;?>">
                </div>

                <div>

                    <div class="form-group">
                        <label for="telephone" class="control-label">Numéro de téléphone :</label>
                        <input type="text" name="telephone" class="form-control" id="telephone" value="<?= $_SESSION['auth']->telephone;?>">
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="control-label">Adresse de domicile :</label>
                        <input type="text" name="adresse" class="form-control" id="adresse" value="<?= $_SESSION['auth']->adresse;?>">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email :<br><?= $_SESSION['auth']->email;?></label>
                        <input type="hidden" name="email" class="form-control" id="email" value="<?= $_SESSION['auth']->email;?>">
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
                            <button class="btn btn-primary">Mettre à jour</button>
                        </div>
            </form>
        </div>
    </div>
</div>

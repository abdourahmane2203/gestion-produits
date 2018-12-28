<?php
require_once 'include/db.php';
if(!empty($_POST)){
$email = $_POST['email'];
if(!empty($_POST['mdp']) && !empty($_POST['mdp-confirm']) && $_POST['mdp'] == $_POST['mdp-confirm']){
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $ps = $db->prepare("UPDATE client SET mdp=? WHERE email=?");
    $ps->execute([$mdp, $email]);
    header('location: login.php');
    exit();
}

else {
    session_start();
    $_SESSION['flash']['danger'] =  'Verifier les mots de passes que vous avez saisi';
}
}
require_once 'include/header.php';
?>

<div class="container col-md-4 col-xs-12 col-md-offset-3 spacer">
    <div class="panel panel-default">
        <div class="panel-heading">Modifier mon mot de passe</div>

        <div class="panel-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email" class="control-label">Votre email : </label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="mdp" class="control-label">Nouveau mot de passe : </label>
                    <input type="password" name="mdp" class="form-control" id="mdp">

                </div>
                <div class="form-group">
                    <label for="mdp" class="control-label">Confirmer le mot de passe : </label>
                    <input type="password" name="mdp-confirm" class="form-control" id="mdp-confirm">

                </div>
                <div>
                    <button class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>

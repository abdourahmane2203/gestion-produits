<?php require_once 'include/functions.php';
?>

<?php require_once 'include/header.php'; ?>
<?php
if(!empty($_POST)){
    if(!empty($_POST['email']) && !empty($_POST['mdp'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        require_once 'include/db.php';
        $req = $db->prepare("SELECT * FROM client WHERE email = ?");
        $req->execute([$email]);
        $client = $req->fetch();
        //debug(password_verify($_POST['mdp'], $client->mdp));

        $ps = $db->prepare("SELECT * FROM commercial WHERE login = ?");
        $ps->execute([$email]);
        $commercial = $ps->fetch();

        if($email == $client->email){
            if(password_verify($mdp, $client->mdp)){
                $status = 'activé';
                if ($client->status_client == $status){
                    session_start();
                    $_SESSION['auth'] = $client;
                    $_SESSION['flash']['success'] = "Vous etes maintenant connecté";
                    header('location: account.php');
                }
                else {
                    echo 'Votre compte  a été desactivé veillez contacter le commercial ';
                }
            }
            else echo 'Mot de passe incorrect';
        }
        elseif ($email == $commercial->login){
            if($mdp == $commercial->mdp){
                session_start();
                $_SESSION['auth'] = $commercial;
                $_SESSION['flash']['success'] = "Vous etes maintenant connecté";
                header('location: listeProduits.php');
            }
            else echo 'Mot de passe incorrect';
        }

    }
    else echo "Veillez renseigner tous les champs";
}
?>
    <br>
    <div class="container col-md-4 col-xs-12 col-md-offset-3 spacer">
        <div class="panel panel-default">
            <div class="panel-heading">Connexion</div>

            <div class="panel-body">
                <form action="" method="post">
                <div class="form-group">
                    <label for="email" class="control-label">Votre email : </label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="mdp" class="control-label">Votre mot de passe : </label>
                    <input type="password" name="mdp" class="form-control" id="mdp">
                    <br><a href="forgetPassword.php">Mot de passe oublié</a>
                </div>

                <div>
                    <button class="btn btn-primary">Se connecter</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'include/footer.php'; ?>
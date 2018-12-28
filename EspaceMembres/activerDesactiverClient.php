<?php
$id = $_GET['id'];
$status = $_GET['status'];
require_once 'include/functions.php';

logged_only();
?>
<?php require_once 'include/headerCommerciaux.php'; ?>
<?php if ($status== "activé") : ?>
 <div class="alert alert-danger">
     Voulez vraiment désactiver cet utilisateur?
     <a href="desactiverClient.php?id=<?=$id;?>&status=<?=$status;?>" >  Désactiver</a>
     <a href="listeUtilisateurs.php">Annuler</a>
 </div>


<?php else : ?>
    <div class="alert alert-danger">
        Voulez vraiment activer cet utilisateur?
        <a href="activerClient.php?id=<?=$id;?>&status=<?=$status;?>">  Activer    </a>
        <a href="listeUtilisateurs.php">  Annuler</a>
    </div>
<?php endif; ?>
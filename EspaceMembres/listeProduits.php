<?php
require_once 'include/functions.php';
logged_only();
require_once 'include/db.php';
$mc ="";
$req = $db->prepare("SELECT * FROM produits");
$req->execute();
if(isset($_GET['motCle'])){
    $mc = $_GET['motCle'];
    $req = $db->prepare("SELECT * FROM produits WHERE nomProd LIKE '%$mc%' ");
    $req->execute();
}
else {
    $req = $db->prepare("SELECT * FROM produits");
    $req->execute();
}
require_once 'include/headerCommerciaux.php';
?>
<div class="container col-md-10"><br>
    <form action="" method="get">
        <div class="form-group">
            <label for="motCle" class="control-label">Mot clé :</label>
            <input type="text" name="motCle" class="form-control-lg" value="<?= $mc; ?>">
            <button class="btn btn-primary">Rechercher</button>
        </div>
    </form>
<div class="panel panel-info">
    <div class="panel-heading">Liste des produits</div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID_PRODUIT</th><th>NOM DU PRODUIT</th> <th>CATEGORIE</th> <th>QUANTITE</th> <th>PRIX</th> <th>PHOTO</th>
                    <th>DESCRIPTION</th>
                </tr>
            </thead>
            <?php while ($produit = $req->fetch()){?>
            <tr>
                <td> <?= $produit->id_produit ?> </td>
                <td><?= $produit->nomProd ?></td>
                <td><?= $produit->categorie ?></td>
                <td><?= $produit->stock ?></td>
                <td><?= $produit->prix ?></td>
                <td><img src="imagesUpload/<?= $produit->photo ?>" alt=" image à afficher" width="100" height="100"></td>
                <td><?= $produit->description ?></td>
                <td><a onclick="return confirm('Etes vous sure de vouloir supprimer ce produit ?') " href="deleteProduit.php?code=<?= $produit->id_produit;?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</div>
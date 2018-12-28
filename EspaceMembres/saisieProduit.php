<?php
        require_once 'include/functions.php';
        logged_only();
        require_once 'include/headerCommerciaux.php';
        if (!empty($_POST)){
        $nomProd = $_POST['nomProd'];
        $categorie = $_POST['categorie'];
        $stock = $_POST['stock'];
        $prix = $_POST['prix'];
        $nomPhoto = $_FILES['photo']['name']; //Pour recuperer le nom de la photo qui sera stocker dans la base de données
        $fichierTmp = $_FILES['photo']['tmp_name']; //Dossier temporaire pour stocker l'image.
        $description = $_POST['description'];
        move_uploaded_file($fichierTmp, 'imagesUpload/'.$nomPhoto); //deplace la photo dans le dossier imagesUpload
        require_once 'include/db.php';
        $req = $db->prepare("INSERT INTO produits(nomProd, categorie, stock, prix, photo, description) VALUES(?,?,?,?,?,?)");

        $req->execute([$nomProd, $categorie, $stock, $prix, $nomPhoto, $description]);
        header('location: listeProduits.php');
    }
?>

<div class="container col-md-4 col-xs-12 col-md-offset-3 spacer">
    <div class="panel panel-default">
        <div class="panel-heading">Ajouter un article</div>

        <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomProd" class="control-label">Nom du produit:</label>
                    <input type="text" name="nomProd" class="form-control" id="nom">
                </div>

                <div class="form-group">
                    <label for="categorie" class="control-label">Catégorie :</label>
                    <input type="text" name="categorie" class="form-control" id="categorie">
                </div>

                <div>

                    <div class="form-group">
                        <label for="stock" class="control-label">Quantité de stosk :</label>
                        <input type="text" name="stock" class="form-control" id="stock">
                    </div>

                    <div class="form-group">
                        <label for="prix" class="control-label">Prix :</label>
                        <input type="text" name="prix" class="form-control" id="prix">
                    </div>

                    <div class="form-group">
                        <label for="photo" class="control-label">Photo :</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>

                    <div class="form-group">
                        <label for="mdp-confirm" class="control-label">Description du produit :</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>

                    <div>
                        <div>
                            <button class="btn btn-primary">Valider</button>
                        </div>
            </form>
        </div>
    </div>
</div>
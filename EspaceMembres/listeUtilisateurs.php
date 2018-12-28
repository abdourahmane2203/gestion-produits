<?php
require_once 'include/functions.php';
logged_only();
require_once 'include/db.php';
$mc ="";
if(isset($_GET['motCle'])){
    $mc = $_GET['motCle'];
    $req = $db->prepare("SELECT * FROM client WHERE nom LIKE '%$mc%' ");
    $req->execute();
}
else {
    $req = $db->prepare("SELECT * FROM client");
    $req->execute();
}
?>
<?php require_once('include/headerCommerciaux.php'); ?>
<div class="col-xs-12 col-md-10 container"><br>

    <form action="" method="get">
        <div class="form-group">
            <label for="motCle" class="control-label">Mot clé :</label>
            <input type="text" name="motCle" class="form-control-lg" value="<?= $mc; ?>">
            <button class="btn btn-primary">Rechercher</button>
        </div>
    </form>
    <div class="panel panel-info spacer">
        <div class="panel-heading">Liste des clients</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID_CLIENT</th><th>NOM</th> <th>PRENOM</th> <th>TELEPHONE</th> <th>DOMICILE</th> <th>EMAIL</th> <th>STATUS ACTUEL</th>
                </tr>
                </thead>

                <tbody>
                <?php while ($clients = $req->fetch()){ ?>
                    <tr>

                        <td><?= $clients->id_client; ?> </td>
                        <td><?= $clients->nom; ?> </td>
                        <td><?=$clients->prenom; ?> </td>
                        <td><?= $clients->telephone; ?> </td>
                        <td><?= $clients->adresse; ?> </td>
                        <td><?php echo ($clients->email) ?> </td>
                        <td>

                        <a href="activerDesactiverClient.php?id=<?= $clients->id_client;?>&status=<?= $clients->status_client;?>"><?php echo ($clients->status_client) ?></a>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

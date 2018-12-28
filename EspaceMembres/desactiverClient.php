<?php
require_once 'include/db.php';
$id = $_GET['id'];
echo $id;
$ps = $db->prepare("UPDATE client SET status_client=? WHERE id_client=?");
$status_client= "desactivé";
$ps->execute([$status_client, $id]);
header('location: listeUtilisateurs.php');
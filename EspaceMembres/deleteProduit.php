<?php
$codeProd = $_GET['code'];
require_once 'include/db.php';
$req = $db->prepare("DELETE FROM produits WHERE id_produit=?");

$req->execute([$codeProd]);
header('location: listeProduits.php');
<?php require_once 'logique.php';

$idVoiture= $_GET['id'];

$query = $pdoVoiture->prepare("SELECT * FROM allemagne WHERE id = :id");
$query->execute(["id"=>$idVoiture]);
$voiture =$query->fetch();

afficher('allemagne/show',["voiture"=>$voiture]);

<?php require_once 'logique.php';

$idVoiture= $_GET['id'];


$query = $pdoVoiture->prepare("SELECT * FROM italie WHERE id = :id");
$query->execute(["id"=>$idVoiture]);
$voiture =$query->fetch();



afficher('italie/show',["voiture"=>$voiture]);

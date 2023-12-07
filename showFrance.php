<?php require_once 'logique.php';

$idVoiture= $_GET['id'];


$query = $pdoVoiture->prepare("SELECT * FROM france WHERE id = :id");
$query->execute(["id"=>$idVoiture]);
$voiture =$query->fetch();



afficher('france/show',["voiture"=>$voiture]);

<?php require_once 'logique.php';
require_once "debugmode.php";

$idVoiture= $_GET['id'];

$query = $pdoVoiture->prepare("SELECT * FROM angleterre WHERE id = :id");
$query->execute(["id"=>$idVoiture]);
$voiture =$query->fetch();

afficher('angleterre/show',["voiture"=>$voiture]);

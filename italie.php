<?php require_once "logique.php";
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM italie");

$voitures = $query->fetchAll();


afficher("italie/index", ["pageTitle"=>"Italie","voitures"=>$voitures]);

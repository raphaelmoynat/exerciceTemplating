<?php require_once "logique.php";
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM allemagne");

$voitures = $query->fetchAll();


afficher("allemagne/index", ["pageTitle"=>"Allemagne","voitures"=>$voitures]);

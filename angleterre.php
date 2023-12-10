<?php require_once "logique.php";
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM angleterre");

$voitures = $query->fetchAll();


afficher("angleterre/index", ["pageTitle"=>"Angleterre","voitures"=>$voitures]);

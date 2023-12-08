<?php require_once "logique.php";
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM france");

$voitures = $query->fetchAll();


afficher("france/index", ["pageTitle"=>"France","voitures"=>$voitures]);


<?php require_once 'logique.php';
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM france");

$voitures = $query->fetchAll();


afficher("voitures/index", ["voitures"=>$voitures]);

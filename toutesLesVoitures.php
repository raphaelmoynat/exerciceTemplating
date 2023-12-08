<?php require_once 'logique.php';
require_once "debugmode.php";

$query = $pdoVoiture->query("SELECT * FROM france UNION ALL SELECT * FROM allemagne UNION ALL SELECT * FROM italie");

$voitures = $query->fetchAll();


afficher("france/index", ["pageTitle"=>"Toutes les voitures","voitures"=>$voitures]);

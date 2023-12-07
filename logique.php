<?php



$dbHost = "localhost:8889";
$dbNameVoiture = "voitures";
$usernameVoiture ="utilisateurVoiture";

$password = "azerty";



$pdoVoiture = new PDO ("mysql:host=$dbHost;dbname=$dbNameVoiture",$usernameVoiture,$password,
  [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ]
);



function afficher($nomDeTemplate, $donnees){

  ob_start();
  extract($donnees);

  require_once "templates/${nomDeTemplate}.html.php";

  $content = ob_get_clean();

  require_once "templates/base.html.php";


}












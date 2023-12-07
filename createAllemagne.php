<?php
require_once "debugmode.php";
require_once "logique.php";

if(isset($_POST['modele']) &&
  isset($_POST['marque']) &&
  isset($_POST['annee']) &&
  isset($_POST['puissance']) &&
  isset($_POST['image'])
){
  $modele = $_POST['modele'];
  $marque = $_POST['marque'];
  $annee = $_POST['annee'];
  $puissance = $_POST['puissance'];
  $image = $_POST['image'];


  if (isset($_POST['modele']) &&
    isset($_POST['marque']) &&
    isset($_POST['annee']) &&
    isset($_POST['puissance']) &&
    isset($_POST['image'])) {
    $query = $pdoVoiture->prepare("INSERT INTO allemagne SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image");

    $query->execute([
      "modele" => $modele,
      "marque" => $marque,
      "annee" => $annee,
      "puissance" => $puissance,
      "image" => $image,
    ]);

    header("Location: allemagne.php");
  }else{
    echo "Veuillez remplir tous les champs avec du texte.";

  }



}

afficher("allemagne/create", ["pageTitle"=> "nouvelle voiture"]);

<?php
require_once "debugmode.php";
require_once "logique.php";

if(isset($_POST['modele']) &&
  isset($_POST['marque']) &&
  isset($_POST['annee']) &&
  isset($_POST['puissance']) &&
  isset($_POST['image']) &&
  isset($_POST['pays'])
){
  $modele = $_POST['modele'];
  $marque = $_POST['marque'];
  $annee = $_POST['annee'];
  $puissance = $_POST['puissance'];
  $image = $_POST['image'];
  $pays = $_POST['pays'];


  if ($pays == "france" or $pays == "France"){
    $query = $pdoVoiture->prepare("INSERT INTO france SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image, pays = :pays");

    $query->execute([
      "modele" => $modele,
      "marque" => $marque,
      "annee" => $annee,
      "puissance" => $puissance,
      "image" => $image,
      "pays" => $pays,
    ]);

    header("Location: france.php");
  }if ($pays == "allemagne" or $pays == "Allemagne"){
    $query = $pdoVoiture->prepare("INSERT INTO allemagne SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image, pays = :pays");

    $query->execute([
      "modele" => $modele,
      "marque" => $marque,
      "annee" => $annee,
      "puissance" => $puissance,
      "image" => $image,
      "pays" => $pays,
    ]);

    header("Location: allemagne.php");
  }if ($pays == "italie" or $pays == "Italie"){
    $query = $pdoVoiture->prepare("INSERT INTO italie SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image, pays = :pays");

    $query->execute([
      "modele" => $modele,
      "marque" => $marque,
      "annee" => $annee,
      "puissance" => $puissance,
      "image" => $image,
      "pays" => $pays,
    ]);

    header("Location: italie.php");
  }
  else{
    echo "Veuillez remplir tous les champs avec du texte.";

  }
  if ($pays == "angleterre" or $pays == "Angleterre"){
    $query = $pdoVoiture->prepare("INSERT INTO angleterre SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image, pays = :pays");

    $query->execute([
      "modele" => $modele,
      "marque" => $marque,
      "annee" => $annee,
      "puissance" => $puissance,
      "image" => $image,
      "pays" => $pays,
    ]);

    header("Location: angleterre.php");
  }
  else{
    echo "Veuillez remplir tous les champs avec du texte.";

  }




}

afficher("create", ["pageTitle"=> "nouvelle voiture"]);

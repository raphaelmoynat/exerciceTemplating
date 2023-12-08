<?php require_once "logique.php";
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
  $id = $_POST['id'];

  $query = $pdoVoiture->prepare("UPDATE italie SET modele = :modele, marque = :marque, annee = :annee, puissance = :puissance, image = :image WHERE id = :id");

  $query->execute([
    "modele" => $modele,
    "marque" => $marque,
    "annee" => $annee,
    "puissance" => $puissance,
    "image" => $image,
    "id" => $id,
  ]);

  header("Location: italie.php");
}




$id = $_GET['id'];



$query = $pdoVoiture->prepare("SELECT * FROM italie WHERE id = :id");

$query->execute([
  "id" => $id
]);

$voiture = $query->fetch();

afficher('italie/edit', ["voiture"=>$voiture,
  "pageTitle"=> $voiture['modele'] ]);

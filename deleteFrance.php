<?php require_once "debugmode.php";
require_once "logique.php";

if(isset($_GET['id'])){

  $id = $_GET['id'];

  $query = $pdoVoiture->prepare("DELETE FROM france WHERE id = :id");
  $query->execute([
    "id"=>$id
  ]);

  header('Location: toutesLesVoitures.php');
}

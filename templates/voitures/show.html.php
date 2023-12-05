<div class='d-flex justify-content-center'>
  <div class='card mb-3' style='width: 18rem;'>
    <img src='<?= $voiture['image'] ?>' class='card-img-top img' alt='#'>
    <div class='card-body'>
      <h5 class='card-title'><?= $voiture['modele'] ?></h5>
      <p class='card-text'><?= $voiture['marque'] ?></p>
      <p class='card-text'><?= $voiture['annee'] ?></p>
      <p class='card-text'><?= $voiture['puissance'] ?></p>
      <a href="toutesLesVoitures.php?id=<?= $voiture['id'] ?>" class="btn btn-warning">retour</a>
      <a href="deleteVoiture.php?id=<?= $voiture['id'] ?>" class="btn btn-danger">supprimer</a>
      <a href="editVoiture.php?id=<?= $voiture['id'] ?>" class="btn btn-warning">editer</a>
    </div>
  </div>
</div>

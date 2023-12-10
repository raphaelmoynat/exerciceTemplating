<div class="row">

  <?php foreach ($voitures as $voiture) :?>

  <div class='col-md-4 d-flex justify-content-center'>
    <div class='card mb-3' style='width: 18rem;'>
      <img src='<?= $voiture['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $voiture['modele'] ?></h5>
        <p class='card-text'><?= $voiture['marque'] ?></p>
        <p class='card-text'><?= $voiture['annee'] ?></p>
        <p class='card-text'><?= $voiture['puissance'] ?></p>
        <p class='card-text'><?= $voiture['pays'] ?></p>
        <a href="showAngleterre.php?id=<?= $voiture['id'] ?>" class="btn btn-warning">voir</a>
        <a href="deleteAngleterre.php?id=<?= $voiture['id'] ?>" class="btn btn-danger">supprimer</a>
        <a href="editAngleterre.php?id=<?= $voiture['id'] ?>" class="btn btn-warning">editer</a>

      </div>
    </div>
  </div>



  <?php endforeach; ?>

</div>

<form action="" method="post" class="form-control">

  <input value="<?= $voiture['modele'] ?>" placeholder="modele" type="text" name="modele" class="form-control mb-3">
  <input value="<?= $voiture['marque'] ?>" placeholder="marque" type="text" name="marque"  class="form-control mb-3">
  <input value="<?= $voiture['annee'] ?>" placeholder="annee" type="text" name="annee" class="form-control mb-3">
  <input value="<?= $voiture['puissance'] ?>" placeholder="puissance" type="text" name="puissance" class="form-control mb-3">
  <input value="<?= $voiture['image'] ?>" placeholder="image" type="text" name="image" class="form-control mb-3">
  <button name="id" value="<?= $voiture['id'] ?>" class="btn btn-primary" type="submit" >Modifier</button>

</form>

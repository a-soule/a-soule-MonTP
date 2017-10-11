<h1><?= $titre ?></h1>

<?= validation_errors() ?>

<?= form_open('reservations/ajouter') ?>
<!-- formulaire d'ajout-->

<label for="dateArrivee">Date Arrivée</label>
<input type="date" name="dateArrivee" />

<br>

<label for="dateDepart">Date Départ</label>
<input type="date" name="dateDepart" />

<br>

<label for="nbPersonnes">Nombre de Personne(s)</label>
<input type="number" name="nbPersonnes" />

<br>

<label for="menage">Menage fin de séjour</label>
<input type="boolean" name="menage" />

<br>

<label for="pensionC">Pension complète</label>
<input type="boolean" name="pensionC" />

<br>

<label for="etatReservation">Etat Réservation</label>
<input type="text" name="etatReservation" />

<br>

<input type="submit" name="submit" value="Ajouter" />

<br><br>
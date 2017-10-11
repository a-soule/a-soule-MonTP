<h1> <?php echo "$titre (Client n° $num )";?> </h1>
<p> Liste des réservations : </p>
<!-- affiche les résultats sous forme de tableau-->

<table border="5">
<tr> <!--1ère ligne, les titres de chaque colonne-->
        <th>idReservation</th>
        <th>date Arrivee</th>
        <th>date Depart</th>
        <th>nombre de Personnes</th>
        <th>menage fin de séjour</th>
        <th>Pension Complète</th>
        <th>Demi-Pension</th>
        <th>Etat Reservation</th>
        
        
</tr>

<?php
foreach ($reservation as $reserv): ?>
<!-- resultats -->
        <tr>
        <td><?= $reserv->idReserv ?></td>
        <td><?= $reserv->dateArrivee ?></td>
        <td><?= $reserv->dateDepart ?></td>
        <td><?= $reserv->nbPersonnes ?></td>
        <td><?= $reserv->menage ?></td>
        <td><?= $reserv->pensionC ?></td>
        <td><?= $reserv->demiPension ?></td>
        <td><?= $reserv->etatReservation ?></td>
        
   
    </tr>
<?php endforeach; ?>

</table> 



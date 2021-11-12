<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT salles.nom AS 'peterpue', etage.nom AS 'fumertue' FROM salles INNER JOIN etage");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Etage</th>

        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant["peterpue"].' '.'</td>';
            echo '<td>'.$etudiant["fumertue"].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
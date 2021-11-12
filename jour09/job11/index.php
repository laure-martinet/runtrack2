<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT AVG (capacite) FROM `salles`");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>Capa</th>

        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant["AVG (capacite)"].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
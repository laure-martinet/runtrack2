<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT nom, capacite FROM salles");
$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>
<html>
<table border="3">
    <thead>
        <tr>
            <th>Capacite</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($salles as $salle){
            echo '<tr>';
            echo '<td>'.$salle['capacite'].' '.'</td>';
            echo '<td>'.$salle['nom'].' '.'</td>';
            
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
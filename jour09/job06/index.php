<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT COUNT(*) FROM `etudiants`");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>

        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant['COUNT(*)'].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
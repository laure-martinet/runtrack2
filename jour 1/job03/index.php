<?php
$mybool = true;
$myint = 4;
$mystring = "pitbull";
$myfloat = 3.3;
?>

<html lang="fr">
    <meta charset="UTF-8">
    <header>
        <table border="1">
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        <tr>
            <td>Boléen</td>
            <td>$mybool</td>
            <td><?php echo $mybool; ?></td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>$myint</td>
            <td><?php echo $myint; ?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>$mystring</td>
            <td><?php echo $mystring; ?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>$myfloat</td>
            <td><?php echo $myfloat; ?></td>
       </tr>
   </header>
</html>
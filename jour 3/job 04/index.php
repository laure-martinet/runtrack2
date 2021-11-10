<?php
$str = "Dans l'espace, personne ne vous entend crier";
$x = 0;
while ($x <= 44)
{
    echo "<b>".$str[$x]."</b> est le <b>".$x."</b> caractère <br/>";
    $x++;
}
echo "<br/><b>Il y a ".$x." caractères au total.</b>";
?>
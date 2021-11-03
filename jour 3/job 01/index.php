<?php
$array = array(200, 204, 173,98, 171, 404, 459);
$x = 0;

while ($x <=6)
{
    if ($array [$x] % 2 == 0)
    {
        echo $array [$x] . " est pair";
    }
    else 
    {
        echo $array [$x] . " est impair";
    }
    echo "<br/>";
    $x++;
}
?>
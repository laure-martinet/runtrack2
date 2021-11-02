<?php
$nombre = 0;
while ($nombre <= 1000)
{
    $chiffre = 1;
    $multiple= 0;

    while ($chiffre <= $nombre)
    {
        if($nombre % $chiffre == 0)
        {
        $multiple++;
        }
       $chiffre++;
    }

    if ($multiple == 2)
    echo $nombre. '<br>';
     $nombre++;
}
?>
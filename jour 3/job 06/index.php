<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$x = strlen ($str) -1;
$output = "";

while ($x >= 0)
{
    $output = $output . $str [$x];
    $x --;
}
echo $str; 
echo "</br>". $output;
?>
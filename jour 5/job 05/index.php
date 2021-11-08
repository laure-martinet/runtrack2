<?php
function occurrences ($char, $str){
$x = 0;
    for ($i = 0; isset ($str[$i]); $i++){
    if ($char == $str [$i] ){
    $x++;
}
}
return $x;
}
echo occurrences("o","chocolat")
?>
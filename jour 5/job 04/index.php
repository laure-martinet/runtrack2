<?php 
function calcule($a, $b, $operation)
{
if ($operation == "+"){
    $resultat = $a + $b;
}
 else if ($operation == "-"){
     $resultat = $a - $b;
 }   
 else if ($operation == "*"){
     $resultat = $a * $b;
 }
 else if ($operation == "%"){
     $resultat = $a % $b;
 }
 else if ($operation == "/"){
     $resultat = $a / $b;
 }
 return $resultat;
}
$a = 6;
$b = 4;
$operation = "-";
echo calcule ($a, $b, $operation);

switch($opértion){
    case"+":
        $resultat = $a + $b;
        break;
    case"-":
        $resultat = $a - $b
        break;
    
}

?>
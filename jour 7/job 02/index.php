<?php
session_start();

if(!isset($_COOKIE['nbvisites'])){
      setcookie('nbvisites', 0);
}
// Mettre setcookie avant CHAQUE MODIFICATION

else{
    setcookie('nbvisites', $_COOKIE['nbvisites']+1);
    echo $_COOKIE['nbvisites'];
}

if (isset($_GET["reset"])){
    header("location: index.php");
    //Pour renvoyer sur le header une fois le cookie reset
    setcookie('nbvisites', 0);
}
?>

<form action="index.php" method="GET">
    <input type="submit" value="reset" name="reset" >
</form>

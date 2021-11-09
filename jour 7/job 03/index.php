<?php
session_start();

if(!isset($_SESSION["prénom"])){
    $_SESSION["prénom"] = "";
}
if(isset($_POST["Envoyer"])){
    $_SESSION["prénom"] = $_SESSION["prénom"] . $_POST["prénom"]. "<br />";
    echo $_SESSION["prénom"];
}

if(isset($_POST["Reset"])){

    header("location: index.php");
    $_SESSION["prénom"] = null;
}
?>

<form action="index.php" method="post">
    <label for="prénom">Prénom</label>
        <input type="text" name="prénom" id="prénom" >

        <input type="submit" name="Envoyer" id="Envoyer">

        <input type="submit" name="Reset" id="Reset" value="Reset">

</form>
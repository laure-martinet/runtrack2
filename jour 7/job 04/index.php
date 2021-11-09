<?php
    if(isset($_GET['prenom']))
    {
        setcookie('prenom', $_GET['prenom']);
        header( 'location: index.php');
    }
    if(isset($_GET['deconnexion']))
    {
        setcookie('prenom', 0, 1);
    }
?>
<?php if(!isset($_COOKIE['prenom'])) {?>
<form action="index.php" method="get">
    <input type="text" name="prenom">
    <button type="submit" name="submit" value="1">
        connexion
    </button>
</form>

<?php } else { ?>
    Bonjour <?= $_COOKIE['prenom'] ?> 
<form action="index.php" method="get">
    <button name="deconnexion" value="1">
        Déconnexion
    </button>
</form>
<?php } ?>
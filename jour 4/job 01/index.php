<!DOCTYPE html>
<html>
<body>

<h2>Formulaire php</h2>

<form action="" method="GET"> <?php
var_dump ($_GET);
var_dump ($_POST);
if (isset ($_GET ['arg1']))
    ?>
  <label for="prenom">First name:</label><br>
  <input type="text" id="prenom" name="prenom" value="John"><br>
  <label for="nom">Last name:</label><br>
  <input type="text" id="nom" name="nom" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
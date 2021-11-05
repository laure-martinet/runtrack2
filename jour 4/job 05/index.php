<form method="POST" action="">
                    <label>Username</label>
                    <input type="text"  name="username">

                    <label>Password</label>
                    <input type="password"  name="password">

                    <input type="submit" value="Envoyer" >

            </form>
<?php
$x1 = "C'est pas ma guerre";
$x2 = "Votre pire du cauchemar";
if($_POST == true) {
if ($_POST ["username"] == "John" && $_POST ["password"] == "Rambo") {
    echo $x1;
}
else {
    echo $x2;
    }
} 
?>
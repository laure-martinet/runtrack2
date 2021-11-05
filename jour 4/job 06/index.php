<form method="GET" action="">
                    <label>Nombre</label>
                    <input type="text"  name="nombre">
                    <input type="submit" value="Envoyer" >
</form>
<?php

if($_GET == true) {
if ($_GET ["nombre"]  %2 == 0){
    echo "Nombre pair";
}
else {
    echo "Nombre impair";
}
} 
?>
<?php
session_start();
if(isset($_GET["reset"])){
    $_SESSION["nbvisites"]=0;
}
elseif(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"]=0;
}
else{
    $_SESSION["nbvisites"] +=1;
}
echo $_SESSION["nbvisites"];
   
?>
<form action="index.php" method="GET">
<button name="reset">Reset</button></form>


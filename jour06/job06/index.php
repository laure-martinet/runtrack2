
<?php
$style = "style1.css";
if ($_GET==true){
switch ($_GET ["style"]){
case "rouge":
$style="style1.css";
break;
}

switch ($_GET ["style"]){
    case "vert":
     $style="style2.css";
    break;
}

    switch ($_GET ["style"]){
        case "bleu":
         $style="style3.css";
        break;
    }
}
?>

<!doctype html>
<html lang="fr">
   <head>
        <meta charset="utf-8">
        <title>Style</title>
        <link rel="stylesheet" type="text/css" href=<?php echo $style; ?> >
        <body>
<form method="GET" action="">
                        Test
                    <select name="style" size ="2">
                        <option value="rouge"> style1
                        <option value="vert"> style2
                        <option value="bleu"> style3
                    </select>
                    <input type="submit" value="Envoyer" >
</form>
</body>
</html>
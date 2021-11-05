<table border=1>
	      <thead>
           <th>Argument</th>
            <th>Valeur</th>
        	</thead> 
            <form method="$_GET" action="index.php">
                    <label>nom</label>
                    <input type="text"  name="nom">

                    <label>prenom</label>
                    <input type="text"  name="prenom">

                    <input type="submit" value="Envoyer" >

            </form> <br>
	<?php
    foreach ($_GET as $argument => $value) 
     {
	echo
	"<tr>
		<td>".$argument."</td>
		<td>".$value."</td>
	</tr>";
     }
?>
<table border=1>
	      <thead>
           <th>Argument</th>
            <th>Valeur</th>
        	</thead> 
            <form method="POST" action="">
                    <label>Nom</label>
                    <input type="text"  name="nom">

                    <label>Prenom</label>
                    <input type="text"  name="prenom">

                    <input type="submit" value="Envoyer" >

            </form> <br>
	<?php
    $i = 0;
    foreach ($_POST as $argument => $value) 
     {
	echo
	"<tr>
		<td>".$argument."</td>
		<td>".$value."</td>
	</tr>";
     }
?>
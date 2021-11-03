<?php
	
	$str = "On nest pas le meilleur quand on le croit mais quand on le sait.";
	$dic = array("voyelles"=>array("a","e","i","o","u","y","A","E","I","O","U","Y"),
				 "consonnes"=>array("q","w","r","t","p","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"));
				 
	$voyelles = 0;
	$consonnes = 0;
	
	$x=0;
	while($x<=63)
	{
		$subx = 0;
		while($subx<=11)
		{
			if($dic["voyelles"][$subx]==$str[$x])
			{
				$voyelles ++;
			}
			
			$subx++;
		}
		$subx1 = 0;
		
		while($subx1<=19)
		{
			if($dic["consonnes"][$subx1] == $str[$x])
			{
				$consonnes++;
			}
			$subx1++;
		}
		$x++;
	}
	
	
	echo "<table> 
			<thead>
				<th>Consonnes</th>
				<th>Voyelles</th>
			</thead>
			<tbody>
				<tr>
					<td>".$consonnes."</td>
					<td>".$voyelles."</td>
				</tr>
			</tbody>
	      </table>";

?>
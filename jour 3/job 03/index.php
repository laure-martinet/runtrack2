<?php
	$str="I'm sorry Dave I'm afraid I can't do that.";
	
	$voyelle=array("a","e","i","o","u","y","A","E","I","O","U","Y");
	
	$x=0;
	
	while($x<=41)
	{
		$subx=0;
		while ($subx<=11)
		{
			if($voyelle[$subx] == $str[$x])
			{
				echo $str[$x];
			}
			$subx++;
		}
		$x++;
	}
?>
